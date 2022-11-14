<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Requests\CVRequest;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
	public function update(CVRequest $request, User $user)
	{
		if (Cv::where('user_id', $user->id)->exists()) {
			$currentFileName = Cv::select('cv_path')->where('user_id', $user->id)->first();
			Cv::where('user_id', $user->id)->delete();
			Storage::disk('local')->delete('/' . $currentFileName->cv_path);
		}

		$name = Str::slug($user->fullName() . ' ' . mt_rand(1, time()) . ' ' . 'CV');
		$fileName = $name . '.' . $request->file('cv')->extension();

		if (!Storage::disk('local')->exists('/cv/'))
			Storage::makeDirectory('cv');

		$file = Storage::putFileAs('cv', $request->file('cv'), $fileName);

		$userCv = $user->cv()->save(new Cv([
			'user_id' => $user->id,
			'title' => $name,
			'cv_path' => $file
		]));

		if (!$userCv) {
			Storage::delete($file);
			return back();
		}

		return back()->withToastSuccess(__('app.cvUploaded'));
	}

	public function destroy(User $user)
	{
		$currentFileName = Cv::select('cv_path')->where('user_id', $user->id)->first();
		$deleteCv = Cv::where('user_id', $user->id)->delete();

		if(!$deleteCv) abort(404);

		Storage::disk('local')->delete('/' . $currentFileName->cv_path);

		return back()->withToastSuccess(__('app.cvDeleted'));
	}
}

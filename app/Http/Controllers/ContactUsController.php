<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{
	public function store(ContactUsRequest $request, User $user)
	{
		$user = Contact::create([
			'user_id' => $user->id,
			'fname' => $request->fname,
			'lname' => $request->lname,
			'email' => $request->email,
			'tel' => $request->tel,
			'msg' => $request->msg,
		]);

		if(!$user) abort(404);

		return back()->withToastSuccess(__('app.message'));
	}
}

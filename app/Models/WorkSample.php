<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkSample extends Model
{
	use HasFactory;

	protected $table = 'work_samples';

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function like()
	{
		return $this->hasOne(Like::class, 'work_samples_id');
	}

	public function skills()
	{
		return $this->morphMany(Skill::class, 'skillable');
	}

	public static function authUser()
	{
		$user = auth()->user()->id;
		return WorkSample::with('user')->where('work_samples.user_id', $user);
	}

	public function pic()
	{
		return 'https://dummyimage.com/250x250/000/fff';
	}
}

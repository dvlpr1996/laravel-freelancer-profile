<?php

namespace App\Models;

use App\Models\Cv;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Contact;
use App\Models\WorkSample;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	protected $fillable = [
		'fname',
		'lname',
		'slug',
		'email',
		'password',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function workSamples()
	{
		return $this->hasMany(WorkSample::class)->orderByDesc('created_at');
	}

	public function contacts()
	{
		return $this->hasMany(Contact::class)->orderByDesc('created_at');
	}

	public function socials()
	{
		return $this->hasMany(Social::class)->orderByDesc('created_at');
	}

	public function cv()
	{
		return $this->hasOne(Cv::class);
	}

	public function skill()
	{
		return $this->morphOne(Skill::class, 'skillable');
	}

	public function fullName()
	{
		return $this->fname . ' ' . $this->lname;
	}

	public function gravatar()
	{
		$hash = md5(strtolower($this->attributes['email']));
		return "http://s.gravatar.com/avatar/$hash";
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
	use HasFactory;

	protected $fillable = ['name'];

	public function skillable()
	{
		return $this->morphTo();
	}

	protected function name(): Attribute
	{
		return Attribute::make(
			get: fn ($value) => ucwords($value)
		);
	}
}

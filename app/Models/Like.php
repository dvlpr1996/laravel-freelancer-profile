<?php

namespace App\Models;

use App\Models\WorkSample;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
	use HasFactory;

	public function workSample()
	{
		return $this->belongsTo(WorkSample::class);
	}

	// public function like()
	// {
	// 	$this->increment('', 1);
	// 	$this->save();
	// }

	// public function dislike()
	// {
	// 	$this->decrement('', 1);
	// 	$this->save();
	// }
}

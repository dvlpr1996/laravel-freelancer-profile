<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'oldPassword' => ['required', 'min:6', 'string'],
			'newPassword' => ['required', 'confirmed', 'min:6', 'string']
		];
	}
}

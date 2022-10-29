<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'fname' => ['nullable', 'alpha', 'min:1', 'max:16'],
			'lname' => ['nullable', 'alpha', 'min:1', 'max:32'],
			'tel' => ['nullable', 'string', 'digits:11'],
			'date_of_birth' => ['nullable', 'date'],
			'slug' => [
				'nullable', 'string',
				Rule::unique('users', 'slug')->ignore($this->user()->id)
			],
			'email' => [
				'nullable', 'string', 'email',
				Rule::unique('users', 'email')->ignore($this->user()->id)
			],
			'skill' => ['nullable', 'string'],
			'address' => ['nullable', 'string', 'max:512'],
			'bio' => ['nullable', 'string', 'max:1024']
		];
	}
}

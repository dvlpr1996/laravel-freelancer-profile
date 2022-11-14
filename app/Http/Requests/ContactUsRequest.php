<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'fname' => ['required', 'alpha', 'min:1', 'max:16'],
			'lname' => ['required', 'alpha', 'min:1', 'max:32'],
			'tel' => ['required', 'string', 'digits:11'],
			'email' => ['required', 'string', 'email'],
			'msg' => ['required', 'string', 'max:1024']
		];
	}
}

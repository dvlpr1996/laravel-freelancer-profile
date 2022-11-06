<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CVRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'cv' => ['required', 'unique:cvs,user_id', 'file', 'min:1', 'max:1024', 'mimes:pdf,doc,docx']
		];
	}
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $contactId = $this->route('contact')->id;

        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:contacts',
            'phone' => 'string',
            'job' => 'string',
            'address' => 'required',
            'birthday'=>'required',
            'city' => 'nullable|string',
            'language' => 'nullable|in:English,Arabic',
        ];
    }
}

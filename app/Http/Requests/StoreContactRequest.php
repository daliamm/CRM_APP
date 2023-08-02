<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
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

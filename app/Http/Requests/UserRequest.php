<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    $rules = [
        'name' => ['required'],
        'password' => ['nullable', 'min:8'],
    ];

    $emailRules = ['required', 'string'];

    // Add unique rule with condition
    if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
        $emailRules[] = Rule::unique('users')->ignore(Auth::id());
    } else {
        $emailRules[] = 'unique:users';
    }

    $rules['email'] = $emailRules;

    return $rules;
}

    
}

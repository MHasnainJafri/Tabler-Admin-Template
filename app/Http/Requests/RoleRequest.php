<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'permissions' => ['array'],
        ];
    
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['name'] = ['required', 'string', 'unique:roles,name,' . $this->route('role')];
        } else {
            $rules['name'] = ['required', 'string', 'unique:roles'];
        }
    
        return $rules;
    }
    
}

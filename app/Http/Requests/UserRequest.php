<?php

namespace App\Http\Requests;

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

       $userId = $this->route('user');


        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . ($userId ? $userId->id : null),
            'password' => 'required|min:6',
            'endereco' => 'required',
            'telefone' => 'required'

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'o campo nome é obrigatório',
            'email.required' => 'o campo email é obrigatório',
            'email.email' => 'o email deve ser um email válido',
            'email.unique' => 'o email já está em uso, utilize outro',
            'password.required' => 'o campo senha é obrigatório',
            'password.min' => 'a senha deve ter no min 6 caracteres',
            'endereco.required' => 'o campo endereço é obrigatório',
            'endereco.required' => 'o endereço deve ser válido',
            'telefone.required' => 'o campo telefone é obrigatório',
            'telefone.required' => 'digite um telefone válido'
        
        ];
    }
}

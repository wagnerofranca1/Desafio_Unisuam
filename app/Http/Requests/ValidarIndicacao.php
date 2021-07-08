<?php

namespace App\Http\Requests;

use App\Rules\ValidaCpf;
use Illuminate\Foundation\Http\FormRequest;

class ValidarIndicacao extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'email'=> 'email',
            'cpf'=> ["required", new ValidaCpf]
        ];
    }
    public function messages ()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome precisa ter pelo menos três caracteres',
            'email.email'=> 'Você tem que digitar um e-mail valido!' 
        ];
    }
}

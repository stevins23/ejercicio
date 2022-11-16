<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //campo codigo sea siempre 4 números, un guión y una letra.
            'codigo' => 'required|regex:/^[0-9]{4}-[a-zA-Z]$/',
            'nombre' => ['required', 'string', 'max:8'],
            'apellidos' => ['required', 'string', 'max:10'],
        ];
    }
}

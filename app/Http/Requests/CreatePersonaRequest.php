<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    //verifica el usuario autorizado
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
        return [
            'cPerApellido' => 'required|string|max:50',
            'cPerNombre' => 'required|string|max:50',
            'cPerDireccion' => 'required|string|max:100',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0',
            'cPerSexo' => 'nullable|string|max:50',
            'nPerSueldo' => 'required|numeric|min:0',
            'cPerRnd' => 'required|string|max:50',
            'nPerEstado' => 'required|string|size:1'

        ];
    }
    // las reglas  de validación
    public function messages(): array
    {
        return [
            'cPerApellido.required' => 'El campo apellido es obligatorio.',
            'cPerNombre.required' => 'El campo nombre es obligatorio.',
            'cPerDireccion.required' => 'El campo dirección es obligatorio.',
            'dPerFecNac.required' => 'El campo fecha de nacimiento es obligatorio.',
            'dPerFecNac.date' => 'Se necesita un fecha de nacimiento para la persona.',
            'nPerEdad.required' => 'El campo edad es obligatorio.',
            'nPerEdad.integer' => 'El campo edad debe ser un número entero.',
            'cPerSexo.string' => 'El campo sexo debe ser una cadena de texto.',
            'nPerSueldo.required' => 'El campo sueldo es obligatorio.',
            'nPerSueldo.numeric' => 'El campo sueldo debe ser un número.',
            'cPerRnd.required' => 'El campo REGISTRO NACIONAL DE DETENCIONES (RND) es obligatorio.',
            'nPerEstado.required' => 'El campo estado es obligatorio.',
            'nPerEstado.string' => 'El campo estado debe ser una cadena de texto.',
            'nPerEstado.size' => 'El campo estado debe ser un solo carácter.'
        ];
    }

}

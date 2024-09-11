<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function showForm()
    {
        return view('a/c19');
    }

    public function handleForm(Request $request)
    {
        // Definir las reglas de validación
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ];

        // Definir los mensajes de error personalizados
        $messages = [
            'name.required' => 'Por favor, ingrese su nombre.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'email.required' => 'Por favor, ingrese su correo electrónico.',
            'email.email' => 'Por favor, ingrese una dirección de correo electrónico válida.',
        ];

        // Crear un validador con las reglas y mensajes personalizados
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('formulario.show')
                ->withErrors($validator)
                ->withInput();
        }

        // Procesar los datos si la validación es exitosa
        // ...
        return 'Formulario enviado correctamente!';
    }

    public function showFormWithoutErrors()
    {
        return view('a/c19');
    }

    public function handleFormWithoutErrors(Request $request)
    {
        // Definir las reglas de validación
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ];

        // Crear un validador sin mensajes personalizados
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // Redirigir de vuelta al formulario sin proporcionar mensajes de error específicos
            return redirect()->route('formulario.sinErrores')
                ->withErrors($validator)
                ->withInput();
        }

        // Procesar los datos si la validación es exitosa
        // ...
        return 'Formulario enviado correctamente!';
    }
}

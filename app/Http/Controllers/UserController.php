<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\SendPasswordMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function store(Request $request)
    {
        
        // Validación
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'zone' => 'required',
            'phone' => 'required',
        ]);

        // Generar una contraseña aleatoria
        $generatedPassword = Str::random(10); // Genera una contraseña de 10 caracteres

        // Crear el nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'zone' => $request->zone,
            'phone' => $request->phone,
            'password' => bcrypt($generatedPassword), // Encripta la contraseña generada
        ]);

        // Redirigir o devolver la contraseña generada
        //return redirect()->back()->with('success', 'Usuario creado exitosamente. La contraseña generada es: ' . $generatedPassword);

        Mail::to($user->email)->send(new SendPasswordMail($user, $generatedPassword));


        return redirect()->back()->with('success', 'Usuario creado exitosamente. Su contraseña fue enviado al correo registrado.');
    }
}

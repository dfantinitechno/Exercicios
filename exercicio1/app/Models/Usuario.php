<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected  $primaryKey = 'id';
    protected $fillable = ['name', 'userName', 'zipCode', 'email', 'password'];

    public function store(object $request, int $id = null)
    {
        try {

            if (isset($id) && !empty($id)) {
                $usuario = self::find($id);
            } else {
                $usuario = new self();
            }

            $usuario->name = $request->name;
            $usuario->userName = $request->userName;
            $usuario->zipCode = $request->zipCode;
            $usuario->email = $request->email;
            $usuario->password = $request->password;
            $usuario->save();

            $usuarios = self::all();
            return view('index', compact('usuarios'));
        } catch (\Exception $e) {

            $error = true;
            $message = 'Nome de usuário já cadastrado, tente novamente.';
            return view('create', compact('error', 'message'));

        }
    }
}

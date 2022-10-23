<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Usuario;
use Exception;

class UsuarioController extends Controller
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function getUsers(int $id = null)
    {
        try {

            if (isset($id) && !empty($id)) {
                $usuario = $this->usuario->findOrFail($id);
                return view('create', compact('usuario'));
            } else {
                $usuarios = $this->usuario->all();
                return view('index', compact('usuarios'));
            }
            
        } catch (Exception $e) {
            abort(404);
        }
    }

    public function create()
    {
        return view('create');
    }

    public function store(UserRequest $request)
    {
        return $this->usuario->store($request);
    }

    public function update(UserRequest $request, int $id)
    {
        return $this->usuario->store($request, $id);
    }

    public function destroy(int $id)
    {
        try {

            Usuario::findOrFail($id)->delete();
            $usuarios = $this->usuario->all();
            return view('index', compact('usuarios'));

        } catch (Exception $e) {
            abort(404);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{

    public function listaUsuarios()
    {
        $usuarios = UserService::lista();

        return response()->json($usuarios);
    }
}

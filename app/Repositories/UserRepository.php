<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{

    public static function lista()
    {
        //recupera dados...
        $usuarios = User::all();

        return $usuarios;
    }
}

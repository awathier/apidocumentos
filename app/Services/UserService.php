<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{

    public static function lista()
    {

        //insere alguma regra de negocio...
        $usuarios = UserRepository::lista();

        return $usuarios;
    }
}

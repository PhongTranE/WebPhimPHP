<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Controller;
use App\Databases\Database;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = new User();

        // var_dump($user);
        $users = $user->getAll();

        $user = $user->getById(1);

        $this->render('layouts/master', ['users' => $users, 'user' => $user]);
    }
}

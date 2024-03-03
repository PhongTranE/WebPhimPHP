<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            new User('John Doe', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aac0c5c2c4eacfd2cbc7dac6cf84c9c5c7">[email&nbsp;protected]</a>'),
            new User('Jane Doe', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="593338373c193c21383429353c773a3634">[email&nbsp;protected]</a>')
        ];

        $this->render('user/index', ['users' => $users]);
    }
}

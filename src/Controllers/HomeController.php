<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $this->render('layouts/master');
    }
}

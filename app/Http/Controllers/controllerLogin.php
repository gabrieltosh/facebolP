<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerLogin extends Controller
{
    public function look()
    {
        return view('admin.login');
    }
}

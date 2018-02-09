<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPanel extends Controller
{
    public function look()
    {
        return view('admin.panel');
    }
}

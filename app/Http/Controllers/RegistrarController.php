<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function dashboard()
    {
        return view('registrar.dashboard');
    }
}

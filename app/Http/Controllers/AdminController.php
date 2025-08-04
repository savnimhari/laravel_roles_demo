<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageUsers()
    {
        return view('admin.users');
    }

    public function manageRoles()
    {
        return view('admin.roles');
    }

    public function managePermissions()
    {
        return view('admin.permissions');
    }
}

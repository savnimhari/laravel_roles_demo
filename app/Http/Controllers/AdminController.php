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





    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()  // Changed from manageUsers()
    {
        return view('admin.users');
    }

    public function roles()  // Changed from manageRoles()
    {
        return view('admin.roles');
    }

    public function permissions()  // Changed from managePermissions()
    {
        return view('admin.permissions');
    }

    public function assignPermissions()
    {
        // Your implementation here
    }
}


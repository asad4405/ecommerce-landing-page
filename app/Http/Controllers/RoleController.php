<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    function role_manage()
    {
        return view('admin.role.index');
    }
}

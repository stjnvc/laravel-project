<?php

namespace App\Http\Controllers;

use App\Models\Role;

class RoleController extends Controller
{
    public function index ()
    {
        return response()->json(Role::all()->map(function ($role){
            $role->name = ucfirst($role->name);
            return $role;
        }));
    }

}

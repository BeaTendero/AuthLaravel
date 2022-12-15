<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    const SUPER_ADMIN_ROLE_ID = 3 ;

    public function addSuperAdminRoleByIdUser($id)
    {
        try{
            $userId = $id;
            $user = User::find ($userId);

            $user->roles()
        }
    }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesControler extends Controller
{
    public static function middleware():array
    {
        return[
            'role_or_permission:Admin_Utama|authorize',
        ];
    }
}

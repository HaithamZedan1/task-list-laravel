<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function show($user){
        echo "hello cont ".$user;
    }
}

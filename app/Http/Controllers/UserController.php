<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function GetData(Request $req){
        return $req->input();
    }
}

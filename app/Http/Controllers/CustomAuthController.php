<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CustomAuthcontroller extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function Registration(){
        return view("auth.registration");
    }
    
        function save(Request $request){
            $request->validate([
                "email"=>"required",
                "password"=>"required"
            ]);
        }
    
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('Register');
    }

    public function showData(Request $req)
    {

        $req->validate(
            [
                "name" => "required",
                "email" => "required|email",
                "password" => "required|confirmed",
                "password_confirmation" => "required",
            ]
        );

        echo "<pre>";
        print_r($req->all());

        // echo "name " . $req["name"] . "<br>";
        // echo "email " . $req["email"] . "<br>";
        // echo "password " . $req["password"];
    }
}

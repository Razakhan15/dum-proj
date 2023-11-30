<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
        print_r($req->all());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Halo(){
        return view('Homepage', ['title' => 'Home Page']);
    }
}

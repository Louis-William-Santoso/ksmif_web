<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Playground
{
    function playground(){
        $data = ['navbar' => 'playground', 'auth' => Auth::check()];;
        return view('playground', compact('data'));
    }
}

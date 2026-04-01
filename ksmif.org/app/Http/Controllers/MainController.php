<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class MainController extends Controller
{
    function homepage(){
        $data=['navbar' => 'homepage'];
        return view('welcome', compact('data'));
    }

    function ourTeam(){
        $data=['navbar' => 'ourTeam'];
        return view('ourTeam', compact('data'));
    }
}

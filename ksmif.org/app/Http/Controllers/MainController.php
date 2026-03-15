<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class MainController extends Controller
{
    function navbar_page($pageName='homepage'){
        
        if($pageName == 'homepage'){
            return view('welcome', ['navbar' => $pageName]);
        }
        else{
            return response()->json(['navbar' => $pageName]);
        }
    }
}

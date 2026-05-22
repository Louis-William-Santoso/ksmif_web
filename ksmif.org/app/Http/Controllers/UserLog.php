<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserLog
{
    function userLogin(Request $req){
        try{
            $username = $req->input('username');
            $passwd   = $req->input('password');
            if(strlen($username)<1 || strlen($passwd)<1) throw new Exception("Username or Password is empty", 0);
            $login = Auth::attempt(['username'=>$username, 'password'=>$passwd],true);
            if($login){ 
                /** @var \App\Models\User $user */
                $user  = Auth::user();
                $token = $user->createToken('login')->plainTextToken;
                $data  = [
                    'user' => $user,
                    'token'=> $token
                    ];
            }else{throw new Exception("Invalid username or password",0);}
            return redirect("/dashboard?user={$user->id}",302)->with($data);
            // return response()->json($data);
        }catch(Exception $ex){
            $data = ['err' => $ex->getMessage()];
            if($ex->getCode() == 0) return response()->json($data);
            return view("errors.{$ex->getCode()}",compact($data));
        }
    }

    function dashboard(Request $req){
        try{
            $data = User::find($req->query('user'));
            return response()->json($data);
        }catch(Exception $ex){
            $data = ['err' => $ex->getMessage()];
            return view("errors.{$ex->getCode()}",compact('data'));
        }
    }
}

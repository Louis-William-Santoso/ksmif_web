<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Members;
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
            return redirect("/dashboard",302)->with($data);
            // return response()->json($data);
        }catch(Exception $ex){
            $data = ['err' => $ex->getMessage()];
            if($ex->getCode() == 0) return response()->json($data);
            return view("errors.{$ex->getCode()}",compact($data));
        }
    }

    function dashboard(){
        try{
            $now = (time() <= strtotime('01-09-2026')) ? '2025':'2026';
            $member      = User::join('members', 'users.id', '=', 'members.users_id')
                            ->where('period', $now) 
                            ->get();
            $allPeriode  = Members::pluck('period')->unique()->toArray();
            $allDivision = ['ALL','BPH', 'IRD', 'PRD', 'HRDD', 'CDD'];
            $data = [
                'userLogin'  => Auth::user(),
                'member'     => $member,
                'allPeriode' => $allPeriode,
                'allDivision'=> $allDivision
            ];
            return view('dashboard.dataUser', compact('data'));
            // return response()->json($data);
        }catch(Exception $ex){
            $data = ['err' => $ex->getMessage()];
            return view("errors.{$ex->getCode()}",compact('data'));
        }
    }
}

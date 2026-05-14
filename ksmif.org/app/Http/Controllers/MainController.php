<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Exception;
use App\Models\User;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    function homepage(){
        $data=['navbar' => 'homepage'];
        return view('welcome', compact('data'));
    }

    function ourTeam(){
        try{
        $now = (time() <= strtotime('01-09-2026')) ? '2025':'2026';
        $member      = User::join('members', 'users.id', '=', 'members.users_id')
                           ->where('period', $now) 
                           ->get();
        if($member->isEmpty())throw new Exception('',400);

        $allPeriode  = array_unique(Members::all('period')->toArray());
        $allDivision = ['ALL','BPH', 'IRD', 'PRD', 'HRDD', 'CDD'];

        $data=['navbar'   => 'ourTeam',
               'member'   => $member->isEmpty(),
               'period'   => $allPeriode,
               'division' => $allDivision];
        }catch(Exception $ex){
            $data=['err'=> $ex->getMessage()];
            return view("errors.{$ex->getCode()}");
        }
        // return response()->json($data);
        return view('ourTeam', compact('data'));
    }

    function bursaSoal(){
        // $bursaSoal = BursaSoal::where('BursaSoal.year', '=', '2025')
        //              ->get();

        // $data=['navbar' => 'ourTeam',
        //        'bursaSoal'   => $bursaSoal];
        return view('ourTeam', compact('data'));
    }
}

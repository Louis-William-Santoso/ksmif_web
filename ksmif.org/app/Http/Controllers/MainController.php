<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Members;
use Illuminate\Http\Request;
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

        $BPH=[];$IRD=[];$PRD=[];$HRDD=[];$CDD=[];
        foreach($member as $item){
            switch($item['division']){
                case "BPH":
                    $BPH[] = $item;
                    break;
                case "IRD":
                    $IRD[] = $item;
                    break;
                case "PRD":
                    $PRD[] = $item;
                    break;
                case "HRDD":
                    $HRDD[] = $item;
                    break;
                case "CDD":
                    $CDD[] = $item;
                    break;
            }
        }

        $allPeriode  = Members::pluck('period')->unique()->toArray();
        $allDivision = ['ALL','BPH', 'IRD', 'PRD', 'HRDD', 'CDD'];
        $totalMember = $member->count();

        $data=['navbar'     => 'ourTeam',
               'period'     => $allPeriode,
               'division'   => $allDivision,
               'totalMembers'=> $totalMember,
               'member'   => [
                'bph' => $BPH,
                'ird' => $IRD,
                'prd' => $PRD,
                'hrdd'=> $HRDD,
                'cdd' => $CDD
            ]];
        }catch(Exception $ex){
            $data=['err'=> $ex->getMessage()];
            return view("errors.{$ex->getCode()}");
        }
        // return response()->json($datda);
        return view('ourTeam', compact('data'));
    }

    function getMemberBy(Request $req){
        try{
        $period   = $req->query('period');
        $division = $req->query('division');
        
        if($division === 'ALL'){
            $member = User::join('members', 'users.id', '=', 'members.users_id')
                          ->where('period', $period) 
                          ->get();
            if($member->isEmpty())throw new Exception('',400);

            $BPH=[];$IRD=[];$PRD=[];$HRDD=[];$CDD=[];
            foreach($member as $item){
                switch($item['division']){
                    case "BPH":
                        $BPH[] = $item;
                        break;
                    case "IRD":
                        $IRD[] = $item;
                        break;
                    case "PRD":
                        $PRD[] = $item;
                        break;
                    case "HRDD":
                        $HRDD[] = $item;
                        break;
                    case "CDD":
                        $CDD[] = $item;
                        break;
                }
            }

            $member =[
                'bph' => $BPH,
                'ird' => $IRD,
                'prd' => $PRD,
                'hrdd'=> $HRDD,
                'cdd' => $CDD
            ];

        }else{
            $member = User::join('members', 'users.id', '=', 'members.users_id')
                           ->where('period', $period)
                           ->where('division', $division)
                           ->get();
            if($member->isEmpty())throw new Exception('',400);
            $member = [ strtolower($division) => $member];
        }
        

        $allPeriode  = Members::pluck('period')->unique()->toArray();
        $allDivision = ['ALL','BPH', 'IRD', 'PRD', 'HRDD', 'CDD'];
        $totalMember = Members::where('period', $period)->count();
        
        $data=['navbar'      => 'ourTeam',
               'period'      => $allPeriode,
               'division'    => $allDivision,
               'totalMembers'=> $totalMember,
               'member'      => $member,
               'selectedItem'=> [
                    'period'  => $period,
                    'division'=> $division
               ]
            ];
        }catch(Exception $ex){
            $data=['err'=> $ex->getMessage()];
            return view("/errors.{$ex->getCode()}");
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

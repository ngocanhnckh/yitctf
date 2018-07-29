<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProcessController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function process(Request $req){
        $userID = Auth::user()->id;
        $input = $req->answer;
        $userLevel = Auth::user()->level_at;
        $levelProperty = DB::table('question')->where('Level',$userLevel)->get()->toArray();
        $levelProperty = $levelProperty[0];

        $answer = $levelProperty->Answer;
        if($input === $answer){
            $levelList = DB::table('question')->orderBy('Level')->get()->toArray();
            $lsize = sizeof($levelList);
            $index = 0;
            
            
            while($index < $lsize && $levelList[$index]->Level !== $userLevel){
                error_log($levelList[$index]->Level);
                $index++;
            }
            
            // if something wrong happens
            if ($index >= $lsize){ 
                die("ERR");
                // reset
                DB::table('users')->where('id',$userID)->update(['level_at'=>1]);
            } else
            // if user completed the challenge
            if ($index === $lsize-1){
                // set level to 0 (completed mode)
                DB::table('users')->where('id',$userID)->update(['level_at'=>0]);
                return redirect('/home');
            } else
            // if user hasn't completed the challenge
            {
                $nextLevel = $levelList[$index+1]->Level;
                DB::table('users')->where('id',$userID)->update(['level_at'=>$nextLevel]);
            }

            return redirect('/home');
        } else{
            return redirect()->back()->with(['msg'=>'Wrong answer']);
        }
    }

    public function resetGame(Request $req){
        $userID = Auth::user()->id;
        DB::table('users')->where('id',$userID)->update(['level_at'=>1]);
        return redirect('/home');
    }
}
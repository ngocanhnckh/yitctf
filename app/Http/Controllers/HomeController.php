<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = array();
        $arr['level'] = Auth::user()->level_at;
        $levelProperty = DB::table('question')->where('Level',$arr['level'])->get()->toArray();

        // if something wrong happens
        if(sizeof($levelProperty) === 0){
            // reset
            DB::table('users')->where('id',Auth::user()->id)->update(['level_at'=>1]);

            $arr['level'] = Auth::user()->level_at;
            $levelProperty = DB::table('question')->where('Level',$arr['level'])->get()->toArray();
        }
        $levelProperty = $levelProperty[0];
        
        $arr['level_question'] = $levelProperty->Question;
        $arr['level_hint'] = $levelProperty->Hint;
        return view('home',$arr);
    }
}

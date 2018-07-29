<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditQuestion extends Controller
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

    public function index(Request $req)
    {
        return($req->id);
        return view('home');
    }
}

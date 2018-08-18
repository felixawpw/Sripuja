<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(array('username' => $request->username, 'password' => $request->password))){
            return "success";
        }
        else {        
            return "Wrong Credentials";
        }
    }
}

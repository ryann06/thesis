<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view ('pages.login');
    }
    public function register(){
        return view ('pages.register');
    }
    public function forgotpass(){
        return view ('pages.forgotpass');
    }
    public function changepass(){
        return view ('pages.changepass');
    }
    public function dashboard(){
        return view ('pages.dashboard');
    }
    public function updateinfo(){
        return view ('pages.updateinfo');
    }
}

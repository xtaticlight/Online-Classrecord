<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function showLogin() {

      return view('pages.login');
    }
    function postSignin() {
        $username = \Input::get('username');
        $password = \Input::get('password');
         if(is_null($username)||(empty($username))){
            return \Redirect::back()
                            ->with('message', 'Null talisman.<br> ')
                            ->withInput(); 
        }
         if(is_null($password)||(empty($password)))
        {
            return \Redirect::back()
                            ->with('message', 'Password is empty.<br> ')
                            ->withInput();
        }
        
         if ($username == "admin" && $password == "admin123") {

            return \Redirect::to('/instructordash')->with('message', 'You are now logged in.');
        } else {
            return \Redirect::back()
                            ->with('message', 'Your Username / Password combination was incorrect.<br> ')
                            ->withInput();
        }
    }
    function showAdmindash() {

      return view('pages.admin.dash');
    }
    function showTest() {

      return view('pages.test');
    }
    function showInstructordash() {

      return view('pages.instructordash');
    }
    function showAccess() {

      return view('pages.access');
    }
}

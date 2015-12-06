<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Requests;
use App\Http\Controllers\UsersController;
use App\User;

class PagesController extends UsersController
{   
    protected $layout = "Main";
    public function __construct()
	{
		$this->middleware('guest');
	}
        
    function showLogin() {

        return view('pages.subpages.login');
    }
   
    function showMain() {

      return view('main');
    }
    function showRecords() {

      return view('pages.records');
    }
}

<?php
namespace App\Http\Controllers;
use App\Http\Controllers\UsersController;

class PagesController extends UsersController
{   
    protected $layout = "Main";
    public function __construct()
	{
		$this->middleware('guest');
	}
     function getAccountInfo() {
      $username = \Auth::user()->username;
      $UserData = $this->getUserData($username);
      return view('pages.mainpages.home')->with('userData',$UserData);
    }
}

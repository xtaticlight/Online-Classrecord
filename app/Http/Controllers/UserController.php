<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
class UserController extends Controller {
 
public $restful = true;
 
/**
  * Display listing of the resource
  * 
  * @return Response
  */
 
public function login()
{

 
        // Set the user array to gather data from the login form
	$userdata = array(
		'username' => \Input::get('username'),
		'password' => \Input::get('password')
		);
 
	// Check to see if the user is already logged in
		if(Auth::check())
		{
			return Redirect::to('/');
		} //End Auth Check
 
	if(Auth::attempt($userdata))
	{
		// Grab user record 
		$user = User::find(Auth::user()->employee_id);
		// If the user account is disabled then send user back to login screen
		if($user->active=='0')
		{
			Auth::logout();
			Session::flush();
 
			return Redirect::to('login');
 
		} // End User active check
 
		Session::put('current_user', Input::get('username'));
		Session::put('usertype', $user->usertype);
		Session::put('employee_id', $user->employee_id);
                Session::put('name', $user->name);
		Session::put('gender', $user->gender);
                Session::put('email', $user->email);
		Session::put('contact', $user->contact);
                Session::put('username', $user->username);
		Session::put('password', $user->password);
                Session::put('department', $user->department);
		Session::put('college', $user->college);
 
                 // Set the user.last_login to todays date and save the record.
                 
                 $user->save();
 
		return Redirect::to('/');
 
	} // End Auth Attempt If
	else
	{
           $username = $userdata['username'];
        $userData = User::where('username', '=', $username)->first();
        
        $user_data = array(
            'employee_id' => $userData['employee_id'],
            'name' => $userData['name'],
            'gender' => $userData['gender'],
            'email' => $userData['email'],
            'contact' => $userData['contact'],
            'username' => $userData['username'],
            'password' => $userData['password'],
            'usertype' => $userData['usertype'],
            'department' => $userData['department'],
            'college' => $userData['college'],
        );
		return view('pages.home')->with('data', $user_data);
	} // End Else
 
} // End function Login
 function showAccess() {
     $username = \Auth::user();
      $userData = User::where('username', '=', $username['username'])->first();
        
        $user_data = array(
        'employee_id' => $userData['employee_id'],
        'name' => $userData['name'],
        'gender' => $userData['gender'],
        'email' => $userData['email'],
        'contact' => $userData['contact'],
        'username' => $userData['username'],
        'password' => $userData['password'],
        'usertype' => $userData['usertype'],
        'department' => $userData['department'],
        'college' => $userData['college'],
        );
        dd($user_data);
        return view('pages.access')->with('data', $userData);
      
    }
 
} // Ends UserController Class
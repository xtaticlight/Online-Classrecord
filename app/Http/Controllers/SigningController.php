<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class SigningController extends Controller {
    
    function getData($username) {
        $userData = User::where('username', '=', $username)->first();
        $employee_id = $userData['employee_id'];
        
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
        return $user_data;
    }

    function postSignin() {
        $username = \Input::get('username');
        $password = \Input::get('password');
        
        $userData = $this->getData($username);
        
        
        if (is_null($username) || (empty($username))) {
            return \Redirect::back()
                            ->with('message', 'Null talisman.<br> ')
                            ->withInput();
        }
        if (is_null($password) || (empty($password))) {
            return \Redirect::back()
                            ->with('message', 'Password is empty.<br> ')
                            ->withInput();
        }

        if ($password == $userData['password']) {

            return view('pages.home')->with('data', $userData);
        } else {
            return \Redirect::back()
                            ->with('message', 'Your Username / Password combination was incorrect.<br> ')
                            ->withInput();
        }
    }
    function showAccess() {
      $username = \Input::get('username');
      $userData = $this->getData($username);
      return view('pages.access')->with('data', $userData);
      
    }

}

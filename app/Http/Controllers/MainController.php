<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Requests;
use App\Http\Controllers\UsersController;
use App\User;
use Hash;
use Auth;
use View;

class MainController extends UsersController {

    protected $loginPath = '/login';

    public function __construct() {
        $this->middleware('guest');
    }
    
      public function showLogin() {
        $hashed = Hash::make('HighFive123!');

        if (Auth::check()) {
            return Redirect::to('/')->with('message', 'You are logged in!');
        } else {
            return View('pages.subpages.login')->with('hash', $hashed);
        }
    }      
    function postSignin() {
        $username = \Input::get('username');
        $password = \Input::get('password');

        $userData = $this->getUserData($username);       
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
           return View('pages.mainpages.home')->with('userData', $userData);
        } else {
            return \Redirect::back()
                            ->with('message', 'Your Username / Password combination was incorrect.<br> ')
                            ->withInput();
        }
        
        if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) {

            return Redirect::to('/signin')->with('message', 'You are now logged in.');
        } else {
            return Redirect::back()
                            ->with('message', 'Your Username / Password combination was incorrect.<br> ')
                            ->withInput();
        }
        
    }
    function showAccess() {
        $id = \Input::get('id');
        $username = \Input::get('username');
        $userData = $this->getUserData($username);
        $courseData = $this->getCourse($id);
        return view('pages.mainpages.browse_sy_semester')->with('userData', $userData)->with('courseData', $courseData);
    }

    function showSubjects() {
        $username = \Input::get('username');
        $id = \Input::get('id');
        $schoolYear = \Input::get('schoolYear');
        $semester = \Input::get('semester');
        $getSubject = $this->getSubject($schoolYear, $semester, $id);
     //  dd($getSubject);
        $userData = $this->getUserData($username);
        return view('pages.mainpages.browse_subjects')->with('userData', $userData)->with('subjectData', $getSubject);
    }

    function getRecords($subject_id,$username) {
        $userData = $this->getUserData($username);
        $studentData = $this->getStudentData($subject_id,$username);
        return view('pages.mainpages.browse_student_file')->with('userData', $userData)->with('studentData', $studentData);
    }

    function getSolve() {
        $username = \Input::get('username');
        $userData = $this->getUserData($username);
        return view('pages.records')->with('userData', $userData);
    }

}

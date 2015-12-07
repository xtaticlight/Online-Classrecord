<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends UsersController {

    public function __construct() {
        $this->middleware('guest');
    }
    
  public function getIndex() {
        if (Auth::check()) {
            return Redirect::to('/')->with('message', 'You are now logged in!');
        } else {
            return Redirect::to('/login')
                            ->with('message', 'Your username/password combination was incorrect')
                            ->withInput();
        }
    }
    
 public function showLogin() {
        $hashed = \Hash::make('HighFive123!');
        if (\Auth::check()) {
            return Redirect::to('/')->with('message', 'You are logged in!');
        } else {
            return \View::make('pages.subpages.login')->with('hash', $hashed);
        }
    }

    public function postSignin() {
        $username = \Input::get('username');
        if(is_null($username)||(empty($username)))
        {
            return \Redirect::back()
                            ->with('message', 'Username is empty.')
                            ->withInput();
        }
        $userData = $this->getUserData($username);
        if(empty($userData['username'])||  is_null($userData['username']))
        {
            return \Redirect::to('/login')
                            ->with('message', 'Your Username doesn\'t exist. ')
                            ->withInput();
        }
        if (empty($userData['password']) || is_null($userData['password'])) {
            $userData['password'] = \Hash::make($userData['password']);
           $userData->update();
        }
        if (\Auth::attempt(array('username' => \Input::get('username'), 'password' => \Input::get('password')))) {

            return \Redirect::to('/home')->with('message', 'You are now logged in.');
        } else {
           // dd($userData);
            return \Redirect::back()
                            ->with('message', 'Your Username / Password combination was incorrect.')
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

    function getRecords($subject_id, $username) {
        $userData = $this->getUserData($username);
        $studentData = $this->getStudentData($subject_id, $username);
        return view('pages.mainpages.browse_student_file')->with('userData', $userData)->with('studentData', $studentData);
    }

    function getSolve() {
        $username = \Input::get('username');
        $userData = $this->getUserData($username);
        return view('pages.records')->with('userData', $userData);
    }

    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedLoginMessage() {
        return 'These credentials do not match our records.';
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout() {
        \Auth::logout();
        return redirect('/');
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath() {
        if (property_exists($this, 'redirectPath')) {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }

    /**
     * Get the path to the login route.
     *
     * @return string
     */
    public function loginPath() {
        return property_exists($this, 'loginPath') ? $this->loginPath : '/login';
    }

}

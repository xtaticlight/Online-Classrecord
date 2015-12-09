<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;

class MainController extends UsersController {

    public function getIndex() {
        if (\Auth::check()) {
            //  $userData[] =  \Auth::user();
            //    dd($userData);
            return view('pages.mainpages.home');
        } else {
            return view('pages.subpages.login');
        }
    }

    public function getHome() {
        if (\Auth::check()) {
            return View('pages.mainpages.home');
        } else {
            return \Redirect::to('/')->withErrors('Please login first to access home.');
        }
    }

    public function getAccess() {
        if (\Auth::check()) {
            //\Session::forget('schoolYear');
            return View('pages.mainpages.browse_sy_semester');
        } else {
            return \Redirect::to('/')->withErrors('You need to login first to access.');
        }
    }

    public function postAccess() {
        if (\Auth::check()) {
            return View('pages.mainpages.browse_sy_semester');
        } else {
            return \Redirect::to('/');
        }
    }

    public function getRecords() {
        if (\Auth::check()) {
            return View('pages.mainpages.browse_student_file');
        } else {
            return \Redirect::to('/')->withErrors('Login first to access the records.');
        }
    }

    public function getLogin() {
        if (\Auth::check()) {
            return \Redirect::to('home');
        } else {
            return view('pages.subpages.login');
        }
    }

    public function postLogin(Request $request) {
        $this->validate($request, [
            'username' => 'required', 'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (\Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->loginPath())
                        ->withInput($request->only('username', 'remember'))
                        ->withErrors([
                            'username' => $this->getFailedLoginMessage(),
        ]);
    }

    function postSubjects() {
        if (\Auth::check()) {
            $id = \Auth::user()->id;
            $schoolYear = \Input::get('schoolYear');
            \Session::put('schoolYear', $schoolYear);
            $semester = \Input::get('semester');
            \Session::put('semester', $semester);
            $getSubject = $this->generateSubject($schoolYear, $semester, $id);
            $userData = \Auth::user();
            return view('pages.mainpages.browse_subjects')->with('userData', $userData)->with('subjectData', $getSubject);
        } else {
            return view('pages.subpages.login');
        }
    }

    function getSubjects() {
        if (\Auth::check()) {
            $id = \Auth::user()->id;
            $schoolYear = \Session::get('schoolYear');
            $semester = \Session::get('semester');
            $getSubject = $this->generateSubject($schoolYear, $semester, $id);
            $userData = \Auth::user();
            return view('pages.mainpages.browse_subjects')->with('userData', $userData)->with('subjectData', $getSubject);
        } else {
            return \Redirect::to('/')->withErrors('Login first to view the subjects.');
        }
    }

    function getClass($subject_id) {
        if (\Auth::check()) {
            $username = \Auth::user()->username;
            $term = 'MIDTERM';
            \Session::put('subject_id',$subject_id);
            $studentData = $this->getStudentData($subject_id);
            $activitiesData = $this->getActivitiesData($subject_id, $term);
            
            return view('pages.mainpages.browse_student_file')->with('studentData', $studentData)->with('activitiesData', $activitiesData);
        } else {
            return \Redirect::to('/')->withErrors('Login first to view the subjects.');
        }
    }
    
    function postClass() {
        if (\Auth::check()) {
            $term = \Input::get('term');
            $subject_id = \Session::get('subject_id');
            $studentData = $this->getStudentData($subject_id);
            $activitiesData = $this->getActivitiesData($subject_id, $term);
            
            return view('pages.mainpages.browse_student_file')->with('studentData', $studentData)->with('term',$term)->with('subject_id',$subject_id)->with('activitiesData', $activitiesData);
        } else {
            return \Redirect::to('/')->withErrors('Login first to view the subjects.');
        }
    }

    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedLoginMessage() {
        return 'Incorrect username or password.';
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

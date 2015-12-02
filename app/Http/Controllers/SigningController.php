<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class SigningController extends Controller {

    protected $loginPath = '/login';

    public function __construct() {
        $this->middleware('guest');
    }

    function getData($username) {

        $query = DB::table('users')->where('username', '=', $username)->first();
        $resultArray = json_decode(json_encode($query), true);
        // dd($resultArray);
        //$userData = User::where('username', '=', $username)->first();
        return $resultArray;
    }

    function getCourse($users_id) {
        $query = DB::table('courses')->where('users_id', '=', $users_id)->get();
        $resultArray = json_decode(json_encode($query), true);
      //  dd($resultArray);
        return $resultArray;
    }
    function getSubject($schoolYear,$semester,$id) {
        $query = DB::table('courses')->where('users_id', '=', $id) AND where('schoolYear','=',$schoolYear);
       // $resultArray = json_decode(json_encode($query), true);
      dd($query);
        return $resultArray;
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
        $id = \Input::get('id');
        $username = \Input::get('username');
        $userData = $this->getData($username);
        $courseData = $this->getCourse($id);
        return view('pages.access')->with('userData', $userData)->with('courseData', $courseData);
    }

    function showSubjects() {
        $username = \Input::get('username');
        $id = \Input::get('id');
        $schoolYear = \Input::get('schoolYear');
        $semester = \Input::get('semester');
        $getSubject = $this->getSubject($schoolYear,$semester,$id);
        $userData = $this->getData($username);
        $subjectData = $this->getCourse($id);
        return view('pages.subjects')->with('userData', $userData)->with('subjectData', $subjectData);
    }

    function showRecords() {

        $username = \Input::get('username');
        $userData = $this->getData($username);
        $quiz11 = null;
        $tquiz11 = null;
        $quiz12 = null;
        $tquiz12 = null;
        $prelimexam = null;
        $tprelimexam = null;
        $midtermexam = null;
        $tmidtermexam = null;
        $midtermgrade = null;
        $records = array(
            'quiz11' => $quiz11,
            'tquiz11' => $tquiz11,
            'quiz12' => $quiz12,
            'tquiz12' => $tquiz12,
            'prelimexam' => $prelimexam,
            'tprelimexam' => $tprelimexam,
            'midtermexam' => $midtermexam,
            'tmidtermexam' => $tmidtermexam,
            'midtermgrade' => $midtermgrade,
        );
        return view('pages.records')->with('records', $records)->with('data', $userData);
    }

    function getSolve() {
        $username = \Input::get('username');
        $userData = $this->getData($username);

        $quiz11 = \Input::get('Quiz11');
        $tquiz11 = \Input::get('TQuiz11');
        $quiz12 = \Input::get('Quiz12');
        $tquiz12 = \Input::get('TQuiz12');
        $prelimexam = \Input::get('PrelimExam');
        $tprelimexam = \Input::get('TPrelimExam');
        $midtermexam = \Input::get('MidtermExam');
        $tmidtermexam = \Input::get('TMidtermExam');
        $midtermgrade = (((5 - (4 * ($quiz11)) / $tquiz11) + (5 - (4 * ($quiz12)) / $tquiz12) + (5 - (4 * ($prelimexam)) / $tprelimexam)) / 3 * 0.4) + ((5 - (4 * ($midtermexam)) / $tmidtermexam) * 0.6);
        $records = array(
            'quiz11' => $quiz11,
            'tquiz11' => $tquiz11,
            'quiz12' => $quiz12,
            'tquiz12' => $tquiz12,
            'prelimexam' => $prelimexam,
            'tprelimexam' => $tprelimexam,
            'midtermexam' => $midtermexam,
            'tmidtermexam' => $tmidtermexam,
            'midtermgrade' => round($midtermgrade, 2),
        );
        return view('pages.records')->with('records', $records)->with('data', $userData);
    }

}

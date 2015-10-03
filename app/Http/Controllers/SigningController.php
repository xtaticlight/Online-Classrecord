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
      return view('pages.test')->with('records', $records)->with('data', $userData);
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
      $midtermgrade = (((5 - (4 * ($quiz11)) / $tquiz11) + (5 - (4 * ($quiz12)) / $tquiz12) + (5 - (4 * ($prelimexam)) / $tprelimexam)) * 0.4) + ((5 - (4 * ($midtermexam)) / $tmidtermexam) * 0.6);
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
      return view('pages.test')->with('records', $records)->with('data', $userData);
    }
}

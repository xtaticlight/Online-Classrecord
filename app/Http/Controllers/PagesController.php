<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function showWelcome(){
      return view('welcome');

    }
    function showError() {

      return view('errors.503');
    }
}

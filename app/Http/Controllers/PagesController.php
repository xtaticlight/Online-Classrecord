<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function showLogin() {

        return view('pages.login');
    }
    function showAdmindash() {

      return view('pages.admin.dash');
    }
    function showTest() {

      return view('pages.test');
    }
    function showHome() {

      return view('pages.home');
    }
}

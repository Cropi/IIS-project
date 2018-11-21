<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class ErrorController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index404() {
        return view('notFoundHttpException');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function loggedin()
    {
        return view('notes.dashboard');
    }
}

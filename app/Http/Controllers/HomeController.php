<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // kein direkt Zugriff auf /home möglich
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('home');
    }
}

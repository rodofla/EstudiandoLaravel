<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}

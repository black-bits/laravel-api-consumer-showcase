<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return response()->view('home');
    }
}

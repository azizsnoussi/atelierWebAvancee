<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function welcome()
    {
        return response('bonjour 5twin4');
    }

    public function show()
    {   $msg='hello 5twin4';
        return view('show',["message"=>$msg]);
    }
}

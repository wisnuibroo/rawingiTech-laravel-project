<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class MySqlController extends Controller
{
    public function index()
    {

        return view('mysql', ['title' => 'MySql']);
        return view('mysql');
    }

}

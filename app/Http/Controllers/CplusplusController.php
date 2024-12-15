<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class CplusplusController extends Controller
{
    public function index()
    {

        return view('c++', ['title' => 'C++']);
        return view('c++');
    }

}

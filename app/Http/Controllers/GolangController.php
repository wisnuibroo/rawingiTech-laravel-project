<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class GolangController extends Controller
{
    public function index()
    {

        return view('golang', ['title' => 'Golang']);
        return view('golang');
    }

}

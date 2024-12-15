<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PythonController extends Controller
{
    public function index()
    {

        return view('python', ['title' => 'Python']);
        return view('python');
    }

}

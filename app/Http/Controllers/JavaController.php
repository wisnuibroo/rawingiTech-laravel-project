<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class JavaController extends Controller
{
    public function index()
    {

        return view('java', ['title' => 'Java']);
        return view('java');
    }

}

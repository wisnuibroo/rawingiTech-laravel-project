<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class RubyController extends Controller
{
    public function index()
    {

        return view('ruby', ['title' => 'Ruby']);
        return view('ruby');
    }

}

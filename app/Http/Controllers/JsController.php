<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class JsController extends Controller
{
    public function index()
    {

        return view('js', ['title' => 'Js']);
        return view('js');
    }

}

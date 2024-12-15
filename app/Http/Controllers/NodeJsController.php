<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class NodeJsController extends Controller
{
    public function index()
    {

        return view('nodejs', ['title' => 'Node Js']);
        return view('nodejs');
    }

}

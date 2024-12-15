<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class HtmlController extends Controller
{
    public function index()
    {

        return view('html', ['title' => 'Html']);
        return view('html');
    }

}

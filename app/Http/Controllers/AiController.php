<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AiController extends Controller
{
    public function index()
    {

        return view('ai', ['title' => 'AI']);
        return view('ai');
    }

}

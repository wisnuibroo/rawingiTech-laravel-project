<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class CsharpController extends Controller
{
    public function index()
    {

        return view('csharp', ['title' => 'Csharp']);
        return view('csharp');
    }

}

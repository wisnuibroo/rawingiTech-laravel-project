<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class UiUxController extends Controller
{
    public function index()
    {

        return view('uiux', ['title' => 'UI UX']);
        return view('uiux');
    }

}

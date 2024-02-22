<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QAController extends Controller
{
    public function create()
    {
        return view('qa.create');
    }
}

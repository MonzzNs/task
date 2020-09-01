<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sidebar2Controller extends Controller
{
    public function index()
    {
        return view('content.sidebar2.index');
    }
}

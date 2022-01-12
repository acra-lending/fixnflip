<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatesheetsController extends Controller
{
    public function index()
    {
        return view('ratesheets');
    }
}

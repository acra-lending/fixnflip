<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewFileUploadController extends Controller
{
    public function index()
    {
        return view('newfileupload');
    }
}

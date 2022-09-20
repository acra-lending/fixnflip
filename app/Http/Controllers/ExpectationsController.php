<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\TurnTimes;

class ExpectationsController extends Controller
{
    public function index()
    {
        // $response = Http::get('http://127.0.0.1:8000/api/idl/turntimes');
        // dd($response->json());

        // $turnTimes = TurnTimes::with('section.subSection')->find(2);
        // dd($turnTimes);

        return view ('expect');

        // return view('expect')->with([
        //     'turnTimes' => $turnTimes,
        // ]);
    }
}

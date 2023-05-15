<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FrmSubmit;
use Mail;

class FrmController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'name'          => 'required|max:100',
            'company'       => 'required|max:100',
            'email'         => 'required|email',
            'phone'         => 'required|regex:/^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
        ]);


        if ($request->filled('subject',)) {
            return;
        }

        $data = $request->all();

        $mail = new FrmSubmit($data);

        Mail::to([
            'matthew.kirby@acralending.com'
        ])
        ->bcc(['anthony.lopez@acralending.com'])
        ->send($mail);

        // return redirect()->back()->with('success', 'Form submitted successfully!');
        return response()->json(['success' => 'Sent Successfully. We will reach out to you shortly.']);
    }
}

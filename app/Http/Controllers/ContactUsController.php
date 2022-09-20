<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSubmit;
use Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'name'          => 'required|max:100',
            'email'         => 'required|email',
            'message'       => 'required',
        ]);

        if ($request->filled('subject')) {
            return;
        }

        $data = $request->all();

        $mail = new ContactSubmit($data);

        Mail::to([
            'robert.jennings@acralending.com'
            ])
            ->bcc(['webupdates@acralending.com'])
            ->send($mail);

        // return redirect('/contact')
        //     ->with('success', 'Thank you for your message. We will reply back shortly.');
        return response()->json(['success' => 'Sent Successfully. We will reach out to you shortly.']);
    }
    
}

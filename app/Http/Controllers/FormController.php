<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormSubmit;
use Mail;

class FormController extends Controller
{
    public function index()
    {
        return view('apply');
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'entityName'            => 'nullable|max:100',
            'sponsorFirstName'      => 'nullable|max:100',
            'sponsorLastName'       => 'nullable|max:100',
            'sponsorMiddleInitial'  => 'nullable|max:1',
            'email'                 => 'required|email',
            'phone'                 => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'coSponsorFirstName'    => 'nullable|max:100',
            'coSponsorLastName'     => 'nullable|max:100',
            'coSponsorMiddleInitial'=> 'nullable|max:100',
            'email2'                => 'nullable|email',
            'phone2'                => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'brokerName'            => 'nullable|max:100',
            'brokerEmail'           => 'nullable|max:100',
            'brokerPhone'           => 'nullable|max:100',
            'address'               => 'required',
            'address2'              => 'nullable',
            'city'                  => 'required',
            'state'                 => 'required',
            'zipcode'               => 'required',
            'units'                 => 'nullable|max:2',
            'loanPrograms'          => 'required',
            'purchasePrice'         => 'required',
            'originalPurchaseDate'  => 'nullable',
            'firstLien'             => 'nullable',
            'secondLien'            => 'nullable',
            'taxesOwed'             => 'nullable',
            'marketRent'            => 'nullable',
            'annualTaxes'           => 'nullable',
            'annualInsurance'       => 'nullable',
            'liquidity'             => 'nullable',
            'marketValue'           => 'nullable',
            'amountRequested'       => 'nullable',
            'afterRepairValue'      => 'nullable',
            'marketComparables'     => 'nullable',
            'exitStrategy'          => 'nullable',
            'creditScore'           => 'nullable',
            'propertiesSold'        => 'nullable',
            'propertiesOwned'       => 'nullable',
            'scopeOfWork'           => 'nullable',
            'addSqFt'               => 'nullable',
            'sqFt'                  => 'nullable',
            'attachment'            => 'array',
            'attachment.*'          => 'nullable|mimes:pdf,jpeg,jpg,bmp,png,gif|max:99999999',
        ]);

        $data = $request->all();
        // dd($data);

        $mail = new FormSubmit($data);
        // dd($mail);
        $files = $request->file('attachment');

        if($request->hasFile('attachment')){

            foreach ($files as $file){
                $mail->attach($file->getRealPath(), [
                    'as'    => $file->getClientOriginalName(),
                    'mime'  => $file->getClientMimeType()
                ]);          
            }
        } else {

        }

        // $emails = [
        //     'chris.liu@acralending.com',
        //     'chrisliu0416@gmail.com',
        //     // 'robert.jennings@acralending.com',
        // ];

        // if($request->filled('email3')){
        //     array_push($emails, $request->email3);
        // }
        // if($request->filled('email4')) {
        //     array_push($emails, $request->email4);
        // }
        Mail::to([
            'robert.jennings@acralending.com',  
            'john.licea@acralending.com',
            'phi.le@acralending.com',
            'arden.hillstrom@acralending.com',
            'webupdates@acralending.com',
        ])
        ->send($mail);

        return response()->json(['success' => 'Sent Successfully. You may navigate away from this page.']);

        // return redirect('/')
        //     ->with('success', 'Form Sent Successfully');
    }
}

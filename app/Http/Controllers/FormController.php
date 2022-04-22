<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormSubmit;
use Mail;
use DB;

class FormController extends Controller
{
    public function index()
    {
        return view('apply');
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'ref'                   => 'nullable',
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
            'hoa'                   => 'nullable',
            'other'                 => 'nullable',
            'liquidity'             => 'nullable',
            'marketValue'           => 'nullable',
            'amountRequested'       => 'nullable',
            'afterRepairValue'      => 'nullable',
            'ltvRequested'          => 'nullable',
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

        $emailArray = array(
            'webupdates@acralending.com',
            'robert.jennings@acralending.com',
            'keith.lind@acralending.com',
        );    

        if ($request->filled('ref')) {
            $user = DB::connection('mysql2')->table('s2zar_users')->where('email', $request->input('ref'))->first();
            // dd($user);
            if ($user != null) {
                $userEmail = $user[0]->email;
                array_push($emailArray, $userEmail);
                $data = [
                    $request->all(),
                    'referredBy' => $user[0]->name
                ];
            } else {
                $userEmail = null;
                $data = [
                    $request->all(),
                    'referredBy' => null
                ];
            }
        }

        $mail = new FormSubmit($data);

        $files = $request->file('attachment');
        if($request->hasFile('attachment')){

            foreach ($files as $file){
                $mail->attach($file->getRealPath(), [
                    'as'    => $file->getClientOriginalName(),
                    'mime'  => $file->getClientMimeType()
                ]);          
            }
        };

        Mail::to($emailArray)
        ->send($mail);

        // return response()->json(['success' => 'Sent Successfully. We will reach out to you shortly.']);
        return redirect('/');
        
    }
}

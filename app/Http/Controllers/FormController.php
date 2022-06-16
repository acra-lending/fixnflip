<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormSubmit;
use App\Mail\FormSubmitMF;
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
            'phone'                 => 'required|regex:/^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
            'coSponsorFirstName'    => 'nullable|max:100',
            'coSponsorLastName'     => 'nullable|max:100',
            'coSponsorMiddleInitial'=> 'nullable|max:100',
            'email2'                => 'nullable|email',
            'phone2'                => 'nullable|regex:/^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
            'brokerName'            => 'nullable|max:100',
            'brokerEmail'           => 'nullable|max:100',
            'brokerPhone'           => 'nullable|max:100',
            'brokerPoints'          => 'nullable|max:100',
            'brokerProcessingFees'  => 'nullable|max:100',
            'address'               => 'required',
            'address2'              => 'nullable',
            'city'                  => 'required',
            'state'                 => 'required',
            'zipcode'               => 'required',
            'units'                 => 'nullable|max:50',
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
            'addSqFt'               => 'required',
            'sqFt'                  => 'nullable',
            'attachment'            => 'array',
            'attachment.*'          => 'nullable|mimes:pdf,jpeg,jpg,bmp,png,gif|max:99999999',
        ]);

        $emailArray = array(
            'webupdates@acralending.com',
            'robert.jennings@acralending.com',
            'terrence.taylor@acralending.com',
            'keith.lind@acralending.com',
        );    

        if ($request->filled('ref')) {
            $user = DB::connection('mysql2')->table('s2zar_users')->where('email', $request->input('ref'))->first();
            // dd($user->email);
            if ($user != null) {
                $userEmail = $user->email;
                array_push($emailArray, $userEmail);
                $data = [
                    $request->all(),
                    'referredBy' => $user->name
                ];
            } else {
                $userEmail = null;
                $data = [
                    $request->all(),
                    'referredBy' => null
                ];
            }
        } else {
            $data = [
                $request->all(),
                'referredBy' => null
            ];
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
        return redirect('/apply')
            ->with('success', 'Form Sent');
        
    }

    public function submit2(Request $request)
    {
        $dataValidate = request()->validate([
            'ref'                   => 'nullable',
            'name'                  => 'required',
            'email'                 => 'required|email',
            'phone'                 => 'required|regex:/^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
            'entityName'            => 'nullable|max:100',
            'mailingAddress'        => 'nullable',
            'own'                   => 'nullable',
            'liquidity'             => 'nullable',
            'netWorth'              => 'nullable',

            'listName1'             => 'nullable',
            'ownership1'            => 'nullable',
            'personalResidence1'    => 'nullable',
            'own1'                  => 'nullable',
            'liquidity1'            => 'nullable',
            'netWorth1'             => 'nullable',
            'creditScore1'          => 'nullable',

            'listName2'             => 'nullable',
            'ownership2'            => 'nullable',
            'personalResidence2'    => 'nullable',
            'own2'                  => 'nullable',
            'liquidity2'            => 'nullable',
            'netWorth2'             => 'nullable',
            'creditScore2'          => 'nullable',

            'listName3'             => 'nullable',
            'ownership3'            => 'nullable',
            'personalResidence3'    => 'nullable',
            'own3'                  => 'nullable',
            'liquidity3'            => 'nullable',
            'netWorth3'             => 'nullable',
            'creditScore3'          => 'nullable',
            'propertiesOwned'       => 'nullable',

            'address'               => 'required',
            'address2'              => 'nullable',
            'city'                  => 'required',
            'state'                 => 'required',
            'zipcode'               => 'required',
            'totalUnits'            => 'nullable|max:50',
            'vacantUnits'           => 'nullable|max:50',
            'occupancyPercentage'   => 'nullable',
            'ownerOccupied'         => 'nullable',

            'requestedLoanAmount'   => 'nullable',
            'ltv'                   => 'nullable',
            'cltv'                  => 'nullable',
            'estimatedValue'        => 'nullable',
            'purchasePrice'         => 'nullable',
            'creditScore'           => 'nullable',
            'purpose'               => 'nullable',
            'estimatedProceeds'     => 'nullable',
            'annualIncome'          => 'nullable',
            'currentMonths1'        => 'nullable',
            'rentalIncome'          => 'nullable',
            'otherIncome'           => 'nullable',
            'totalIncome'           => 'nullable',

            'annualExpenses'        => 'nullable',
            'currentMonths2'        => 'nullable',
            'realEstateTaxes'       => 'nullable',
            'insurance'             => 'nullable',
            'otherExpenses'         => 'nullable',
        ]);

        // dd($request);

        $emailArray = array(
            'webupdates@acralending.com',
            'robert.jennings@acralending.com',
            // 'terrence.taylor@acralending.com',
            // 'keith.lind@acralending.com',
        );    

        if ($request->filled('ref')) {
            $user = DB::connection('mysql2')->table('s2zar_users')->where('email', $request->input('ref'))->first();
            // dd($user->email);
            if ($user != null) {
                $userEmail = $user->email;
                array_push($emailArray, $userEmail);
                $data = [
                    $request->all(),
                    'referredBy' => $user->name
                ];
            } else {
                $userEmail = null;
                $data = [
                    $request->all(),
                    'referredBy' => null
                ];
            }
        } else {
            $data = [
                $request->all(),
                'referredBy' => null
            ];
        }

        $mail = new FormSubmitMF($data);

        // $files = $request->file('attachment');
        // if($request->hasFile('attachment')){

        //     foreach ($files as $file){
        //         $mail->attach($file->getRealPath(), [
        //             'as'    => $file->getClientOriginalName(),
        //             'mime'  => $file->getClientMimeType()
        //         ]);          
        //     }
        // };

        Mail::to($emailArray)
        ->send($mail);

        // return response()->json(['success' => 'Sent Successfully. We will reach out to you shortly.']);
        return redirect('/apply')
            ->with('success', 'Form Sent');
        
    }
}

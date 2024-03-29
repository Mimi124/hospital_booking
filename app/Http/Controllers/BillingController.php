<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\User;
use App\Http\Requests\StoreBillingRequest;
use App\Http\Requests\UpdateBillingRequest;


class BillingController extends Controller
{
    public function index()
    {
        $billing=Billing::all();
        return view('accountant.showBillings',compact('billing'));
        //
    }



    public function showPayment()
    {
        $billing=Billing::all();
        return view('user.dashboard.showPayment',compact('billing'));
        //
    }

    public function showInvoice()
    {
        $billing=Billing::all();
        return view('admin.showInvoice',compact('billing'));
        //
    }

  
    public function create()
    {

        return view('accountant.add-billings')->with('patient',User::patient()->get());

        return view('accountant.add-billings')
        ->with('patient',User::patient()->get());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBillingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillingRequest $request)
    {
        //
        Billing::create([
            'patient_id'=>$request->patient,
            'bill_date'=>$request->bill_date,
            'amount'=>$request->amount
            ]);
            // flash message
            session()->flash('success', 'New Bill Item Added Successfully.');
            // redirect user
            return redirect()->route('showbilling');
    }

    public function show(Billing $billing)
    {
        //
    }

 
    public function edit(Billing $billing)
    {
        //
    }

    public function update(UpdateBillingRequest $request, Billing $billing)
    {
        //
    }

    public function destroy(Billing $billing)
    {
        //
    }
}

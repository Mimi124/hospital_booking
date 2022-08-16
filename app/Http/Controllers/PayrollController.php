<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Http\Requests\StorePayrollRequest;
use App\Http\Requests\UpdatePayrollRequest;

class PayrollController extends Controller
{
    public function showPayroll(){

        $payrolls = Payroll::all();
    
        return view('doctor.showPayroll', compact('payrolls'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Medicine_Category;
use Illuminate\Http\Request;

class MedicineAdminController extends Controller
{
    public function index()
    {
        $medicine= Medicine::all();
        return view('admin.showMedicines',compact('medicine'));
    }

    public function create()
    {
        $medicineCategory=Medicine_Category::all();
        return view('pharmacist.add-medicine',compact('medicineCategory'));
    }

    public function store(Request $request)
    {

        Medicine::create([
            'name' => $request->name,
            'instruction' => $request->instruction,
            'category_id' => $request->category,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'company' => $request->company,
            'expire_date' => $request->expire_date,
        ]);

        // flash message
        session()->flash('success', 'New Medicine Added Successfully.');
        // redirect user
        return redirect()->route('showmedicines');
    }

    // public function show(Medicine $medicine)
    // {
    //     return view('medicines.show')->with('medicine', $medicine);
    // }

    public function update($id)
    {
        $medicine=Medicine::find($id);
        return view('pharmacist.update-medicine',compact('medicine'))
            ->with('medicineCategory', Medicine_Category::all());
    }

    public function edit(Request $request, $id)
    {
        $medicine=Medicine::find($id);
        $medicine->name = $request->name;
        $medicine->instruction = $request->instruction;
        $medicine->category_id = $request->category;
        $medicine->purchase_price = $request->purchase_price;
        $medicine->sale_price = $request->sale_price;
        $medicine->quantity = $request->quantity;
        $medicine->company = $request->company;
        $medicine->expire_date = $request->expire_date;

        $medicine->save();


        // flash message
        session()->flash('success', 'Medicine Updated Successfully.');
        // redirect user
        return redirect()->route('showmedicine');
    }

    public function destroy($id)
    {
        $medicine=Medicine::find($id);
        // $medicine->prescriptions()->detach();
        $medicine->delete();
        // flash message
        session()->flash('success', ' Medicine Deleted Successfully.');
        // redirect user
        return redirect()->route('showmedicine');
    }
    //
}

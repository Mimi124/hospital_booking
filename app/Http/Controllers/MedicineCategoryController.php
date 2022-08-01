<?php

namespace App\Http\Controllers;

use App\Models\Medicine_Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMedicine_CategoryRequest;
use App\Http\Requests\UpdateMedicine_CategoryRequest;

class MedicineCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicineCategory = Medicine_Category::all();
        return view('pharmacist.showMedicineCategories',compact('medicineCategory'));
    }

    public function create()
    {
        return view('pharmacist.add-medicinecategory');
    }

    public function store(Request $request)
    {

        Medicine_Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // flash message
        session()->flash('success', 'New Medicine Category Added Successfully.');
        // redirect user
        return redirect(route('showmedcategory'));
    }

    public function show(Medicine_Category $medicineCategory)
    {
        return view('pharmacist.showMedicineCategories')->with('category', $medicineCategory);
    }

    public function update($id)
    {
        $medicineCategory=Medicine_Category::find($id);
        return view('pharmacist.update-medicinecategory',compact('medicineCategory'));
    }

    public function edit(Request $request, $id)
    {
        $medicineCategory=Medicine_Category::find($id);
        $medicineCategory->name= $request->name;
        $medicineCategory->description = $request->description;

        $medicineCategory->save();
        

        // flash message
        session()->flash('success', 'Medicine Category Updated Successfully.');
        // redirect user
        return redirect()->route('showmedcategory');
    }

    public function destroy($id)
    {
        $medicineCategory=Medicine_Category::find($id);
        $medicineCategory->delete();
        // flash message
        session()->flash('success', ' Medicine Category Deleted Successfully.');
        // redirect user
        return redirect()->route('showmedcategory');
    }
}

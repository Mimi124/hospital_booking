<?php

namespace App\Http\Controllers;

use App\Models\Medicine_Category;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicine_CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicine_CategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine_Category  $medicine_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine_Category $medicine_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine_Category  $medicine_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine_Category $medicine_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicine_CategoryRequest  $request
     * @param  \App\Models\Medicine_Category  $medicine_Category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicine_CategoryRequest $request, Medicine_Category $medicine_Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine_Category  $medicine_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine_Category $medicine_Category)
    {
        //
    }
}

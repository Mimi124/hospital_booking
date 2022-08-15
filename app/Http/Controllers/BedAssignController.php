<?php

namespace App\Http\Controllers;

use App\Models\BedAssign;
use App\Http\Requests\StoreBedAssignRequest;
use App\Http\Requests\UpdateBedAssignRequest;

class BedAssignController extends Controller
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
     * @param  \App\Http\Requests\StoreBedAssignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBedAssignRequest $request)
    {
        //
    }

    public function showBedAssign(){

        $bed_assigns = BedAssign::all();
    
        return view('doctor.showBedAssign', compact('bed_assigns'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BedAssign  $bedAssign
     * @return \Illuminate\Http\Response
     */
    public function edit(BedAssign $bedAssign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBedAssignRequest  $request
     * @param  \App\Models\BedAssign  $bedAssign
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBedAssignRequest $request, BedAssign $bedAssign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BedAssign  $bedAssign
     * @return \Illuminate\Http\Response
     */
    public function destroy(BedAssign $bedAssign)
    {
        //
    }
}

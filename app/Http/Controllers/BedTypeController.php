<?php

namespace App\Http\Controllers;

use App\Models\Bed_Type;
use App\Http\Requests\StoreBed_TypeRequest;
use App\Http\Requests\UpdateBed_TypeRequest;

class BedTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreBed_TypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBed_TypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bed_Type  $bed_Type
     * @return \Illuminate\Http\Response
     */
    public function show(Bed_Type $bed_Type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bed_Type  $bed_Type
     * @return \Illuminate\Http\Response
     */
    public function edit(Bed_Type $bed_Type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBed_TypeRequest  $request
     * @param  \App\Models\Bed_Type  $bed_Type
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBed_TypeRequest $request, Bed_Type $bed_Type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bed_Type  $bed_Type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bed_Type $bed_Type)
    {
        //
    }
}

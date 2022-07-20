<?php

namespace App\Http\Controllers;

use App\Models\Bill_Item;
use App\Http\Requests\StoreBill_ItemRequest;
use App\Http\Requests\UpdateBill_ItemRequest;

class BillItemController extends Controller
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
     * @param  \App\Http\Requests\StoreBill_ItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBill_ItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill_Item  $bill_Item
     * @return \Illuminate\Http\Response
     */
    public function show(Bill_Item $bill_Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill_Item  $bill_Item
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill_Item $bill_Item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBill_ItemRequest  $request
     * @param  \App\Models\Bill_Item  $bill_Item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBill_ItemRequest $request, Bill_Item $bill_Item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill_Item  $bill_Item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill_Item $bill_Item)
    {
        //
    }
}

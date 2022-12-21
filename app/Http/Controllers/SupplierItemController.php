<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierItemRequest;
use App\Http\Requests\UpdateSupplierItemRequest;
use App\Models\SupplierItem;

use App\Models\Supplier;

class SupplierItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('SupplierItem.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['Suppliers'] = Supplier::get();

        return view('SupplierItem.create', compact('Suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierItem  $supplierItem
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierItem $supplierItem)
    {
        //
        return view('SupplierItem.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierItem  $supplierItem
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierItem $supplierItem)
    {
        //
        return view('SupplierItem.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierItemRequest  $request
     * @param  \App\Models\SupplierItem  $supplierItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierItemRequest $request, SupplierItem $supplierItem)
    {
        //
       // return view('SupplierItem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierItem  $supplierItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierItem $supplierItem)
    {
        //
        return view('SupplierItem.destroy');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHasRecipeCostsRequest;
use App\Http\Requests\UpdateHasRecipeCostsRequest;
use App\Models\HasRecipeCosts;

class HasRecipeCostsController extends Controller
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
     * @param  \App\Http\Requests\StoreHasRecipeCostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHasRecipeCostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HasRecipeCosts  $hasRecipeCosts
     * @return \Illuminate\Http\Response
     */
    public function show(HasRecipeCosts $hasRecipeCosts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasRecipeCosts  $hasRecipeCosts
     * @return \Illuminate\Http\Response
     */
    public function edit(HasRecipeCosts $hasRecipeCosts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHasRecipeCostsRequest  $request
     * @param  \App\Models\HasRecipeCosts  $hasRecipeCosts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHasRecipeCostsRequest $request, HasRecipeCosts $hasRecipeCosts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasRecipeCosts  $hasRecipeCosts
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasRecipeCosts $hasRecipeCosts)
    {
        //
    }
}

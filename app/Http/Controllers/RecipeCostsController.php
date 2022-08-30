<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeCostsRequest;
use App\Http\Requests\UpdateRecipeCostsRequest;
use App\Models\RecipeCosts;

class RecipeCostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('RecipeCosts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('RecipeCosts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecipeCostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeCostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecipeCosts  $recipeCosts
     * @return \Illuminate\Http\Response
     */
    public function show(RecipeCosts $recipeCosts)
    {
        //
        return view('RecipeCosts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecipeCosts  $recipeCosts
     * @return \Illuminate\Http\Response
     */
    public function edit(RecipeCosts $recipeCosts)
    {
        //
        return view('RecipeCosts.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipeCostsRequest  $request
     * @param  \App\Models\RecipeCosts  $recipeCosts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipeCostsRequest $request, RecipeCosts $recipeCosts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecipeCosts  $recipeCosts
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecipeCosts $recipeCosts)
    {
        //
        return view('RecipeCosts.destroy');
    }
}

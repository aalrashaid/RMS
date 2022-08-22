<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeCardRequest;
use App\Http\Requests\UpdateRecipeCardRequest;
use App\Models\RecipeCard;

class RecipeCardController extends Controller
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
     * @param  \App\Http\Requests\StoreRecipeCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecipeCard  $recipeCard
     * @return \Illuminate\Http\Response
     */
    public function show(RecipeCard $recipeCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecipeCard  $recipeCard
     * @return \Illuminate\Http\Response
     */
    public function edit(RecipeCard $recipeCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipeCardRequest  $request
     * @param  \App\Models\RecipeCard  $recipeCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipeCardRequest $request, RecipeCard $recipeCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecipeCard  $recipeCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecipeCard $recipeCard)
    {
        //
    }
}

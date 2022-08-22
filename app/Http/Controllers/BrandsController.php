<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;
use App\Models\Brands;

use \Cviebrock\EloquentSluggable\Services\SlugService;

class BrandsController extends Controller
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
        return view('Brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandsRequest $request)
    {
        //
        //$slug = SlugService::createSlug(Post::class, 'slug', 'My First Post');

        // validator after callbacks

        // validator fails

        // Store the Brands
        // $Brands = Brands::create([
        //     ['user_id' => auth()->user()->id],
        //     ['Slug' => SlugService::createSlug(Brands::class, 'slug', $request->nameBrand)],
        //     ['nameBrand' => $request->nameBrand],
        //     ['Description' => $request->Description],
        //     ['BrandLogas' => $request->BrandLogas],
        //     ['Street' => $request->Street],
        //     ['ZipCode' => $request->ZipCode],
        //     ['City' => $request->City],
        //     ['Province' => $request->Province],
        //     ['Region' => $request->Region],
        //     ['Country' => $request->Country],
        //     ['Moblie' => $request->Moblie],
        //     ['Whatsapp' => $request->Whatsapp],
        //     ['Email' => $request->Email],
        //     ['Web' => $request->Web],
        //     ['Facebook' => $request->Facebook],
        //     ['Youtube' => $request->Youtube],
        //     ['Instagram' => $request->Instagram],
        //     ['twitter' => $request->twitter],
        // ]);

        // dd($Brands);
        dd();

        // redirect to index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function show(Brands $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function edit(Brands $brands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandsRequest  $request
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandsRequest $request, Brands $brands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brands $brands)
    {
        //
    }
}

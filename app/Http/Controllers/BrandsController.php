<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;

use App\Models\Brands;
use App\Models\Countries;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;

class BrandsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Brands.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Countries = Countries::all();
        return view('Brands.create', compact('Countries'));
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
        $Brands = new Brands;

        $Brands->User_id = $request->user()->id;
        $Brands->Slug = SlugService::createSlug(Brands::class, 'slug', $request->Name_Brand);
        $Brands->Name_Brand =  $request->Name_Brand;
        $Brands->Description = $request->Description;
        $Brands->Brand_Logas = $request->Brand_Logas;
        $Brands->Address = $request->City;
        $Brands->State = $request->State;
        $Brands->Zip_Code = $request->Zip_Code;
        $Brands->Country = $request->Country;
        $request->Moblie = $request->Moblie;
        $request->Whatsapp = $request->Whatsapp;
        $request->Email = $request->Email;
        $Brands->Web = $request->Web;
        $Brands->Facebook = $request->Facebook;
        $Brands->Youtube = $request->Youtube;
        $Brands->Instagram = $request->Instagram;
        $Brands->Twitter = $request->Twitter;

        //dd($Brands);

        $Brands->saveOrFail();

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

        //dd();

        //Flash The session

        // redirect to index
        return redirect('Brands.create')->back();
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

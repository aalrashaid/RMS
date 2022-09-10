<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;

use App\Models\Brands;
use App\Models\Cuisine;
use App\Models\Countries;

use Illuminate\Support\Facades\DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;

class BrandsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
        $data['Cuisines'] = Cuisine::all();
        $data['Countries'] = Countries::all();
        return view('Brands.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandsRequest  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(StoreBrandsRequest $request)
    {
        //
        //$slug = SlugService::createSlug(Post::class, 'slug', 'My First Post');

        // validator after callbacks

        // validator fails

        // Store the Brands
         DB::transaction(function () use ($request) {

            Auth::user()
                     ->Brands()
                     ->create($request->except('csrf_token'));
                // DB::commit();

            //  try {

            //      // Do your SQL here
            //      Auth::user()
            //          ->Brands()
            //          ->create($request->except('csrf_token'));
            //      DB::commit();
            //  } catch (Exception $e) {
            //      return $e;
            //  }
         });



         dd($request);

        // $Brands = new Brands;

        // $Brands->User_id = $request->user()->id;
        // $Brands->Cuisine_id = $request->Cuisine_id;
        // $Brands->Thumbnail_Id = $request->Thumbnail_Id;
        // $Brands->Slug = SlugService::createSlug(Brands::class, 'slug', $request->Name_Brand);

        // $Brands->Brand_UID =  $request->Brand_UID;
        // $Brands->Name_Brand =  $request->Name_Brand;
        // $Brands->Description = $request->Description;
        // $Brands->Brand_Loga = $request->Brand_Loga;

        // $Brands->Address = $request->Address;
        // $Brands->City = $request->City;
        // $Brands->State = $request->State;
        // $Brands->Zip_Code = $request->Zip_Code;
        // $Brands->Country = $request->Country;
        // $Brands->Moblie = $request->Moblie;
        // $Brands->Whatsapp = $request->Whatsapp;
        // $Brands->Email = $request->Email;
        // $Brands->Web = $request->Web;

        // $Brands->Facebook = $request->Facebook;
        // $Brands->Youtube = $request->Youtube;
        // $Brands->Instagram = $request->Instagram;
        // $Brands->Twitter = $request->Twitter;

        // dd($Brands);

        // $Brands->saveOrFail();

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

        DB::transaction(function () use ($request) {

            try {

                // Do your SQL here
                Auth::user()
                    ->Brands()
                    ->update($request->except('csrf_token'));
                DB::commit();
            } catch (Exception $e) {
                return $e;
            }
        });
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

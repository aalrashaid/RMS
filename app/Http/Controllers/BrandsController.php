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
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
// use Illuminate\Http\Request;
// use Illuminate\View\View;
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
        $data['Cuisines'] = Cuisine::get();
        $data['Countries'] = Countries::get();

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
        $brand = Brands::create([
            'User_id' => auth()->user()->id,
            'Countries_id' => $request->Countries_id,
            'Cuisine_id' => $request->Cuisine_id,
            'Thumbnail_Id' => $request->Thumbnail_Id,
            'Brand_UID' => $request->Brand_UID,
            'Slug' => $request->SlugService::createSlug(Post::class, 'slug', 'Slug'),
            'Name_Brand' => $request->Name_Brand,
            'Description' => $request->Description,
            'Address' => $request->Address,
            'City' => $request->City,
            'State' => $request->State,
            'Zip_Code' => $request->Zip_Code,
            'Moblie' => $request->Moblie,
            'Whatsapp' => $request->Whatsapp,
            'Email' => $request->Email,
            'Web' => $request->Web,
            'Facebook' => $request->Facebook,
            'Youtube' => $request->Youtube,
            'Instagram' => $request->Instagram,
            'Twitter' => $request->Twitter,
        ]);

        dd($brand);

        $brand->save();
        // DB::transaction(
        //     function () use ($request) {
        //         auth()->user()->Brands()->create($request->except('csrf_token'));
        //     }

        // );

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

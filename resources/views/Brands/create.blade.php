<!-- resources/views/child.blade.php -->

@extends('layouts.apps')

{{-- @section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
    <div class="container-fluid">
        <div class="row">

            <h1>Create Brands Restaurant</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('Brands.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="NameBrand" name="NameBrand" value="{{ old('nameBrand') }}"
                        placeholder="Name Brand" required>

                    <label for="NameBrand">Name Brand</label>

                    @error('NameBrand')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" name="Description"
                        id="Description" required></textarea>
                    <label for="Description">Description</label>
                    @error('Description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="BrandLogas" class="form-label">Upload you Logo Brands</label>
                    <input class="form-control form-control-lg" id="BrandLogas" name="BrandLogas" value="BrandLogas"
                        placeholder=" uploads you File images loga" type="file" required>
                    @error('BrandLogas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Address" name="Address" value="{{ old('Address') }}"
                        placeholder="Address" required>

                    <label for="Address">Address</label>

                    @error('Address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="ZipCode" name="ZipCode"
                        value="{{ old('ZipCode') }}" placeholder="Zip Code" required>

                    <label for="ZipCode">Zip Code</label>

                    @error('ZipCode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="City" name="City" value="{{ old('City') }}"
                        placeholder="City" required>

                    <label for="City">City</label>

                    @error('City')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Province" name="Province" value="{{ old('Province') }}"
                        placeholder="Province" required>

                    <label for="Province">Province</label>

                    @error('Province')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Region" name="Region" value="{{ old('Region') }}"
                        placeholder="Region" required>

                    <label for="Region">Region</label>

                    @error('Region')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Country" name="Country" value="{{ old('Country') }}"
                        placeholder="Country" required>

                    <label for="Country">Country</label>

                    @error('Country')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Moblie" name="Moblie" value="{{ old('Moblie') }}"
                        placeholder="Moblie" required>

                    <label for="Moblie">Moblie</label>

                    @error('Moblie')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Whatsapp" name="Whatsapp"
                        value="{{ old('Whatsapp') }}" placeholder="Whatsapp" required>

                    <label for="Whatsapp">Whatsapp</label>

                    @error('Whatsapp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Email" name="Email"
                        value="{{ old('Email') }}" placeholder="Email" required>

                    <label for="floatingInput">Email</label>

                    @error('Email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Web" name="Web"
                        value="{{ old('Web') }}" placeholder="Web" required>

                    <label for="Web">Web</label>

                    @error('Web')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Facebook" name="Facebook"
                        value="{{ old('Facebook') }}" placeholder="Facebook" required>

                    <label for="Facebook">Facebook</label>

                    @error('Facebook')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Youtube" name="Youtube"
                        value="{{ old('Youtube') }}" placeholder="Youtube" required>

                    <label for="Youtube">Youtube</label>

                    @error('Youtube')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="Instagram" name="Instagram"
                        value="{{ old('Instagram') }}" placeholder="Instagram" required>

                    <label for="Instagram">Instagram</label>

                    @error('Instagram')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="twitter" name="twitter"
                        value="{{ old('twitter') }}" placeholder="twitter" required>

                    <label for="twitter">twitter</label>

                    @error('twitter')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
                <button type="reset" value="Reset" class="btn btn-danger">Reset</button>

            </form>
        </div>
    </div>
@endsection

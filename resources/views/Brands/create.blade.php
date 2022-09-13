@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Create Brand</h1>
            <small></small>
            <hr>
            <div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <form action="{{ route('Brands.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="Brand_UID" id="Brand_UID"
                        class="form-control @error('Brand_UID') is-invalid @enderror" placeholder="Brand_UID"
                        value="{{ old('Brand_UID') }}" >
                    <label for="Brand_UID">Brand UID:</label>
                    @error('Brand_UID')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Name_Brand" id="Name_Brand"
                        class="form-control @error('Name_Brand') is-invalid @enderror" placeholder="Name Brand"
                        value="{{ old('Name_Brand') }}" autocomplete="organization" required>
                    <label for="Name_Brand">Name Brand:</label>
                    @error('Name_Brand')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Slug" id="Slug"
                        class="form-control @error('Slug') is-invalid @enderror" placeholder="Slug"
                        value="{{ old('Slug') }}">
                    <label for="Slug">Slug:</label>
                    @error('Slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control @error('Description') is-invalid @enderror" name="Description" id="Description"
                        placeholder="Leave a Description here" style="height: 100px">{!! old('Description') !!}</textarea>
                    <label for="Description">Description:</label>
                    @error('Description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">The Brand Logo uplaod</label>
                    <input class="form-control form-control-lg @error('Thumbnail_Id') is-invalid @enderror" type="file"
                        name="Thumbnail_Id" id="Thumbnail_Id">
                    @error('Thumbnail_Id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <select class="form-select form-select-lg @error('Cuisine_id') is-invalid @enderror" name="Cuisine_id"
                        id="Cuisine_id" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        @foreach ($data['Cuisines'] as $Cuisine)
                            <option value="{{ $Cuisine->id }}">{{ $Cuisine->Name }}</option>
                        @endforeach
                    </select>
                    @error('Cuisine_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Address" id="Address"
                        class="form-control @error('Address') is-invalid @enderror" placeholder="Address"
                        value="{{ old('Address') }}" autocomplete="street-address" required>
                    <label for="Address">Address:</label>
                    @error('Address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="City" id="City"
                        class="form-control @error('City') is-invalid @enderror" placeholder="City"
                        value="{{ old('City') }}" autocomplete="on" required>
                    <label for="City">City:</label>
                    @error('City')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="State" id="State"
                        class="form-control @error('State') is-invalid @enderror" placeholder="State"
                        value="{{ old('State') }}" autocomplete="on" required>
                    <label for="State">State:</label>
                    @error('State')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Zip_Code" id="Zip_Code"
                        class="form-control @error('Zip_Code') is-invalid @enderror" placeholder="Zip_Code"
                        value="{{ old('Zip_Code') }}" autocomplete="postal-code" required>
                    <label for="Zip_Code">Zip Code:</label>
                    @error('Zip_Code')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <select class="form-select form-select-lg @error('Countries_id') is-invalid @enderror"
                        name="Countries_id" id="Countries_id" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        @foreach ($data['Countries'] as $Country)
                            <option value="{{ $Country->id }}">{{ $Country->Name }}</option>
                        @endforeach
                    </select>
                    @error('Countries_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Moblie" id="Moblie"
                        class="form-control @error('Moblie') is-invalid @enderror" placeholder="Moblie"
                        value="{{ old('Moblie') }}" autocomplete="tel-country-code" required>
                    <label for="Moblie">Moblie:</label>
                    @error('Moblie')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Whatsapp" id="Whatsapp"
                        class="form-control @error('Whatsapp') is-invalid @enderror" placeholder="Whatsapp"
                        value="{{ old('Whatsapp') }}" autocomplete="tel-country-code" required >
                    <label for="Whatsapp">Whatsapp:</label>
                    @error('Whatsapp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="Email" id="Email"
                        class="form-control @error('Email') is-invalid @enderror" placeholder="Email"
                        value="{{ old('Email') }}" autocomplete="email" required >
                    <label for="Email">Email:</label>
                    @error('Email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Web" id="Web"
                        class="form-control @error('Web') is-invalid @enderror" placeholder="Web"
                        value="{{ old('Web') }}" autocomplete="url" required>
                    <label for="Web">Web:</label>
                    @error('Web')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Facebook" id="Facebook"
                        class="form-control @error('Facebook') is-invalid @enderror" placeholder="Facebook"
                        value="{{ old('Facebook') }}" autocomplete="url" required>
                    <label for="Facebook">Facebook:</label>
                    @error('Facebook')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Youtube" id="Youtube"
                        class="form-control @error('Youtube') is-invalid @enderror" placeholder="Youtube"
                        value="{{ old('Youtube') }} " autocomplete="url" required>
                    <label for="Youtube">Youtube:</label>
                    @error('Youtube')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Instagram" id="Instagram"
                        class="form-control @error('Instagram') is-invalid @enderror" placeholder="Instagram"
                        value="{{ old('Instagram') }}" autocomplete="url" required>
                    <label for="Instagram">Instagram:</label>
                    @error('Instagram')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Twitter" id="Twitter"
                        class="form-control @error('Twitter') is-invalid @enderror" placeholder="Twitter"
                        value="{{ old('Twitter') }}" autocomplete="url" required>
                    <label for="Twitter">Twitter:</label>
                    @error('Twitter')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="reset" value="reset" class="btn btn-danger">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
@endsection

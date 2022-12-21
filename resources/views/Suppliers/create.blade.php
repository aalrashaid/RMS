@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Create Supplier Accounte</h1>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">

                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="Supplier_UID" id="Supplier_UID"
                        class="form-control @error('Supplier_UID') is-invalid @enderror" placeholder="Supplier_UID"
                        value="{{ old('Supplier_UID') }}" >
                    <label for="Supplier_UID">Supplier UID:</label>
                    @error('Supplier_UID')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Company_Name" id="Company_Name"
                        class="form-control @error('Company_Name') is-invalid @enderror" placeholder="Company_Name"
                        value="{{ old('Company_Name') }}" >
                    <label for="Company_Name">Company_Name:</label>
                    @error('Company_Name')
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

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">The Thumbnail uplaod</label>
                    <input class="form-control form-control-lg @error('Thumbnail_Id') is-invalid @enderror" type="file"
                        name="Thumbnail_Id" id="Thumbnail_Id">
                    @error('Thumbnail_Id')
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
                        value="{{ old('Youtube') }}" autocomplete="url" required>
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

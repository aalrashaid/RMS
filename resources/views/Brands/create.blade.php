@extends('layouts.dashboards')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>Create Brands</h1>
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
                    <input type="text" name="Name_Brand" id="Name_Brand"
                        class="form-control @error('Name_Brand') is-invalid @enderror" value="{{ old('Name_Brand') }}"
                        placeholder="Name Brand" autocomplete="on" required>
                    <label for="Name_Brand">Name Brand:</label>
                    @error('Name_Brand')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-floating mb-3">
                    <textarea name="text" id="Description" class="form-control @error('Description') is-invalid @enderror"
                        placeholder="Leave a comment here"></textarea>
                    <label for="Description">Description:</label>
                    @error('Description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class=" mb-3">
                    <label for="Brand_Logas" class="form-label">Uploads images Brand loga</label>
                    <input name="Brand_Logas" id="Brand_Logas"
                        class="form-control form-control-lg @error('Brand_Logas') is-invalid @enderror " type="file"
                        required>
                    @error('Brand_Logas')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Address" id="Address"
                        class="form-control @error('Address') is-invalid @enderror" value="{{ old('Address') }}"
                        placeholder="Address" autocomplete="address-line1" required>
                    <label for="Address">Address:</label>
                    @error('Address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="City" id="City"
                        class="form-control @error('City') is-invalid @enderror" value="{{ old('City') }}"
                        placeholder="City" autocomplete="on" required>
                    <label for="City">City:</label>
                    @error('City')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="State" id="State"
                        class="form-control @error('State') is-invalid @enderror" value="{{ old('State') }}"
                        placeholder="Province" autocomplete="on" required>
                    <label for="State">State:</label>
                    @error('State')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Zip_Code" id="Zip_Code"
                        class="form-control @error('Zip_Code') is-invalid @enderror" value="{{ old('Zip_Code') }}"
                        placeholder="Zip_Code" autocomplete="postal-code" required>
                    <label for="Zip_Code">Zip Code:</label>
                    @error('Zip_Code')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select @error('Country') is-invalid @enderror" name="Country" id="Country"
                        aria-label="Floating label select example" required>
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="Country">Country:</label>
                    @error('Country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Moblie" id="Moblie"
                        class="form-control @error('Moblie') is-invalid @enderror" value="{{ old('Moblie') }}"
                        placeholder="Moblie" autocomplete="on" required>
                    <label for="Moblie">Moblie:</label>
                    @error('Moblie')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Whatsapp" id="Whatsapp"
                        class="form-control @error('Whatsapp') is-invalid @enderror" value="{{ old('Whatsapp') }}"
                        placeholder="Whatsapp" autocomplete="on" required>
                    <label for="tel">Whatsapp:</label>
                    @error('Whatsapp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="Email" id="Email"
                        class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email') }}"
                        placeholder="name@example.com" autocomplete="Email" required>
                    <label for="Email">E-mail:</label>
                    @error('Email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="url" name="Web" id="Web"
                        class="form-control @error('Web') is-invalid @enderror" value="{{ old('Web') }}"
                        placeholder="htpp://www.Domain.com" autocomplete="on" required>
                    <label for="Web">Web Address:</label>
                    @error('Web')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="url" name="Facebook" id="Facebook"
                        class="form-control @error('Facebook') is-invalid @enderror" value="{{ old('Facebook') }}"
                        placeholder="Facebook Fun Page Buisenss" autocomplete="on" required>
                    <label for="Facebook">Facebook:</label>
                    @error('Facebook')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="url" name="Youtube" id="Youtube"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('Youtube') }}"
                        placeholder="Channel Name Youtube" autocomplete="on" required>
                    <label for="Youtube">Youtube:</label>
                    @error('Youtube')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Instagram" id="Instagram"
                        class="form-control @error('Instagram') is-invalid @enderror" value="{{ old('Instagram') }}"
                        placeholder="Accout Username Instagram" autocomplete="on" required>
                    <label for="Instagram">Instagram:</label>
                    @error('Instagram')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="url" name="Twitter" id="Twitter"
                        class="form-control @error('Twitter') is-invalid @enderror" value="{{ old('Twitter') }}"
                        placeholder="Accout Username Instagram"  autocomplete="on" required>
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

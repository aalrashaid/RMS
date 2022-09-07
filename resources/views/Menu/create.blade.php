@extends('layouts.dashboards')


@section('content')
    <h1>Create Inventory Item</h1>

    <hr>

    <div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <form action="" method="POST">

        @csrf

        <div class="form-floating mb-3">
            <input type="text" name="Name" id="Name" class="form-control @error('Name') is-invalid @enderror"
                value="{{ old('Name') }}" value="{{ old('Name') }}" placeholder="Name" required>
            <label for="Name">Name:</label>
            @error('Name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Slug" id="Slug" class="form-control @error('Slug') is-invalid @enderror"
                value="{{ old('Slug') }}" value="{{ old('Slug') }}" placeholder="Slug" required>
            <label for="Slug">Slug:</label>
            @error('Slug')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <select name="Category_Id" id="Category_Id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input name="Thumbnail_Id" id="Thumbnail_Id" class="form-control" type="file" id="formFile">
        </div>

        <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <textarea class="form-control" name="Description" id="Description" rows="8"></textarea>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="Price" id="Price" class="form-control @error('Price') is-invalid @enderror"
                value="{{ old('Price') }}" value="{{ old('Price') }}" placeholder="Price" required>
            <label for="Price">Price:</label>
            @error('Price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="reset" value="reset" class="btn btn-danger">Reset</button>
        <button type="submit" value="Submit" class="btn btn-dark">Submit</button>

    </form>
@endsection

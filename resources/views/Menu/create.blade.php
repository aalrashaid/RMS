@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Menu's</h1>
            <hr>
            <form action="" method="post">

                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="Name" id="Name"
                        class="form-control @error('Name') is-invalid @enderror" placeholder="Name"
                        value="{{ old('Name') }}" >
                    <label for="Name">Name:</label>
                    @error('Item_Size')
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

                <div class="form-floating mb-3">
                    <input type="text" name="Name" id="Name"
                        class="form-control @error('Name') is-invalid @enderror" placeholder="Name"
                        value="{{ old('Name') }}" >
                    <label for="Name">Name:</label>
                    @error('Item_Size')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="reset" value="reset" class="btn btn-danger">Reset</button>
                <button type="submit" value="Submit" class="btn btn-dark">Submit</button>

            </form>
        </div>
    </div>
@endsection

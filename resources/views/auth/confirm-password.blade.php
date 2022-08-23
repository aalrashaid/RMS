<!-- resources/views/child.blade.php -->

@extends('layouts.apps')

{{-- @section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
    <div>
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>
    <form method="POST" action="{{ route('password.confirm') }}">

        @csrf

        <div class="form-floating mb-3">

            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"
                placeholder="password" required autocomplete="current-password">

            <label for="password">password</label>

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Confirm') }}</button>
    </form>
@endsection

<!-- resources/views/child.blade.php -->

@extends('layouts.apps')

{{-- @section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
    <form method="POST" action="{{ route('password.update') }}">

        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-floating mb-3">

            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}"
                placeholder="email" required autofocus>

            <label for="email">email</label>

            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-3">

            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"
                placeholder="password" required autocomplete="new-password">

            <label for="password">password</label>

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-3">

            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="password_confirmation" required
                autocomplete="new-password">

            <label for="password_confirmation">password confirmation</label>

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Reset Password') }}</button>
    </form>
@endsection

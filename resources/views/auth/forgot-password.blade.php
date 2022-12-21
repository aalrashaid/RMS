<!-- resources/views/child.blade.php -->

@extends('layouts.apps')

{{-- @section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')

<div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
    <form method="POST" action="{{ route('password.email') }}">
        
        @csrf

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

        <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Email Password Reset Link') }}</button>
    </form>
@endsection

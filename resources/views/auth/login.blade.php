<!-- resources/views/child.blade.php -->

@extends('layouts.apps')

{{-- @section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
    <form method="POST" action="{{ route('login') }}">
      
        @csrf
      
         <div class="form-floating mb-3">

            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                placeholder="email" required>

            <label for="email">email</label>

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

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

        <div>
            <label for="remember_me" >
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
        </div>
       <div>
        @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
       </div>

        <a href="{{ route('register') }}">{{ __('Don\'t have an account?') }}</a>
        <button type="submit" value="Submit" class="btn btn-dark">{{ __('Log in') }}</button>
    </form>
@endsection

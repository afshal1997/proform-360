@extends('layouts.app')
@section('title','Login')
@section('content')
    <div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Admin Login</h1>
            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required
                       autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="{{ __('Password') }}" name="password" required
                       autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-info submit">
                    {{ __('Login') }}
                </button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
@endsection

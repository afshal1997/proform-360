@extends('layouts.app')

@section('content')
    <div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <h1>{{ __('Reset Password') }}</h1>
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

            <br>
            <div>
                <button type="submit" class="btn btn-info submit">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
@endsection

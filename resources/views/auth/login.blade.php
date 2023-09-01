@extends('auth.layouts.app')

@section('content')
<div class="laisin-login-container mx-auto container">
    <img id="laisin-logo" src="{{ asset('assets/laisin.png')}}" alt="">
    <div class="laisin-login-card">
        <div class="login-card-wrapper pt-4">
            <h3 class="form-title">Login</h3>
            <form class="form" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="email px-3 pb-2">
                    <label class="email-label">
                        {{ __('Email Address') }}
                    </label>
                    <div class="email-input">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="email px-3">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="email-input">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 mt-3 float-start">
                    <div class="col-md-12 offset-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="btn-login px-3">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Login') }}
                    </button>

                </div>

            </form>
        </div>
     </div>
</div>
@endsection

@extends('layouts.login')

@section('content')
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <img class="mb-4" src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" width="72"
                height="57">
            <h1 class="h3 mb-3 fw-normal">{{ __('Reset Password') }}</h1>

            <!-- Email Field -->
            <div class="form-floating">
                <input id="email" type="email"
                    class="form-control rounded-0 rounded-top @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                    placeholder="name@example.com">
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="form-floating">
                <input id="password" type="password"
                    class="form-control border-bottom-0 rounded-0 mb-0 @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="New Password">
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div class="form-floating">
                <input id="password-confirm" type="password" class="form-control rounded-bottom"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
            </div>

            <button class="btn btn-lg btn-success mt-3" type="submit">{{ __('Reset Password') }}</button>
            <p class="mt-3 mb-3 text-muted">&copy; 2002–2025</p>
        </form>
    </main>
@endsection

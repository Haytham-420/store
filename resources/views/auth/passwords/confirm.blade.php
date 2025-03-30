@extends('layouts.login')

@section('content')
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <img class="mb-4" src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" width="72"
                height="57">
            <h1 class="h3 mb-3 fw-normal">{{ __('Confirm Password') }}</h1>
            <p>{{ __('Please confirm your password before continuing.') }}</p>

            <!-- Password Field -->
            <div class="form-floating">
                <input id="password" type="password" class="form-control rounded @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password">
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">{{ __('Confirm Password') }}</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link mt-2" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif
            <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>
@endsection

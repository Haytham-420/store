@extends('layouts.login')

@section('content')
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <img class="mb-4" src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" width="72"
                height="57">
            <h1 class="h3 mb-3 fw-normal">{{ __('Register') }}</h1>

            <div class="form-floating">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                <label for="name">{{ __('Name') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-floating">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-floating">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Password">
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-floating">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm Password">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">{{ __('Register') }}</button>
            <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>
@endsection

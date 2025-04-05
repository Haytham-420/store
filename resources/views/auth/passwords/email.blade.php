@extends('layouts.login')

@section('content')
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <img class="mb-4" src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" width="72"
                height="57">
            <h1 class="h3 mb-3 fw-normal">{{ __('Reset Password') }}</h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Email Field -->
            <div class="form-floating">
                <input id="email" type="email" class="form-control rounded @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="name@example.com">
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button class=" btn btn-lg btn-success mt-3" type="submit">{{ __('Send Password Reset Link') }}</button>
            <p class="mt-3 mb-3 text-muted">&copy; 2002–2025</p>
        </form>
    </main>
@endsection

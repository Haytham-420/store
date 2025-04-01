@extends('layouts.login')

@section('content')
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img class="mb-4" src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" width="72"
                height="57">
            <h1 class="h3 mb-3 fw-normal">Please Log in</h1>

            <div class="form-floating">
                <input type="email" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                <label for="email">Email address</label>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-floating">
                <input type="password" id="password" name="password"
                    class="form-control @error('password') is-invalid @enderror" placeholder="Password" required
                    autocomplete="current-password">

                <label for="password">Password</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" id="remember" value="remember-me"
                        {{ old('remember') ? 'checked' : '' }}> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary" type="submit">Log in</button>
            <p class="mt-3 mb-3 text-muted">Don't have an account?</p>
            <a class="btn btn-md btn-info" role="button" href="{{route('register')}}">Register a new account</a>
            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
            <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>
@endsection

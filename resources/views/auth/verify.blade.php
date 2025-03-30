@extends('layouts.login')

@section('content')
    <main class="form-signin w-100 m-auto">
        <img class="mb-4" src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">{{ __('Verify Your Email Address') }}</h1>

        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
        <p>{{ __('If you did not receive the email') }},</p>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit"
                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
        </form>
        <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
    </main>
@endsection

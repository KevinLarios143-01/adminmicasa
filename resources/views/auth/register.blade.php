@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
@section('content')
    <div class="container">
        <div class="micontenedor">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">

                            <main class="form-signin w-100 m-auto">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <img class="mb-4"
                                        src="{{ URL::asset('/images/logomicasa2.png') }}"
                                        alt="" width="80" height="80">
                                    <h1 class="h3 mb-3 fw-normal">{{ __('Registrarse') }}</h1>

                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}" autocomplete="name"
                                            placeholder="name@example.com"autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="email">{{ __('Name') }}</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}" autocomplete="email"
                                            placeholder="name@example.com"autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="email">{{ __('Email Address') }}</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" id="password" placeholder="Password"
                                            autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label for="password">{{ __('Password') }}</label>
                                    </div>
                                    <div class="confirms">
                                    <div class="form-floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password_confirmation" id="password-confirm" placeholder="Password"
                                            autocomplete="new-password">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>

                                    <button class="w-100 btn btn-lg btn-primary"
                                        type="submit">{{ __('Register') }}</button>

                                    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
                                </form>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

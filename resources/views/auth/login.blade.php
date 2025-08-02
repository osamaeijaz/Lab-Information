@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-5 shadow p-3 mb-5 bg-body rounded">
                    <div class="card-header text-center ">
                        <span class="text-primary fs-4 fw-bold">{{ __('Login-Form') }}</span>
                    </div>
                    <div class="text-center "><img src="{{ asset("loginandregimages/logo.png") }}" width="200px" alt="">
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6 ">
                                    <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <label for="password" class=" col-form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="registerbtn text-center my-3">
                                <p class="mx-3">
                                    If you are not registered click here →
                                    <span>
                                        <a class="text-primary fw-bold" href="{{ route('register') }}">Register</a>
                                    </span>
                                </p>
                            </div>

                            <div class="row mb-0">
                                <div class="row mb-0">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
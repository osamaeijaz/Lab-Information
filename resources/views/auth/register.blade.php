@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-5 shadow p-3 mb-5 bg-body rounded">
                    <div class="card-header text-center ">
                        <span class="text-primary fs-4 fw-bold">{{ __('Register-Form') }}</span>
                    </div>
                    <div class="text-center "><img src="{{ asset("loginandregimages/logo.png") }}" width="200px" alt="">
                    </div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('register-user') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class=" col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="phone" class=" col-form-label text-md-end">{{ __('Phone No') }}</label>
                                    <input id="phoneno" type="tel" class="form-control @error('phoneno') is-invalid @enderror"
                                        name="phoneno" value="{{ old('phoneno') }}" autocomplete="phoneno">

                                    @error('phoneno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class=" col-form-label text-md-end">{{ __('D.O.B') }}</label>
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror"
                                        name="dob" value="{{ old('dob') }}" autocomplete="dob">

                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="address" class=" col-form-label text-md-end">{{ __('Address') }}</label>
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" autocomplete="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label text-md-end" for="gender">Gender</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <option disabled {{ old('gender') ? '' : 'selected' }}>Choose...</option>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                            Female</option>
                                        <option value="Custom" {{ old('gender') == 'Custom' ? 'selected' : '' }}>
                                            Custom</option>
                                    </select>
                                     @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="password-confirm"
                                        class=" col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                                <div class="loginbtn text-center my-3">
                                    <p class="mx-3">
                                        If you have already registered click here →
                                        <span>
                                            <a class="text-primary fw-bold" href="{{ route('login') }}">LOG IN</a>
                                        </span>
                                    </p>
                                </div>


                            </div>
                            <div class="row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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
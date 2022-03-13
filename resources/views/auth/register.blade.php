@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
    <main class="form-container container ">
        <div class="container h-100 p-0">
            <div class="row h-100 p-0 bg-main-form-custom">
                <div class="col p-0 left-container">
                    <div class="image-wrapper"></div>
                </div>
                <div class="col h-100 right-container">
                    <form action="{{route('register')}}" method="POST" class="row g-3 register-form">
                        @csrf
                        <div class="header-wrapper">
                            <h1>Sign up</h1>
                            <p>Few more clicks away to get</p>
                            <p>yourself an account.</p>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="input_fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control bg-input-form-custom custom-input" id="input_fullname" name="input_fullname">
                            </div>
                            <div class="col-md-6">
                            <label for="input_username" class="form-label">Username</label>
                            <input type="text" class="form-control bg-input-form-custom custom-input" id="input_username" name="input_username">
                        </div>
                        <div class="col-md-6">
                            <label for="input_email" class="form-label">Email</label>
                            <input type="email" class="form-control bg-input-form-custom custom-input" id="input_email" name="input_email">
                            </div>
                            <div class="col-md-6">
                            <label for="input_phonenumber" class="form-label">Phone Number</label>
                            <input type="text" class="form-control bg-input-form-custom custom-input" id="input_phone_number" name="input_phonenumber">
                        </div>
                        <div class="col-md-6">
                            <label for="input_password" class="form-label">Password</label>
                            <input type="password" class="form-control bg-input-form-custom custom-input" id="input_password" name="input_password">
                            </div>
                            <div class="col-md-6">
                            <label for="input_confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control bg-input-form-custom custom-input" id="input_confirmpassword" name="input_password_confirmation">
                        </div>
                        <div class="col-md-6">
                            <label for="input_tempatlahir" class="form-label">Tempat lahir</label>
                            <input type="text" class="form-control bg-input-form-custom custom-input" id="input_tempatlahir" name="input_tempatlahir">
                            </div>
                            <div class="col-md-6">
                            <label for="input_tanggallahir" class="form-label">Tanggal lahir</label>
                            <input type="date" class="form-control bg-input-form-custom custom-input" id="input_tanggallahir" name="input_tanggallahir">
                        </div>
                        <div class="radio-wrapper d-flex gap-3 mx-4">
                            <div class="form-check form-check-inline">
                                <input name="input_jeniskelamin" class="form-check-input" type="radio" id="inlineRadio1" value="0" required>
                                <label class="form-check-label" for="inlineRadio1">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input name="input_jeniskelamin" class="form-check-input" type="radio" id="inlineRadio2" value="1" required>
                                <label class="form-check-label" for="inlineRadio2">Wanita</label>
                            </div>
                        </div>
                        <div class="col-auto w-100">
                            <button type="submit" class="btn bg-main-custom w-100" >Submit</button>
                        </div>
                        <p class="login-link-container text-center">Already have an account? <a href="{{route('login')}}">Sign in</a></p>
                    </form>
                </div>
            </div>
            </div>
    </main>
@endsection



{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
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
@endsection --}}

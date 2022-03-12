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
                    <form class="row g-3 register-form">
                        <div class="header-wrapper">
                            <h1>Sign up</h1>
                            <p>Few more clicks away to get</p>
                            <p>yourself an account.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Full Name</label>
                            <input type="text" class="form-control bg-input-form-custom custom-input" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Username</label>
                            <input type="text" class="form-control bg-input-form-custom custom-input" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control bg-input-form-custom custom-input" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Phone Number</label>
                            <input type="text" class="form-control bg-input-form-custom custom-input" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Password</label>
                            <input type="password" class="form-control bg-input-form-custom custom-input" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control bg-input-form-custom custom-input" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Tempat lahir</label>
                            <input type="email" class="form-control bg-input-form-custom custom-input" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Tanggal lahir</label>
                            <input type="date" class="form-control bg-input-form-custom custom-input" id="inputPassword4">
                        </div>
                        <div class="radio-wrapper d-flex gap-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Wanita</label>
                            </div>
                        </div>
                        <div class="col-auto w-100">
                            <button type="submit" class="btn bg-main-custom w-100" >Submit</button>
                          </div>
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

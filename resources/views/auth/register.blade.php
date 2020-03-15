@extends('layouts.auth')

@section('content')
    <div class="bg-body-dark bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
        <div class="row mx-0 justify-content-center">
            <div class="hero-static col-lg-6 col-xl-4">
                <div class="content content-full overflow-hidden">
                    <!-- Header -->
                    <div class="py-30 text-center">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                        </a>
                        <h1 class="h4 font-w700 mt-30 mb-10">Welcome to Your BPO App</h1>
                        <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <form class="js-validation-register" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="block block-themed block-rounded block-shadow">
                            <div class="block-header bg-gd-dusk">
                                <h3 class="block-title">Please Register Your Company</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="form-group row @error('first_name') is-invalid @enderror">
                                    <div class="col-12">
                                        <label for="first_name" >{{ __('First Name') }}</label>
                                        <input
                                                id="first_name"
                                                type="first_name"
                                                class="form-control"
                                                name="first_name"
                                                value="{{ old('first_name') }}"
                                                required
                                                autocomplete="first_name"
                                                autofocus>
                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                                </div>
                                <div class="form-group row @error('last_name') is-invalid @enderror">
                                    <div class="col-12">
                                        <label for="last_name">{{ __('Last Name') }}</label>
                                        <input
                                                id="last_name"
                                                type="last_name"
                                                class="form-control"
                                                name="last_name"
                                                value="{{ old('last_name') }}"
                                                required
                                                autocomplete="current-last_name">
                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                                </div>
                                <div class="form-group row @error('email') is-invalid @enderror">
                                    <div class="col-12">
                                        <label for="email" >{{ __('E-Mail Address') }}</label>
                                        <input
                                            id="email"
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            autocomplete="email"
                                            autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group row @error('password') is-invalid @enderror">
                                    <div class="col-12">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input
                                                id="password"
                                                type="password"
                                                class="form-control"
                                                name="password"
                                                required
                                                autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                                </div>
                                <div class="form-group row @error('password_confirmation') is-invalid @enderror">
                                    <div class="col-12">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input
                                                id="password-confirm"
                                                type="password"
                                                class="form-control" name="password_confirmation"
                                                required
                                                autocomplete="new-password">
                                                @error('password-confirm')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                                </div>
                                <div class="form-group row @error('company_name') is-invalid @enderror">
                                    <div class="col-12">
                                        <label for="company_name" >{{ __('Company Name') }}</label>
                                        <input
                                                id="company_name"
                                                type="company_name"
                                                class="form-control" name="company_name"
                                                value="{{ old('company_name') }}"
                                                required
                                                autocomplete="company_name"
                                                autofocus>
                                                @error('company_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-12 text-sm-right push">
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-plus mr-5"></i> {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content bg-body-light">
                                <div class="form-group text-center">
                                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{  route('login')  }}">
                                        <i class="si si-login mr-10"></i> Already have an account? Sign in
                                    </a>
                                    @if (Route::has('password.request'))
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                                            <i class="fa fa-warning mr-5"></i> {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END Sign In Form -->
                </div>
            </div>
        </div>
    </div>
@endsection

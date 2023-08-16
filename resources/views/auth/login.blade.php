@extends('layouts.app')

@section('content')

    <div class="card-body">
        <div class="edit-profile__body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mb-20">
                    <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                </div>

        <div class="form-group mb-20">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>


                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                </div>

                <div class="signUp-condition signIn-condition">
                    <div class="checkbox-theme-default custom-checkbox ">
                        <input class="checkbox" type="checkbox" id="check-1">
                        <label for="check-1">
                            <span class="checkbox-text" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</span>
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

                <div class="row mb-0">
                    <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                        <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
            <p class="social-connector text-center mb-sm-25 mb-15  mt-sm-30 mt-20"><span>Or</span></p>
            <div class="button-group d-flex align-items-center justify-content-md-start justify-content-center">
                <ul class="signUp-socialBtn">
                    <li>
                        <button class="btn text-dark px-30"><img class="svg" src="img/svg/google.svg" alt="img" /> Sign up with
                            Google</button>
                    </li>
                    <li>
                        <button class=" radius-md wh-48 content-center"><img class="svg" src="img/svg/facebook.svg" alt="img" /></button>
                    </li>
                    <li>
                        <button class="radius-md wh-48 content-center"><img class="svg" src="img/svg/twitter.svg" alt="img" /></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

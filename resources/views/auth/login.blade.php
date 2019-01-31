@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <label for="inputEmail">Email address</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword"class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label for="inputPassword">Password</label>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>            
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-info btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        @if (Route::has('register'))
                            <a class="d-block small mt-3" href="{{ route('register') }}">{{ __('Register an Account') }}</a>
                        @endif
            
                        @if (Route::has('password.request'))
                            <a class="d-block small" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

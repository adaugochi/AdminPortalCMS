@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card" style="border-radius: 0px;">
                <div class="card-header bg-info"><b style="color: white;"s>{{ __('Register') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      
                        <div class="form-group">
                            <label for="name"><b>{{ __('Name') }}:</b></label>
                                    
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                           
                        <div class="form-group">
                            <label for="email"><b>{{ __('Email') }}:</b></label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label for="password"><b>{{ __('Password') }}:</b></label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm"><b>{{ __('Confirm Password') }}:</b></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                            
                        <div class="col-md-6 mx-auto">
                            <button type="submit" class="btn btn-info btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>                     
                    </form>
                    <div class="text-center mt-3">                   
                        <a class="d-block small " href="{{ url('/') }}">{{ __('Login') }}</a>                
                        @if (Route::has('password.request'))
                            <a class="d-block small pb-3" href="{{ route('password.request') }}">
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


@extends('layouts.app')

@section('pageName', 'Signup')

@section('signup', 'Signup')

@section('content')
    <div class="signupMain">
            <img src="storage/images/background/signup_texture.png" />
            <div class="row">
                <p id="backHomeSignUp"><a href="/"><i class="material-icons right">keyboard_arrow_right</i>Let's Go Home</a></p>
            </div>

            <div class="frame"> 
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <h6>Basics</h6>
                        <div class="input-field col s12">
                                <i class="material-icons prefix">person</i>
                            <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                name="first_name" value="{{ old('first_name') }}" required autofocus>
                            <label for="first_name">First Name</label>
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                                <i class="material-icons prefix">person</i>
                            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                name="last_name" value="{{ old('last_name') }}" required>
                            <label for="last_name">Last Name</label>
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                                <i class="material-icons prefix">mail</i>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" value="{{ old('email') }}" required>
                            <label for="email">Email Address</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                                <i class="material-icons prefix">phone</i>
                            <label for="phone_number">Mobile Number</label>
                            <input id="phone_number" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                                name="phone_number" required value="{{ old('phone_number') }}">
                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                        <h6>Security</h6>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Retype Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password_confirmation" required>
                        </div> 
                    </div>
                        <div class="row">
                            <div class="col s12">
                                <button class="btn waves-effect waves-light btn-large" type="submit">
                                    Let's Get Wealthy
                                </button>
                            </div>
                        </div>        
                    </form>
            </div>

        <div class="row">
            <div id="signinHomeSignUp">
                <p>Mixed Up?</p>
            <p><a href="{{ route('login') }}">Sign In</a></p>
            </div>
        </div>  
    </div>
        <div class="signupSub">
            <div class="signupSub-text">
                <h2>Hold Up,</h2>
                <h2>Let's Sign Up First</h2>
            </div>
        </div>
@endsection

      


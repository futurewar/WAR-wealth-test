@extends('layouts.app')

@section('pageName')
Signup
@endsection

@section('signup')
Signup
@endsection


@section('content')
<div class="signinMain">
<<<<<<< HEAD
        <img src="storage/images/background/signin_texture.png" />
        <div class="row">
            <p id="backHomeSignIn" class="col s12"><a href="/"><i class="material-icons left">keyboard_arrow_left</i>Let's Go
                    Back Home</a></p>
        </div>
=======
    <img src="storage/images/background/signin_texture.png" />
    <div class="row">
        <p id="backHomeSignIn">
            <a href="/">
                <i class="material-icons left">keyboard_arrow_left</i>
                Let's Go Back Home
            </a>
        </p>
    </div>
>>>>>>> added user model observer and scafolded the auth

    <div class="frame">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email">Email Address</label>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <label for="password">Password</label>
                    <input id="password" type="password"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                        required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="col s6">
                        <p class="left-align">
                            <label>
                                <input type="checkbox" class="filled-in" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }} />
                                <span for="remember">Remember Me</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s6">
                        <p id="fpass" class="right-align">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <a href="{{"/journey"}}"><button class="btn waves-effect waves-light btn-large" type="submit">
                            Get Wealthier
                        </button></a>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div id="signupHomeSignIn">
            <p>Oops...</p>
            <p>You can’t get wealthier just yet</p>
            <p>Let’s <a href="{{'/signup'}}">Sign Up</a> then.</p>
        </div>
    </div>
</div>
<div class="signinSub">
    <div class="signinSub-text">
        <h1>Hello,</h1>
        <h1>Welcome Back!</h1>
    </div>
</div>
@endsection
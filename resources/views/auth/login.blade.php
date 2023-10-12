@extends('layouts.app')

<!-- @section('form') -->
@section('content')

<!-- <div class="login-box" style="width: 700px;">
    <div class="login-logo">
        <a href="#" style="color:#b3b6b9; font: size 1.9em;"><b style="font-weight:bold;"><span>Khawa Bâ</span></b></a>

    </div>

    <div class="card bg-dark">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Se Connecter</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>
</div> -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form">
                <div class="card-header title">{{ __('Login') }}</div>

                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn-login">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('mot de passe oublié?') }}
                                </a>
                                @endif
                            </div>
                            <div class="col-md-4">
                            <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

<!-- <style>
    .form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 30%;
    margin: 0 auto;
    background: #0D6EFD;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    padding: 50px;
    margin-top: 5%;
    }
    form div input {
        width: 100%;
        height: 40px;
        border-radius: 8px;
        outline: none;
        border: 2px solid #c4c4c4;
        padding: 0 30px;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}
form div {
  position: relative;
  margin-bottom: 15px;
}

input:focus {
  border: 2px solid #fff;
}
.btn-login {
  margin-top: 15px;
  width: 100%;
  height: 45px;
  background-color: #fff;
  border-radius: 8px;
  border: none;
  color: #9ba0f6;
  font-size: 20px;
  cursor: pointer;
  margin-bottom: 4%;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
  transition: all 0.1s ease;
}
.title {
  font-size: 25px;
  font-weight: bold;
  margin-bottom: 20px;
}
body{
    background-color: #f8fafc !important;
}
</style> -->

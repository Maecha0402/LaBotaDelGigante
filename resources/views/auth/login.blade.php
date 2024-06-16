@extends('layouts.auth_layout')

@section('title', 'Login')

@section('content')
<!-- Bootstrap CDN -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
  body {
    background-image: url(images/blanco.jpg);
    font-family: Arial, sans-serif;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .card {
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    margin: auto;
  }

  .login-box {
    padding: 40px;
    background: #f5f5f5;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
    border-radius: 10px;
  }

  .login-box p {
    margin: 0 0 30px;
    padding: 0;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    letter-spacing: 1px;
  }

  .login-box .user-box {
    position: relative;
    margin-bottom: 30px;
  }

  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #000;
    outline: none;
    background: transparent;
  }

  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
  }

  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    font-size: 12px;
  }

  .btn-custom {
    background-color: #A0522D;
    border: none;
    padding: 10px 20px;
    font-weight: bold;
    color: #fff;
    font-size: 13px;
    text-decoration: none;
    text-transform: uppercase;
    transition: .5s;
    letter-spacing: 3px;
    text-align: center;
    display: block;
    width: 100%;
    border-radius: 5px;
  }

  .btn-custom:hover {
    background-color: #fff;
    color: #A0522D;
    border: 1px solid #A0522D;
  }

  .btn-secondary {
    background-color: #db4a39;
    border: none;
    padding: 10px 20px;
    font-weight: bold;
    color: #fff;
    font-size: 13px;
    text-decoration: none;
    text-transform: uppercase;
    transition: .5s;
    letter-spacing: 3px;
    text-align: center;
    display: block;
    width: 100%;
    border-radius: 5px;
    margin-top: 10px;
  }

  .btn-secondary:hover {
    background-color: #fff;
    color: #db4a39;
    border: 1px solid #db4a39;
  }

  .forgot-password-link {
    color: #A0522D;
    text-decoration: none;
    font-weight: bold;
    display: block;
    text-align: center;
    margin-top: 20px;
  }

  .forgot-password-link:hover {
    text-decoration: underline;
  }
</style>

<div class="container">
  <div class="card">
    <div class="login-box">
      <img src="{{ asset('images/logotipo_sinfondo.png') }}" alt="La Bota del Gigante" class="img-fluid mb-2">
      <p>{{ __('Iniciar sesión') }}</p>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="user-box">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label for="email">{{ __('Usuario') }}</label>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="user-box">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <label for="password">{{ __('Contraseña') }}</label>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <button type="submit" class="btn btn-custom">
          {{ __('Entrar') }}
        </button>
        <div class="form-check mt-3">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">
            {{ __('Recordarme') }}
          </label>
        </div>
      </form>
      @if (Route::has('password.request'))
        <a class="forgot-password-link" href="{{ route('password.request') }}">
          {{ __('¿Olvidaste tu contraseña?') }}
        </a>
      @endif
    </div>
  </div>
</div>
@endsection

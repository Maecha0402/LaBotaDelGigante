@extends('layouts.auth_layout')

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
      <div class="text-center mb-4">
        <img src="{{ asset('images/logotipo_sinfondo.png') }}" alt="Logo" style="max-width: 250px;">
      </div>
      <p class=" text-center ">{{ __('Restablecer contraseña') }}</p>
      <div class="card-body">
        @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
          @csrf
          <div class="user-box">
            <div class="mb-3">
              <label for="email" class="col-form-label">{{ __('Correo Electronico') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="mb-0">
            <button type="submit" class="btn btn-custom">
              {{ __('Restablecer Contraseña') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

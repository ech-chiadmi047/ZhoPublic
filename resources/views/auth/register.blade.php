@extends('layouts.app.auth')


@section('content')


<div class="form-flex-column">
    <div>
      <h3 class="form-title">Register</h3>
    </div>
    <div>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="inputs">
          <p>Name :</p>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputs">
          <p>Email :</p>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputs">
          <p>Password :</p>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="new-password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputs">
          <p>Confirm password :</p>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            autocomplete="new-password">
        </div>
        <div class="inputs">
          <div class="form-links">
            <div class="links">
              <h4><span class="link-orange">Part of our family ?</span> <a href="{{ route('login') }}"><span
                    class="link-blue">Sign in !</span></a></h4>
            </div>
            <div class="submit">
              <button type="submit" class="links-btn">Register</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

@endsection
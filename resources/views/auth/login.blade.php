@extends('layouts.app.auth')


@section('content')


<div class="form-flex-column">
      <div>
        <h3 class="form-title">Sign in</h3>
      </div>
      <div>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="inputs">
            <p>Email :</p>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
              value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="inputs">
            <p>Password :</p>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
              name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="inputs">
            <div class="form-links">
              <div class="links">
                <h4><span class="link-orange">New to ZHO ?</span> <a href="{{ route('register') }}"><span
                      class="link-blue">Join us NOW !</span></a></h4>
              </div>
              <div class="submit">
                <button type="submit" class="links-btn">Sign in</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

@endsection
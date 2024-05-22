@extends('layouts.app.auth')

<style>
  .auth-form {
    width: 65% !important;
  }

  .auth-logo {
    display: none !important;
  }
</style>

@section('content')

<div class="form-flex-column">
  
  <div>
    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="block">
        <div class="perso-info">
          <div class="info-left">
            <div class="inputs">
              <p>Choose your image :</p>
              <div class="profile-img">
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image"
                  style="display: none;">
                <!-- IMAGE ICON -->
                <label for="image">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path
                        d="M13 3C13 2.44772 12.5523 2 12 2C11.4477 2 11 2.44772 11 3V11H3C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13H11V21C11 21.5523 11.4477 22 12 22C12.5523 22 13 21.5523 13 21V13H21C21.5523 13 22 12.5523 22 12C22 11.4477 21.5523 11 21 11H13V3Z"
                        fill="#CED4D9"></path>
                    </g>
                  </svg>
                </label>
                <!-- ------------------------ -->
              </div>

              @error('image')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="info-right">
            <div class="inputs info">
              <p>How old are you ?</p>
              <input id="age" type="number" min="1" max="100" class="form-control @error('age') is-invalid @enderror"
                name="age" placeholder="18" required autocomplete="age" autofocus>

              @error('age')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="inputs info">
              <p>Choose your gender :</p>
              <select name="gender">
                <option disabled selected hidden>Choose...</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Other">Other</option>
              </select>

              @error('age')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="inputs info">
              <p>Describe yourself !</p>
              <textarea name="desc" id="desc" placeholder="Let us know you better ..."
                style="width: 100%;height: 100%;"></textarea>
              @error('desc')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <p class="contact">Contact :</p>
      <div class="block">
        <div class="inputs-contact">
          <input id="num" type="tel" class="form-control @error('num') is-invalid @enderror" name="num" required
            placeholder="Enter your phone number">

          @error('num')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputs-contact">
          <input id="fb" type="text" class="form-control @error('fb') is-invalid @enderror" name="fb" required
            placeholder="Enter your facebook">

          @error('fb')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputs-contact">
          <input id="insta" type="text" class="form-control @error('insta') is-invalid @enderror" name="insta" required
            placeholder="Enter your instagram">

          @error('num')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      
      <div class="inputs-contact">
        <div class="form-links">
          <div class="links">
            <h4><span class="link-orange">Help us know you better !</span></h4>
          </div>
          <div class="submit">
            <button type="submit" class="links-btn">Next</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
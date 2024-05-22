


@extends('layouts.app.home')


<!-- CONTENT -->
@section('content')

<!-- COVEER -->

<div class="cover">
  <img src="{{url('asset/home/home.png')}}" class='img-cover' />
  <div class="create-account">
    <a href="{{ route('register') }}"><button type="button">Create account</button></a>
    <div>
      <p class="learn-more">LEARN MORE!</p>
      <img src="{{url('svg/arrow.svg')}}" alt="arrow" class="arrow">
    </div>
  </div>
</div>

<!-- TAKE A LOOK -->

<h1 class="title">Take a look</h1>
<!-- BLUE -->
<div class="take-a-look">
  <div class="blue-rec"></div>
  <div class="take-a-look-imgs">
    <a href="{{ route('company') }}">
      <div class="container">
        <img src="{{url('asset/home/company.png')}}" class='img-look' />
        <div class="overlay">
          <div class="text">Company</div>
        </div>
      </div>
    </a>
    <a href="{{ route('entertainment') }}">
      <div class="container">
        <img src="{{url('asset/home/entertainment.png')}}" class='img-look' />
        <div class="overlay">
          <div class="text">Entertainment</div>
        </div>
      </div>
    </a>
    <a href="{{ route('place') }}">
      <div class="container">
        <img src="{{url('asset/home/place.png')}}" class='img-look' />
        <div class="overlay">
          <div class="text">Place</div>
        </div>
      </div>
    </a>
  </div>
</div>

<!-- ORANGE -->

<div class="take-a-look">
  <div class="orange-rec"></div>
  <div class="take-a-look-imgs">
    <a href="{{ route('equipment') }}">
      <div class="container">
        <img src="{{url('asset/home/equipment.png')}}" class='img-look' />
        <div class="overlay">
          <div class="text">Equipment</div>
        </div>
      </div>
    </a>
    <a href="{{ route('suggestion') }}">
      <div class="container">
        <img src="{{url('asset/home/suggestion.png')}}" class='img-look' />
        <div class="overlay">
          <div class="text">Suggestion</div>
        </div>
      </div>
    </a>
    <a href="{{ route('catering') }}">
      <div class="container">
        <img src="{{url('asset/home/catering.png')}}" class='img-look' />
        <div class="overlay">
          <div class="text">Catering</div>
        </div>
      </div>
    </a>
  </div>
</div>
@endsection







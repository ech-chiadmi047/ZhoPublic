@extends('layouts.app.home')



<!-- CONTENT -->
@section('content')

<!-- COVEER -->

<div class="cover">
  <img src="{{url('asset/home/suggestion-cover.png')}}" class='img-cover' />
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
<div class="take-a-look">
  <div class="blue-rec-tk"></div>
  <div class="w90">
    <div class="flex">
      <div class="take-a-look1">
        <img src="{{url('asset/home/suggestion-tk1.png')}}" alt="arrow" class="tk1">
        <img src="{{url('asset/home/suggestion-tk2.png')}}" alt="arrow" class="tk2">
      </div>
      <div class="take-a-look-text">
        <p>CONFUSED ? <br>
          NOT ANYMORE</p>
      </div>
    </div>
  </div>
  <div class="orange-rec-tk"></div>
</div>

<!-- TAKE A LOOK QUOTE -->

<div class="tk-quote">
  <p>Indecisiveness wears a person out, <br>
    so for less headache and an ocean of entertaining choices join us !</p>
</div>

<!-- HAVE A CLOSER LOOK -->

<h1 class="title">Have a closer look</h1>
<div class="w90">
  <div class="closer-look">
  @foreach ($suggestions as $suggestion)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('favorite.suggestion', $suggestion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <img src="{{url('svg/heart.svg')}}" alt="heart" class="heart">
        <button class="heart" style="height: 2.1vw;opacity: 0%;"></button>
      </form>
      <img src="/images/suggestion/{{$suggestion->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Suggestion</h3>
      <h3 class="card-title">{{ $suggestion->title }}</h3>
      <p class="price">{{  $suggestion->price }} <span style="color: black;">DHs</span></p>
      @if($suggestion->user()->first()->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-suggestion.show', $suggestion->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
  </div>
</div>


@endsection
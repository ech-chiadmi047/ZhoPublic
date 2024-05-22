@extends('layouts.app.dashboard')
<style>
  .card-btn {
    float: right !important;
    background-color: transparent !important;
    color: #03004d !important;
    padding-right: 2.5vw !important;
    padding-left: 2.5vw !important;
    font-size: 2vw !important;
    height: 3.1vw !important;
    width: 11.5vw !important;
    cursor: pointer !important;
    margin-top: 1vw !important;
    box-shadow: #E6E6E6 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset !important;
    border: none !important;
    border-top-left-radius: 1vw !important;
  }

  .card-btn:hover {
    background-color: #E6E6E6 !important;
    font-size: 1.8vw !important;
  }

  /* EMPTY */

  .error {
    height: 45%;
    display: block;
    margin: auto;
  }

  form{
    margin-block-end: 0 !important;
  }
</style>


@section('content')
<!--  -->
<h1 class="title">My wishlist</h1>
<div class="w90">
  <div class="closer-look">
    @foreach ($places as $place)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('remove.place',$place->id) }}" method="POST">
        <img src="{{url('svg/remove.svg')}}" alt="heart" class="heart">
        <input type="hidden" name="_method" value="DELETE" style="display: none;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" style="display: none;">
        <input type="submit" class="heart" style="height: 2.1vw;opacity: 0%;">
      </form>
      <img src="/images/place/{{$place->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Place</h3>
      <h3 class="card-title">{{ $place->title }}</h3>
      <p class="price">{{ $place->price }} <span style="color: black;">DHs</span></p>
      @if($place->user->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-place.show', $place->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
    @foreach ($companys as $company)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('remove.company',$company->id) }}" method="POST">
        <img src="{{url('svg/remove.svg')}}" alt="heart" class="heart">
        <input type="hidden" name="_method" value="DELETE" style="display: none;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" style="display: none;">
        <input type="submit" class="heart" style="height: 2.1vw;opacity: 0%;">
      </form>
      <img src="/images/company/{{$company->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Company</h3>
      <h3 class="card-title">{{ $company->title }}</h3>
      <p class="price">{{ $company->price }} <span style="color: black;">DHs</span></p>
      @if($company->user->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-company.show', $company->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
    @foreach ($entertainments as $entertainment)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('remove.entertainment',$entertainment->id) }}" method="POST">
        <img src="{{url('svg/remove.svg')}}" alt="heart" class="heart">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="heart" style="height: 2.1vw;opacity: 0%;">
      </form>
      <img src="/images/entertainment/{{$entertainment->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Entertainment</h3>
      <h3 class="card-title">{{ $entertainment->title }}</h3>
      <p class="price">{{ $entertainment->price }} <span style="color: black;">DHs</span></p>
      @if($entertainment->user->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-entertainment.show', $entertainment->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
    @foreach ($equipments as $equipment)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('remove.equipment',$equipment->id) }}" method="POST">
        <img src="{{url('svg/remove.svg')}}" alt="heart" class="heart">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="heart" style="height: 2.1vw;opacity: 0%;">
      </form>
      <img src="/images/equipment/{{$equipment->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Equipment</h3>
      <h3 class="card-title">{{ $equipment->title }}</h3>
      <p class="price">{{ $equipment->price }} <span style="color: black;">DHs</span></p>
      @if($equipment->user->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-equipment.show', $equipment->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
    @foreach ($caterings as $catering)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('remove.catering',$catering->id) }}" method="POST">
        <img src="{{url('svg/remove.svg')}}" alt="heart" class="heart">
        <input type="hidden" name="_method" value="DELETE" style="display: none;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" style="display: none;">
        <input type="submit" class="heart" style="height: 2.1vw;opacity: 0%;">
      </form>
      <img src="/images/catering/{{$catering->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Catering</h3>
      <h3 class="card-title">{{ $catering->title }}</h3>
      <p class="price">{{ $catering->price }} <span style="color: black;">DHs</span></p>
      @if($catering->user->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-catering.show', $catering->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
    @foreach ($suggestions as $suggestion)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('remove.suggestion',$suggestion->id) }}" method="POST">
        <img src="{{url('svg/remove.svg')}}" alt="heart" class="heart">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="heart" style="height: 2.1vw;opacity: 0%;">
      </form>
      <img src="/images/suggestion/{{$suggestion->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Suggestion</h3>
      <h3 class="card-title">{{ $suggestion->title }}</h3>
      <p class="price">{{ $suggestion->price }} <span style="color: black;">DHs</span></p>
      @if($suggestion->user->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-suggestion.show', $suggestion->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
    <!-- ----- -->
  </div>
</div>
@if($companys->count() + $places->count() + $entertainments->count() + $equipments->count() + $suggestions->count() + $caterings->count() == 0)
<img src="{{url('asset/backoffice/empty.png')}}" alt="" class="error">
@endif
<!--  -->
@endsection
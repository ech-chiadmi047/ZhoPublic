@extends('layouts.app.dashboard')


<style>
  /* EMPTY */

.error {
    height: 45%;
    display: block;
    margin: auto;
    margin-top:3vw;
  }
</style>

@section('content')
<!--  -->
<h1 class="title">My posts</h1>
<div class="w90">
  <div class="closer-look">
    <!-- CARD -->
    <!--  -->
    <!-- ----- -->

    @foreach ($places as $place)
    <!-- CARD -->
    <div class="card">
      <img src="/images/place/{{$place->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Place</h3>
      <h3 class="card-title">{{ $place->title }}</h3>
      <p class="price">{{ $place->price }} <span style="color: black;">DHs</span></p>
      <a href="{{ route('zho-place.show', $place->id)}}"><button class="card-btn">Details</button></a>
      <a href="{{ route('zho-place.edit', $place->id)}}"><button class="card-btn edit-post">Edit</button></a>
      <form action="{{ route('zho-place.destroy', $place->id)}}" method="post">
        @csrf
        @method('DELETE')
        <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
      </form>
    </div>
    @endforeach
    @foreach ($companys as $company)
    <!-- CARD -->
    <div class="card">
      <img src="/images/company/{{$company->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Company</h3>
      <h3 class="card-title">{{ $company->title }}</h3>
      <p class="price">{{ $company->price }} <span style="color: black;">DHs</span></p>
      <a href="{{ route('zho-company.show', $company->id)}}"><button class="card-btn">Details</button></a>
      <a href="{{ route('zho-company.edit', $company->id)}}"><button class="card-btn edit-post">Edit</button></a>
      <form action="{{ route('zho-company.destroy', $company->id)}}" method="post">
        @csrf
        @method('DELETE')
        <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
      </form>
    </div>
    @endforeach
    @foreach ($entertainments as $entertainment)
    <!-- CARD -->
    <div class="card">
      <img src="/images/entertainment/{{$entertainment->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Entertainment</h3>
      <h3 class="card-title">{{ $entertainment->title }}</h3>
      <p class="price">{{ $entertainment->price }} <span style="color: black;">DHs</span></p>
      <a href="{{ route('zho-entertainment.show', $entertainment->id)}}"><button class="card-btn">Details</button></a>
      <a href="{{ route('zho-entertainment.edit', $entertainment->id)}}"><button class="card-btn edit-post">Edit</button></a>
      <form action="{{ route('zho-entertainment.destroy', $entertainment->id)}}" method="post">
        @csrf
        @method('DELETE')
        <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
      </form>
    </div>
    @endforeach
    @foreach ($equipments as $equipment)
    <!-- CARD -->
    <div class="card">
      <img src="/images/equipment/{{$equipment->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Equipment</h3>
      <h3 class="card-title">{{ $equipment->title }}</h3>
      <p class="price">{{ $equipment->price }} <span style="color: black;">DHs</span></p>
      <a href="{{ route('zho-equipment.show', $equipment->id)}}"><button class="card-btn">Details</button></a>
      <a href="{{ route('zho-equipment.edit', $equipment->id)}}"><button class="card-btn edit-post">Edit</button></a>
      <form action="{{ route('zho-equipment.destroy', $equipment->id)}}" method="post">
        @csrf
        @method('DELETE')
        <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
      </form>
    </div>
    @endforeach
    @foreach ($caterings as $catering)
    <!-- CARD -->
    <div class="card">
      <img src="/images/catering/{{$catering->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Catering</h3>
      <h3 class="card-title">{{ $catering->title }}</h3>
      <p class="price">{{ $catering->price }} <span style="color: black;">DHs</span></p>
      <a href="{{ route('zho-catering.show', $catering->id)}}"><button class="card-btn">Details</button></a>
      <a href="{{ route('zho-catering.edit', $catering->id)}}"><button class="card-btn edit-post">Edit</button></a>
      <form action="{{ route('zho-catering.destroy', $catering->id)}}" method="post">
        @csrf
        @method('DELETE')
        <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
      </form>
    </div>
    @endforeach
    @foreach ($suggestions as $suggestion)
    <!-- CARD -->
    <div class="card">
      <img src="/images/suggestion/{{$suggestion->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Suggestion</h3>
      <h3 class="card-title">{{ $suggestion->title }}</h3>
      <p class="price">{{ $suggestion->price }} <span style="color: black;">DHs</span></p>
      <a href="{{ route('zho-suggestion.show', $suggestion->id)}}"><button class="card-btn">Details</button></a>
      <a href="{{ route('zho-suggestion.edit', $suggestion->id)}}"><button class="card-btn edit-post">Edit</button></a>
      <form action="{{ route('zho-suggestion.destroy', $suggestion->id)}}" method="post">
        @csrf
        @method('DELETE')
        <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
      </form>
    </div>
    @endforeach
    <!-- ----- -->
  </div>
</div>
@if($companys->count() + $places->count() + $entertainments->count() + $equipments->count() + $suggestions->count() +
$caterings->count() == 0)
<img src="{{url('asset/backoffice/empty.png')}}" alt="" class="error">
@endif
<!--  -->
@endsection
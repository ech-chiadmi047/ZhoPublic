@extends('layouts.app.home')


<!-- CONTENT -->
@section('content')

<!-- COVEER -->

<div class="cover">
  <img src="{{url('asset/home/equipment-cover.png')}}" class='img-cover' />
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
        <img src="{{url('asset/home/equipment-tk1.png')}}" alt="arrow" class="tk1">
        <img src="{{url('asset/home/equipment-tk2.png')}}" alt="arrow" class="tk2">
      </div>
      <div class="take-a-look-text">
        <p>YOUR TOOLS FOR <br>
          A SUCCESSFUL EVENT</p>
      </div>
    </div>
  </div>
  <div class="orange-rec-tk"></div>
</div>

<!-- TAKE A LOOK QUOTE -->

<div class="tk-quote">
  <p>You can never play a football match without a ball <br>
    and a party is never lit without the right equipment !</p>
</div>

<!-- HAVE A CLOSER LOOK -->

<h1 class="title">Have a closer look</h1>
<div class="w90">
  <div class="closer-look">
  @foreach ($equipments as $equipment)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('favorite.equipment', $equipment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <img src="{{url('svg/heart.svg')}}" alt="heart" class="heart">
        <button class="heart" style="height: 2.1vw;opacity: 0%;"></button>
      </form>
      <img src="/images/equipment/{{$equipment->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Equipment</h3>
      <h3 class="card-title">{{ $equipment->title }}</h3>
      <p class="price">{{ $equipment->price }} <span style="color: black;">DHs</span></p>
      @if($equipment->user()->first()->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-equipment.show', $equipment->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
  </div>
</div>


@endsection
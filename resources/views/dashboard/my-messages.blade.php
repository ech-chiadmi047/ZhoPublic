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
<h1 class="title">My messages</h1>
<div class="w90">
  @foreach($messages as $message)
  <div class="message-bubble">
    <div class="message-time">
      <div>
        <img src="{{url('svg/time.svg')}}" alt="clock" class="time-img">
      </div>
      <div>
        <p class="message-time-text">{{ $message->created_at }}</p>
      </div>
    </div>
    <div class="message-box">
      <p>{{ $message->message }}.</p>
    </div>
    <div class="bubble">
      <div class="first-bubble"></div>
      <div class="second-bubble"></div>
    </div>
  </div>
  @endforeach
  <!-- empty -->
  @if($messages->count() == 0)
    <img src="{{url('asset/backoffice/empty.png')}}" alt="" class="error">
  @endif
  <!--  -->
</div>
<!--  -->
@endsection
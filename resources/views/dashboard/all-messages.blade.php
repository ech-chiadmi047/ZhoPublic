@extends('layouts.app.dashboard')

<style>
  /* EMPTY */

  .error {
    height: 45%;
    display: block;
    margin: auto;
    margin-top: 3vw;
  }
</style>


@section('content')
<!--  -->
<h1 class="title">All messages</h1>
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
      @if(isset($message->user_id))
      <a href="{{ route('profile.show', $message->user->id)}}"><img src="/images/user/{{$message->user->image}}" alt=""
          class="message-user"></a>
      @endif
      <p>{{ $message->message }}.</p>
      <p style="text-align: right;"><span style="color: #8b8c8b;">Sent by {{ $message->name }} and their email is : 
      <span style="color: #03004d;">{{ $message->email }}</span>.</span></p>
    </div>
    <div class="bubble">
      <div class="first-bubble"></div>
      <div class="second-bubble"></div>
    </div>
  </div>
  @endforeach
  <br><br><br><br>
  <!-- empty -->
  @if($messages->count() == 0)
  <img src="{{url('asset/backoffice/empty.png')}}" alt="" class="error">
  @endif
  <!--  -->
</div>
<!--  -->
@endsection
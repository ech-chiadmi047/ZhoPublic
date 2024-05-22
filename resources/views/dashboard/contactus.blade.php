@extends('layouts.app.dashboard')

<style>
/* EMPTY */

.error {
    height: 45%;
    display: block;
    margin: auto;
    margin-top:3vw;
  }
/* CONTACT */

.contact-us-title {
    text-align: center;
    font-size: 2.5vw;
    color: #da2400;
    margin-top:2.6vw;
  }

  .contact-us {
    display: flex;
    justify-content: space-around;
  }

  .contact-us-text {
    width: 50%;
  }

  .contact-us-text p {
    text-align: left;
    font-size: 3.5vw;
  }

  #contact-us-btn {
    width: 14vw;
    border: none;
    font-size: 2.2vw;
    color: white;
    background-color: #da2400;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    cursor: pointer;
  }

  #contact-us-btn:hover {
    transform: scale(1.07);
  }

  select,
  input,
  option {
    height: 3vw !important;
    font-size: 1vw !important;
  }

  .contact-us-input {
    width: 90%;
    display: block;
    margin: auto;
  }

  .contact-us-input-title {
    width: 90%;
    display: block;
    margin: auto;
    text-align: left;
    font-size: 1.5vw;
    margin-top: 1vw;
  }

  .contact-us-btn {
    border: 0.1vw solid #03004d;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    color: white;
    font-size: 1.4vw;
    width: 90%;
    display: block;
    margin: auto;
    background-color: #03004d;
    margin-top: 1vw;
    height: 3vw;
    border-radius: 0.2vw;
    cursor: pointer;
  }

  .contact-us-btn:hover {
    background-color: white;
    color: #03004d;
  }

  textarea {
    height: 5vw !important;
    font-size: 1vw !important;
  }
</style>


@section('content')
<!--  -->
<h1 class="title">Contact us</h1>
<div class="w90">
<form action="{{ route('message.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <!-- Modal content -->
      <h3 class="contact-us-title">Unleash your thoughts !</h3>
      @if (Auth::check())
      <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id">
      @endif
      <div>
        <p class="contact-us-input-title">Name</p>
        <input type="text" class="contact-us-input" placeholder="Enter your Name..." name="name" value="{{ Auth::user()->name }}">
      </div>
      <div>
        <p class="contact-us-input-title">Email</p>
        <input type="text" class="contact-us-input" placeholder="Enter your Email..." name="email" value="{{ Auth::user()->email }}">
      </div>
      <div>
        <p class="contact-us-input-title">Your message</p>
        <textarea class="contact-us-input" placeholder="Feel free..." name="message"></textarea>
      </div>
      <button class="contact-us-btn" type="submit">Send</button>
    </div>
  </form>
  <!--  -->
</div>
<!--  -->
@endsection
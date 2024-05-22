@extends('layouts.app.home')

<style>
  .tk-quote-aboutus {
    width: 90%;
    display: block;
    margin: auto;
    text-align: center;
    font-size: 2vw;
  }

  .deco-aboutus {
    position: relative;
  }

  .zho {
    color: #da2400;
    font-size: 2.5vw;
  }

  .deco1 {
    width: 5vw;
    position: absolute;
    top: 0;
    left: 0;
  }

  .deco3 {
    width: 5vw;
    position: absolute;
    top: 0;
    right: 0;
  }

  hr {
    margin: 1vw !important;
  }

  /* CONTACT US */

  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 7vw !important;
    padding: 5vw;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    padding-bottom: 3vw;
    padding-top: 1vw;
    border: 1px solid #888;
    width: 80%;
  }

  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 2vw !important;
    font-weight: bold;
    text-align: right;
    padding-right: 3vw;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .contact-us-title {
    text-align: center;
    font-size: 2.5vw;
    color: #da2400;
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
    font-size: 2.5vw;
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
    font-size: 1.2vw;
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


<!-- CONTENT -->
@section('content')

<!-- COVEER -->

<div class="cover">
  <img src="{{url('asset/home/aboutus-cover.png')}}" class='img-cover' />
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
        <img src="{{url('asset/home/aboutus-tk1.png')}}" alt="arrow" class="tk1">
        <img src="{{url('asset/home/aboutus-tk2.png')}}" alt="arrow" class="tk2">
      </div>
      <div class="take-a-look-text">
        <p>IF IT'S NOT FUN, <br>
          YOU'RE NOT DOING IT RIGHT !</p>
      </div>
    </div>
  </div>
  <div class="orange-rec-tk"></div>
</div>

<!-- TAKE A LOOK QUOTE -->

<h1 class="title">We make having fun much easier</h1>
<div class="deco-aboutus">
  <div class="tk-quote-aboutus">
    <p>Most of our best memories are when we’re having fun or succeeding an important or meaningful event. We all had
      that
      day when we wanted to play a match and didn’t find enough players, wanted to plan a surprise birthday party for a
      precious person but struggle finding the suitable place and the needed equipment, had that urge to do something
      fun
      still you can’t decide what to do exactly. In order to honor these valuable moments, make it much easier to enjoy
      life and achieve our events, for the ones who don’t have enough friends to practice an activity, for the others
      who
      are new In a city and want to have fun while having good company. <br> We created <span class="zho">ZHO</span> an
      applied
      name website where all
      your needs are brought to light.</p>
    <img src="{{url('svg/aboutus-deco1.svg')}}" alt="deco" class="deco1">
    <img src="{{url('svg/aboutus-deco1.svg')}}" alt="deco" class="deco3">
  </div>
</div>

<hr>

<!-- CONTACT US -->

<div class="w90">
  <div class="contact-us">
    <div class="contact-us-text">
      <p>You want to know more ! Feel free to</p>
    </div>
    <div>
      <!-- Trigger/Open Contact us -->
      <button id="contact-us-btn">Reach out to us</button>
    </div>
  </div>
</div>

<div id="myModal" class="modal">
  <form action="{{ route('message.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3 class="contact-us-title">Unleash your thoughts !</h3>
      @if (Auth::check())
      <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id">
      @endif
      <div>
        <p class="contact-us-input-title">Name</p>
        <input type="text" class="contact-us-input" placeholder="Enter your Name..." name="name">
      </div>
      <div>
        <p class="contact-us-input-title">Email</p>
        <input type="text" class="contact-us-input" placeholder="Enter your Email..." name="email">
      </div>
      <div>
        <p class="contact-us-input-title">Your message</p>
        <textarea class="contact-us-input" placeholder="Feel free..." name="message"></textarea>
      </div>
      <button class="contact-us-btn" type="submit">Send</button>
    </div>
  </form>
</div>

<!-- HAVE A CLOSER LOOK -->

<h1 class="title">Have a closer look</h1>
<div class="w90">
  <div class="closer-look">
    @foreach ($companys as $company)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('favorite.company', $company->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <img src="{{url('svg/heart.svg')}}" alt="heart" class="heart">
        <button class="heart" style="height: 2.1vw;opacity: 0%;"></button>
      </form>
      <img src="/images/company/{{$company->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Company</h3>
      <h3 class="card-title">{{ $company->title }}</h3>
      <p class="price">{{ $company->price }} <span style="color: black;">DHs</span></p>
      @if($company->user()->first()->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-company.show', $company->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach 
  </div>
</div>

<!-- SCRIPT -->

<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("contact-us-btn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function () {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

@endsection
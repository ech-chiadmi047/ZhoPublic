@extends('layouts.app.dashboard')

<head>
  <script src="path/to/chartjs/dist/Chart.js"></script>
</head>
<style>
  /* EMPTY */

  .dash-global {
    width: 27%;
    display: block;
    margin: auto;
    position: relative;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    height: 8vw;
    border-radius: 0.7vw;
  }

  .dash-global h4 {
    text-align: right;
    padding-right: 1vw;
    padding-top: 1vw;
    text-decoration: overline;
    color: #da2400;
  }

  .post-dash {
    width: 4vw;
    position: absolute;
    left: 1vw;
    top: -2vw;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    background-color: white;
    border: 0.2vw solid #da2400;
    border-radius: 0.7vw;
    padding: 0.2vw;
  }

  .dash-flex {
    display: flex;
    justify-content: space-between;
    margin-top: 5vw;
  }

  .counter {
    text-align: center;
    letter-spacing: 0.1vw;
    font-size: 2.4vw !important;
  }

  /* BY TYPE */

  .dash-global-type {
    width: 14%;
    display: block;
    margin: auto;
    position: relative;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    height: 8vw;
    border-radius: 0.7vw;
  }

  .dash-global-type h5 {
    text-align: right;
    padding-right: 0.7vw;
    padding-top: 0.7vw;
    text-decoration: overline;
    color: #03004d;
  }

  .type-dash {
    width: 3vw;
    position: absolute;
    left: 0.7vw;
    top: -1.5vw;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    background-color: white;
    border: 0.2vw solid #03004d;
    border-radius: 0.7vw;
    padding: 0.3vw;
  }

  /* W90 */

  .w90 {
    margin-bottom: 10vw;
  }
</style>


@section('content')
<!--  -->
<h1 class="title">Dashboard</h1>
<div class="w90">
  <div class="dash-flex">
    <div class="dash-global">
      <img src="{{url('svg/company-post.svg')}}" alt="heart" class="post-dash">
      <h4>Company</h4>
      <div class="counter" data-target="{{ $company }}"></div>
    </div>
    <div class="dash-global">
      <img src="{{url('svg/place-post.svg')}}" alt="heart" class="post-dash">
      <h4>Place</h4>
      <div class="counter" data-target="{{ $company }}"></div>
    </div>
    <div class="dash-global">
      <img src="{{url('svg/equipment-post.svg')}}" alt="heart" class="post-dash">
      <h4>Equipment</h4>
      <div class="counter" data-target="{{ $equipment }}"></div>
    </div>
  </div>
  <div class="dash-flex">
    <div class="dash-global">
      <img src="{{url('svg/suggestion-post.svg')}}" alt="heart" class="post-dash">
      <h4>Suggestion</h4>
      <div class="counter" data-target="{{ $suggestion }}"></div>
    </div>
    <div class="dash-global">
      <img src="{{url('svg/entertainment-post.svg')}}" alt="heart" class="post-dash">
      <h4>Entertainment</h4>
      <div class="counter" data-target="{{ $entertainment }}"></div>
    </div>
    <div class="dash-global">
      <img src="{{url('svg/catering-post.svg')}}" alt="heart" class="post-dash">
      <h4>Catering</h4>
      <div class="counter" data-target="{{ $catering }}"></div>
    </div>
  </div>
  <!-- POSTS BY TYPE -->
  <br><br>
  <h1 style="color: #8b8c8b;">Posts by type</h1>
  <div class="dash-flex">
    <div class="dash-global-type">
      <img src="{{url('svg/sport.svg')}}" alt="heart" class="type-dash">
      <h5>Sport</h5>
      <div class="counter" data-target="{{ $Sport }}"></div>
    </div>
    <div class="dash-global-type">
      <img src="{{url('svg/party.svg')}}" alt="heart" class="type-dash">
      <h5>Party</h5>
      <div class="counter" data-target="{{ $Party }}"></div>
    </div>
    <div class="dash-global-type">
      <img src="{{url('svg/wedding.svg')}}" alt="heart" class="type-dash">
      <h5>Wedding</h5>
      <div class="counter" data-target="{{ $Wedding }}"></div>
    </div>
    <div class="dash-global-type">
      <img src="{{url('svg/music.svg')}}" alt="heart" class="type-dash">
      <h5>Music</h5>
      <div class="counter" data-target="{{ $Music }}"></div>
    </div>
    <div class="dash-global-type">
      <img src="{{url('svg/class.svg')}}" alt="heart" class="type-dash">
      <h5>Workshop/Class</h5>
      <div class="counter" data-target="{{ $Class }}"></div>
    </div>
  </div>
  <div class="dash-flex">
    <div class="dash-global-type">
      <img src="{{url('svg/conference.svg')}}" alt="heart" class="type-dash">
      <h5>Conference</h5>
      <div class="counter" data-target="{{ $Conference }}"></div>
    </div>
    <div class="dash-global-type">
      <img src="{{url('svg/birthday.svg')}}" alt="heart" class="type-dash">
      <h5>Birthday</h5>
      <div class="counter" data-target="{{ $Birthday }}"></div>
    </div>
    <div class="dash-global-type">
      <img src="{{url('svg/art.svg')}}" alt="heart" class="type-dash">
      <h5>Art</h5>
      <div class="counter" data-target="{{ $Art }}"></div>
    </div>
    <div class="dash-global-type">
      <img src="{{url('svg/trip.svg')}}" alt="heart" class="type-dash">
      <h5>Trip</h5>
      <div class="counter" data-target="{{ $Trip }}"></div>
    </div>
    <div class="dash-global-type">
      <img src="{{url('svg/tour.svg')}}" alt="heart" class="type-dash">
      <h5>Guided tour</h5>
      <div class="counter" data-target="{{ $Tour }}"></div>
    </div>
  </div>
  <!-- ------ -->
  <!-- Comments and messages verified users -->
  <br><br>
  <h1 style="color: #8b8c8b;">Comments, messages and verified users</h1>
  <div class="dash-flex">
    <div class="dash-global">
      <img src="{{url('svg/comment.svg')}}" alt="heart" class="post-dash">
      <h4>Comments</h4>
      <div class="counter" data-target="{{ $comment }}"></div>
    </div>
    <div class="dash-global">
      <img src="{{url('svg/message.svg')}}" alt="heart" class="post-dash">
      <h4>Messages</h4>
      <div class="counter" data-target="{{ $message }}"></div>
    </div>
    <div class="dash-global">
      <img src="{{url('svg/verified-user.svg')}}" alt="heart" class="post-dash">
      <h4>Verified users</h4>
      <div class="counter" data-target="{{ $user }}"></div>
    </div>
  </div>
  <!-- ---------- -->

  <!-- CHARTS ------------------------------------------------------------------------------------------------------------->
  
  <!-- ----------------------------------------------------------------------------------------------------------------- -->
</div>
<!--  -->


<script>
  const counters = document.querySelectorAll(".counter");

  counters.forEach((counter) => {
    counter.innerText = "0";
    const updateCounter = () => {
      const target = +counter.getAttribute("data-target");
      const count = +counter.innerText;
      const increment = target / 600;
      if (count < target) {
        counter.innerText = `${Math.ceil(count + increment)}`;
        setTimeout(updateCounter, 0.1);
      } else counter.innerText = target;
    };
    updateCounter();
  });

</script>

@endsection
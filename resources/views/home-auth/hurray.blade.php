@extends('layouts.app.form')
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
  .auth-form {
    width: 60% !important;
  }

  .textcontainer {
    padding: 7vw 0;
    text-align: center;
  }

  .particletext {
    text-align: center;
    font-size: 6vw;
    position: relative;
    color: #8b8c8b;
  }

  
 
  body .particletext.confetti>.particle {
    opacity: 0;
    position: absolute;
    -webkit-animation: confetti 3s ease-in infinite;
    animation: confetti 3s ease-in infinite;
  }

  body .particletext.confetti>.particle.c1 {
    background-color: rgb(3, 0, 77,0.5);
  }

  body .particletext.confetti>.particle.c2 {
    background-color: rgb(218, 36, 0,0.5);
  }

  @-webkit-keyframes confetti {
    0% {
      opacity: 0;
      transform: translateY(0%) rotate(0deg);
    }

    10% {
      opacity: 1;
    }

    35% {
      transform: translateY(-800%) rotate(270deg);
    }

    80% {
      opacity: 1;
    }

    100% {
      opacity: 0;
      transform: translateY(2000%) rotate(1440deg);
    }
  }

  @keyframes confetti {
    0% {
      opacity: 0;
      transform: translateY(0%) rotate(0deg);
    }

    10% {
      opacity: 1;
    }

    35% {
      transform: translateY(-800%) rotate(270deg);
    }

    80% {
      opacity: 1;
    }

    100% {
      opacity: 0;
      transform: translateY(2000%) rotate(1440deg);
    }
  }

</style>
</head>

@section('content')

<div class="form-flex-column">
  <div class="textcontainer">
    <span class="particletext confetti">HURRAAAY ! YOU DID IT !
    </span>
 </div>
</div>

<script>
  function initparticles() {
    confetti();
  }

  /*The measurements are ... whack (so to say), for more general text usage I would generate different sized particles for the size of text; consider this pen a POC*/


  function confetti() {
    $.each($(".particletext.confetti"), function () {
      var confetticount = ($(this).width() / 50) * 10;
      for (var i = 0; i <= confetticount; i++) {
        $(this).append('<span class="particle c' + $.rnd(1, 2) + '" style="top:' + $.rnd(10, 50) + '%; left:' + $.rnd(0, 100) + '%;width:' + $.rnd(6, 8) + 'px; height:' + $.rnd(3, 4) + 'px;animation-delay: ' + ($.rnd(0, 30) / 10) + 's;"></span>');
      }
    });
  }

  jQuery.rnd = function (m, n) {
    m = parseInt(m);
    n = parseInt(n);
    return Math.floor(Math.random() * (n - m + 1)) + m;
  }

  initparticles();


</script>

@endsection
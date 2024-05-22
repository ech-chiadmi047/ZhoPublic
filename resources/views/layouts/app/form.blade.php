<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    @font-face {
      font-family: 'steelfish' !important;
      src: url('/fonts/steelfish bd.otf') format('otf') !important;
      font-style: normal !important;
      font-weight: normal !important;
    }



    body {
      margin: 0;
      font-family: steelfish, Arial, Helvetica, sans-serif !important;
    }

    h1 {
      font-size: 3.5vw;
    }

    a {
      text-decoration: none !important;
    }

    .w90 {
      width: 90%;
      display: block;
      margin: auto;
    }

    /* ACTIVITIES DECO */

    .top-left {
      width: 10vw;
      position: absolute;
      top: 0;
      left: 0;
    }

    .top-right {
      width: 10vw;
      position: absolute;
      top: 0;
      right: 0;
    }

    .bottom-left {
      height: 10vw;
      position: absolute;
      bottom: 0;
      left: 0;
    }

    .bottom-right {
      height: 10vw;
      position: absolute;
      bottom: 0;
      right: 0;
    }

    /* AUTH QUOTE */

    /* DEMO-SPECIFIC STYLES */
    .auth-quote {
      color: #03004d;
      text-align: center;
      overflow: hidden;
      /* The typwriter cursor */
      white-space: nowrap;
      /* Keeps the content on a single line */
      margin: 0 auto;
      /* Gives that scrolling effect as the typing happens */
      letter-spacing: .12em;
      /* Adjust as needed */
      animation:
        typing 3.5s steps(30, end),
        blink-caret .5s step-end infinite;
    }

    /* The typing effect */
    @keyframes typing {
      from {
        width: 0
      }

      to {
        width: 100%
      }
    }

    /* The typewriter cursor effect */
    @keyframes blink-caret {

      from,
      to {
        border-color: transparent
      }

      50% {
        border-color: orange
      }
    }

    /* AUTH LOGO */

    .auth-logo {
      width: 6vw;
      position: absolute;
      bottom: 0.3vw;
      left: 50%;
      -ms-transform: translate(-50%);
      transform: translate(-50%);
    }

    .auth-logo:hover {
      bottom: 0.9vw;
    }

    /* AUTH FORM */

    .form-title {
      font-size: 2.5vw;
      text-align: center;
      color: #da2400;
    }

    .auth-form {
      width: 45%;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      border-left: 0.5vw solid #03004d;
      border-right: 0.5vw solid #da2400;
    }

    .form-flex-column {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .inputs {
      width: 60%;
      display: block;
      margin: auto;
      margin-bottom: 1.5vw;
    }

    .inputs p {
      font-size: 1.3vw;
      color: #03004d;
      margin: 0;
      margin-bottom: 0.3vw;
    }

    input,
    select {
      font-size: 1.2vw;
      font-family: steelfish, Arial, Helvetica, sans-serif;
      height: 2.4vw;
      width: 100%;
    }

    ::placeholder {
      font-size: 1.2vw;
    }

    input:focus {
      background-color: white !important;
    }

    .form-links {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-top: 3vw;
    }

    h4 {
      font-size: 1.5vw;
    }

    .link-orange {
      color: #da2400;
    }

    .link-blue {
      color: #03004d;
    }

    .link-blue:hover {
      font-size: 1.6vw;
    }

    .links-btn {
      background-color: #03004d;
      border: 0.2vw solid #03004d;
      color: white;
      font-size: 1.4vw;
      width: 6vw;
      -webkit-box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
      -moz-box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
      box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
      cursor: pointer;
    }

    .links-btn:hover {
      background-color: transparent;
      color: #03004d;
    }

    input:-webkit-autofill {
      box-shadow: 0 0 0 9999px #fff inset;
    }

    /* RESPONSIVE */

    @media screen and (max-width: 600px) {
      .auth-form {
        width: 90%;
      }
    }

    /* FILL OUR FORM */

    .profile-img {
      width: 100%;
      height: 7vw;
      border: 0.1vw solid #CED4D9;
      border-radius: 0.5vw;
      position: relative;
    }

    .profile-img label svg,
    input.file {
      position: absolute;
      width: 2vw;
      left: 50%;
      top: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      cursor: pointer;
    }

    .profile-img label svg:hover path {
      fill: #da2400;
    }

    .perso-info {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      margin-top: 2vw;

    }

    .info-left {
      width: 30%;
    }

    .info-right {
      width: 70%;
    }

    .block {
      display: block;
      margin: auto;
    }

    .info {
      width: 85%;
      display: block;
      margin: auto;
    }

    .contact {
      font-size: 1.3vw;
      color: #03004d;
      margin-bottom: 1vw !important;
      width: 88%;
      display: block;
      margin: auto;
    }

    .inputs-contact {
      width: 88%;
      display: block;
      margin: auto;
      margin-bottom: 1.5vw;
    }

    /* PREFERENCES */

    .preferences-flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 2vw;
    }

    .preferences-block {
      display: block;
      width: 90%;
      margin: auto;
      margin-top: 2vw;
    }

    .preference {
      width: 10vw;
      height: 10vw;
      background-color: white;
      border: 0.4vw solid #CED4D9;
      position: relative;
      border-radius: 1vw;
    }

    .preference:hover {
      border-color: #da2400;
      transform: scale(1.06);
      cursor: grabbing;
    }

    .preference-detail {
      position: absolute;
      left: 50%;
      top: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    .preference-detail h5 {
      font-size: 1.5vw;
      margin-top: 0.5vw;
    }

    .preference-detail h6 {
      font-size: 1.25vw;
      margin-top: 0.5vw;
    }

    .preference-detail svg {
      width: 3vw;
      height: 3vw;
      margin-bottom: 0.2vw;
      display: block;
      margin: auto;
    }

    .preference-detail svg path {
      fill: #03004d;
      stroke: #03004d;
    }

    .preference-detail h5 {
      text-align: center;
      color: #03004d;
    }

    .preference-detail h6 {
      text-align: center;
      color: #03004d;
    }

    select,
    input,
    option {
      height: 3vw !important;
      font-size: 1vw !important;
    }

    @media screen and (max-width: 600px) {
      .auth-form {
        width: 90% !important;
      }
    }
  </style>
</head>

<body>

  <!-- ACTIVITIES DECO -->
  <img src="{{url('asset/home/top-left.png')}}" class='top-left' />
  <img src="{{url('asset/home/top-right.png')}}" class='top-right' />
  <img src="{{url('asset/home/bottom-left.png')}}" class='bottom-left' />
  <img src="{{url('asset/home/bottom-right.png')}}" class='bottom-right' />
  <!-- AUTH QUOTE -->
  <h1 class="auth-quote">THIS IS WHERE THE FUN BEGINS !</h1>
  <!-- AUTH LOGO -->
  <a href="{{ route('ALL') }}"><img src="{{url('asset/home/zho-logo.png')}}" class='auth-logo' /></a>
  <!-- AUTH FORM -->
  <div class="auth-form">
    @yield('content')
  </div>
  </div>
</body>

<!-- SCRIPT -->
<script>
  $('input[type="checkbox"]').on('change', function () {
    $(this).siblings('input[type="checkbox"]').prop('checked', false);
  });
</script>

</html>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js">
  </script>
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

    .sidenav {
      height: 100%;
      width: 10vw;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 0.4vw;
      padding-bottom: 2vw;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }



    .sidenav a {
      padding: 0.5vw;
      text-decoration: none;
      font-size: 1.5vw;
      color: #03004d;
      display: block;
      border-bottom: 0.4vw solid transparent;
      border-top: 0.35vw solid transparent;
      border-left: 0.35vw solid #03004d;
      margin-bottom: 0.5vw;
    }

    .sidenav a svg {
      width: 2.7vw;
    }

    .sidenav a svg {
      stroke: #03004d;
    }

    .icon svg,
    .text {
      vertical-align: middle;
      display: inline-block;
      margin: 0;
    }

    .active {
      color: #da2400 !important;
      border-left: 0.35vw solid #da2400 !important;
    }

    .active svg path {
      stroke: #da2400 !important;
      fill: none;
    }

    .sidenav a:hover svg path {
      stroke: #da2400 !important;
    }

    .main {
      margin-left: 12vw;
    }

    /* LOGO */

    .logo {
      width: 7vw;
      display: block;
      margin: auto;
      margin-bottom: 4.5vw;
      padding: 1vw;
      border-bottom: 0.2vw solid #E6E6E6;
    }

    /* SEARCH BAR */

    .search-bar {
      background-color: white;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1vw;
    }

    .search-icon {
      width: 2vw;
      display: block;
      margin: auto;
    }

    .search-inputs form {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
    }

    .input-group-text {
      background-color: white;
      color: #03004d;
      font-size: 1vw;
      height: 3vw !important;
    }

    select:focus,
    input:focus {
      outline: 0.1vw solid #03004d !important;
      box-shadow: none;
    }

    .input-group {
      width: 15vw !important;
      height: 3vw !important;
      padding: 0.5vw;
    }

    select,
    input,
    option {
      height: 3vw !important;
      font-size: 1vw !important;
    }

    ::placeholder,
    select option {
      font-size: 1vw !important;
    }

    .search-btn button {
      background-color: transparent;
      border: 0.2vw solid #da2400;
      border-radius: 2vw;
      color: #da2400;
      width: 7vw;
      font-size: 1.2vw;
      display: block;
      margin: auto;
    }

    .search-btn button:hover {
      background-color: #da2400;
      border: 0.2vw solid #da2400;
      color: white;
      cursor: pointer;
    }

    .custom-select {
      font-size: 1vw;
      background-size: 0.6vw;
    }

    .search-margin {
      margin-left: 11vw;
    }

    @media screen and (max-width: 600px) {
      .search-bar {
        display: block;
        margin: auto;
      }

      .search-inputs form {
        display: block;
        width: 100% !important;
      }

      .input-group {
        width: 90% !important;
        height: 3vw !important;
        padding: 0.5vw;
        margin: auto;
        margin-top: 1vw;
        margin-bottom: 1vw;
      }

      .search-icon {
        display: none;
      }
    }

    /* CONTENT */

    .title {
      text-align: right;
      padding-right: 1vw;
      font-size: 4vw;
      color: #03004d;
    }

    /* PROFILE */

    .profile-width {
      display: block;
      width: 90%;
      margin: auto;
      margin-top: 2vw !important;
      margin-bottom: 5vw !important;
    }

    .profile-global {
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
    }

    .profile-left-global {
      width: 25%;
      position: sticky;
      top: 1vw;
    }

    .profile-left {
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
      padding: 1vw;
      width: 100%;
    }

    .profile-right {
      width: 70%;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    .profile-image {
      width: 13vw;
      height: 13vw;
      display: block;
      margin: auto;
      position: relative;
    }

    .profile-image-img {
      width: 10vw;
      height: 10vw;
      border-radius: 50%;
      display: block;
      margin: auto;
      object-fit: cover;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    .edit-img {
      width: 3vw;
      height: 3vw;
      position: absolute;
      top: 1vw;
      right: 1vw;
      cursor: pointer;
      background-color: rgb(255, 255, 255, 0.9);
      border-radius: 50%;
      border: 0.2vw solid #da2400;
    }

    .edit-img:hover {
      transform: scale(1.1);
    }

    input.profile-name {
      display: block;
      margin: auto;
      font-size: 1.6vw !important;
      padding: 0.2vw;
      margin-bottom: 0.5vw;
      text-align: center;
      border: 0.1vw solid #E6E6E6 !important;
      border-radius: 1vw;
    }

    .profile-right h3 {
      font-size: 2.5vw !important;
      text-align: center;
      padding: 1.5vw;
      color: #da2400;
    }

    hr {
      margin-top: 0.7vw !important;
      margin-bottom: 0.7vw !important;
      margin-left: 0 !important;
      margin-right: 0 !important;
    }

    .profile-desc {
      padding-left: 1.5vw;
      padding-right: 1.5vw;
      font-size: 1.5vw;
    }

    .profile-contact {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-left: 1.5vw;
      padding-right: 1.5vw;
    }

    .icon-profile {
      width: 3vw;
    }

    .profile-contact div p {
      font-size: 1.5vw;
      margin: 0 !important;
    }

    .profile-contact div {
      display: flex;
      align-items: center;
    }

    textarea.profile-desc {
      width: 100%;
      border: none !important;
    }

    textarea.profile-desc:focus {
      outline: none !important;
      border: none !important;
    }

    .profile-email {
      width: fit-content;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: space-around;
    }

    .profile-email p {
      margin: 0 !important;
      font-size: 1.5vw;
    }

    .profile-email .icon-profile {
      width: 4vw;
    }

    .profile-desc input[type=number] {
      font-size: 1.5vw !important;
      border: none !important;
      padding-left: 0.3vw;
    }

    .profile-desc input[type=text] {
      font-size: 1.5vw !important;
      border: none !important;
      width: fit-content !important;
      text-align: right;
    }

    .profile-desc select {
      font-size: 1.5vw !important;
      border: none !important;
      width: 20vw;
      padding-left: 0.3vw;
    }

    /* MY POSTS */

    .closer-look {
      margin-bottom: 4vw;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-column-gap: 1vw;
      grid-row-gap: 1vw;
      margin-top: 3vw;
    }

    .card {
      display: block;
      margin: auto;
      position: relative;
      width: 90%;
      margin-bottom: 1vw;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    .img-card {
      width: 100%;
      height: 22vw;
      object-fit: cover;
    }

    .card h3 {
      font-size: 2.6vw !important;
    }

    .card-type {
      color: #da2400;
      padding-left: 1vw;
    }

    .card-title {
      color: black;
      text-align: center;
    }

    .price {
      text-align: center;
      color: #4fa154;
      font-size: 2vw;
    }

    .card-btn {
      float: left;
      background-color: transparent;
      color: black;
      padding-right: 2.5vw;
      padding-left: 2.5vw;
      font-size: 1.4vw;
      height: 2.9vw;
      width: 33.33%;
      cursor: pointer;
      margin-top: 1vw;
      box-shadow: #E6E6E6 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
      border: none;
    }

    .card-btn:hover {
      background-color: #8b8c8b;
      font-size: 1.5vw;
      color: white;
    }

    .w90 {
      width: 97.5%;
      display: block;
    }

    .edit-post:hover {
      background-color: #03004d !important;
      color: white;
    }

    .delete-post:hover {
      background-color: #ED2B2A !important;
      color: white;
    }

    /* MY MESSAGES */

    .message-box {
      width: 100%;
      padding: 0.5vw;
      border-radius: 1vw;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
      background-color: white;
    }

    .message-bubble {
      margin-top: 4vw;
      position: relative;
    }

    .message-box p {
      font-size: 1.2vw;
      margin: 0 !important;
      text-align: center;
    }

    .message-time-text {
      font-size: 0.8vw;
      color: #8b8c8b;
      margin-bottom: 0 !important;
      margin-left: 0.3vw;
    }

    .time-img {
      width: 1vw;
      height: 1vw;
      display: block;
      margin: auto;
    }

    .message-time {
      display: flex;
      justify-items: center;
    }

    .bubble {
      display: flex;
      flex-direction: column;
      position: absolute;
      right: 0;
      bottom: -1.5vw;
      z-index: -10;
    }

    .first-bubble {
      width: 1.5vw;
      height: 1.5vw;
      border-radius: 50%;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    .second-bubble {
      width: 1vw;
      height: 1vw;
      border-radius: 50%;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
      margin-left: 1.2vw;
      margin-top: -0.5vw;
    }

    .message-user{
      width:3.5vw;
      height: 3.5vw;
      object-fit: cover;
      border-radius: 50%;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    /* WISHLIST */

    .heart {
      position: absolute;
      top: 0.7vw;
      right: 0.4vw;
      width: 2.4vw;
      filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.5));
      cursor: pointer;
    }

    .heart:hover {
      transform: scale(1.1);
    }

    .verify {
      position: absolute;
      bottom: 0.4vw;
      left: 1vw;
      height: 2vw;
    }
  </style>
</head>

<body>


  <!-- SIDE NAV -->
  @include('layouts.auth.sidenav')
  <!-- -------- -->
  <div class="search-margin">
    <div class="search-bar">
      <div>
        <img src="{{url('svg/search.svg')}}" class='search-icon' />
      </div>
      <div class="search-inputs">
        <form action="{{ route('search') }}" method="GET">
          <!-- WHAT ARE YOU LOOKING FOR -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Looking for</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="post">
              <option value="Company" selected>Company</option>
              <option value="Catering">Catering</option>
              <option value="Entertainment">Entertainment</option>
              <option value="Equipment">Equipment</option>
              <option value="Place">Place</option>
              <option value="Suggestion">Suggestion</option>
            </select>
          </div>
          <!-- SEARCH BY CITY -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">City</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="location">
              <option value="" disabled selected hidden>Where...</option>
              <option value="Rabat">Rabat</option>
              <option value="Casablanca">Casablanca</option>
              <option value="Essaouira">Essaouira</option>
              <option value="Agadir">Agadir</option>
              <option value="Marrakesh">Marrakesh</option>
              <option value="Oujda">Oujda</option>
              <option value="Dakhla">Dakhla</option>
              <option value="Al Hoceima">Al Hoceima</option>
              <option value="Tangier">Tangier</option>
              <option value="Ifrane">Ifrane</option>
            </select>
          </div>
          <!-- SEARCH BY TYPE -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Type</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="type">
              <option value="" disabled selected hidden>What...</option>
              <option value="Sport">Sport</option>
              <option value="Art">Art</option>
              <option value="Party">Party</option>
              <option value="Wedding">Wedding</option>
              <option value="Birthday">Birthday</option>
              <option value="Music">Music</option>
              <option value="Worshop or Class">Worshop or Class</option>
              <option value="Conference">Conference</option>
              <option value="Trip">Trip</option>
              <option value="Guided tour">Guided tour</option>
            </select>
          </div>
          <!-- SEARCH BY PRICE -->
          <div class="input-group  mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Price</span>
            </div>
            <input type="number" class="form-control" placeholder="Min price" name="min_price">
            <input type="number" class="form-control" placeholder="Max price" name="max_price">
          </div>
      </div>
      <div class="search-btn">
        <button type="submit">Search</button>
      </div>
      </form>
    </div>
  </div>

  <div class="main">
    <!--  -->
    @yield('content')
    <!--  -->
  </div>
  @if (session('success'))
@include('layouts.auth.alert')
@endif 
</body>

<script type="text/javascript">
  $('#autoresizing').on('input', function () {
    this.style.height = 'auto';

    this.style.height =
      (this.scrollHeight) + 'px';
  });
</script>

</html>
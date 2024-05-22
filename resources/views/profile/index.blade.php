@extends('layouts.app.dashboard')



@section('sidenav')
<div class="sidenav-bg">
  <a href="#about">
    <span class="icon">
      <!-- ICON -->
      <svg viewBox="0 0 1000 1000" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #03004d;
                stroke-linecap: round;
                stroke-miterlimit: 10;
                stroke-width: 22px;
              }
            </style>
          </defs>
          <path class="cls-1"
            d="M540.53,785.06H774.66c7.7,0,14-5.51,14-12.24V465.92c0-6.74-6.3-12.25-14-12.25H540.53c-7.7,0-14,5.51-14,12.25V721.76">
          </path>
          <rect class="cls-1" height="191.23" rx="12" width="262.13" x="211.34" y="593.84"></rect>
          <path class="cls-1"
            d="M459.47,546.33H225.34c-7.7,0-14-5.51-14-12.25V227.18c0-6.73,6.3-12.24,14-12.24H459.47c7.7,0,14,5.51,14,12.24V483">
          </path>
          <rect class="cls-1" height="191.23" rx="12" transform="translate(1315.19 621.1) rotate(-180)" width="262.13"
            x="526.53" y="214.94"></rect>
        </g>
      </svg>
      <!--  -->
    </span>
    <span class="text">Dashboard</span>
  </a>
  <a href="#services" class="active">
    <span class="icon">
      <!-- ICON -->
      <svg viewBox="0 0 1000 1000" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #020202;
                stroke-linecap: round;
                stroke-miterlimit: 10;
                stroke-width: 22px;
              }
            </style>
          </defs>
          <path class="cls-1"
            d="M815.37,529.09V470.91a16.94,16.94,0,0,0-15.23-16.85l-66.09-6.7a17,17,0,0,1-14.57-12.18,227.26,227.26,0,0,0-17.57-42.89,17,17,0,0,1,1.83-18.92l42.42-51.13a16.94,16.94,0,0,0-1-22.7l-40.8-41.47a17,17,0,0,0-22.68-1.33l-51.82,41.6A17,17,0,0,1,611,299.88a227.46,227.46,0,0,0-46.18-19.37A17,17,0,0,1,552.64,266l-6.7-66.1a16.94,16.94,0,0,0-16.85-15.23H470.91a16.94,16.94,0,0,0-16.85,15.23l-6.7,66.1a17,17,0,0,1-12.15,14.55A227.46,227.46,0,0,0,389,299.88a17,17,0,0,1-18.92-1.54l-51.82-41.6a17,17,0,0,0-22.68,1.33l-40.8,41.47a16.94,16.94,0,0,0-1,22.7l42.42,51.13a17,17,0,0,1,1.83,18.92,227.26,227.26,0,0,0-17.57,42.89A17,17,0,0,1,266,447.36l-66.09,6.7a16.94,16.94,0,0,0-15.23,16.85v58.18a16.94,16.94,0,0,0,15.23,16.85l66.09,6.7a17,17,0,0,1,14.57,12.18,227.26,227.26,0,0,0,17.57,42.89,17,17,0,0,1-1.83,18.92l-42.42,51.13a16.94,16.94,0,0,0,1,22.7l40.8,41.47a17,17,0,0,0,22.68,1.33l51.82-41.6A17,17,0,0,1,389,700.12a227.46,227.46,0,0,0,46.18,19.37A17,17,0,0,1,447.36,734l6.7,66.1a16.94,16.94,0,0,0,16.85,15.23h58.18a16.94,16.94,0,0,0,16.85-15.23l6.7-66.1a17,17,0,0,1,12.15-14.55A227.46,227.46,0,0,0,611,700.12a17,17,0,0,1,18.92,1.54l51.82,41.6a17,17,0,0,0,22.68-1.33l40.8-41.47a16.94,16.94,0,0,0,1-22.7l-42.42-51.13a17,17,0,0,1-1.83-18.92,227.26,227.26,0,0,0,17.57-42.89,17,17,0,0,1,14.57-12.18l66.09-6.7A16.94,16.94,0,0,0,815.37,529.09Z">
          </path>
          <path class="cls-1" d="M386.2,554a126,126,0,0,0,227.6,0"></path>
          <path class="cls-1" d="M386.2,446a126,126,0,0,1,227.6,0"></path>
          <path class="cls-1" d="M433.42,534.91a72.13,72.13,0,1,0-2.13-65.68"></path>
        </g>
      </svg>
      <!--  -->
    </span>
    <span class="text">Profile</span>
  </a>
  <a href="#services">
    <span class="icon">
      <!-- ICON -->
      <svg viewBox="0 0 1000 1000" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #020202;
                stroke-linecap: round;
                stroke-miterlimit: 10;
                stroke-width: 22px;
              }
            </style>
          </defs>
          <path class="cls-1"
            d="M645,222.68H406.89c-28.66,0-51.89,22.93-51.89,51.21V615.62h-.19v159.9a1.79,1.79,0,0,0,3.1,1.22L497.19,626.87a3.84,3.84,0,0,1,5.62,0L642.09,776.74a1.79,1.79,0,0,0,3.1-1.22V615.62H645V366.91">
          </path>
        </g>
      </svg> <!--  -->
    </span>
    <span class="text">My wishlist</span>
  </a>
  <a href="#clients">
    <span class="icon">
      <!-- ICON -->
      <svg viewBox="0 0 1000 1000" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #020202;
                stroke-linecap: round;
                stroke-miterlimit: 10;
                stroke-width: 22px;
              }
            </style>
          </defs>
          <path class="cls-1"
            d="M719.57,416.61V323a15.31,15.31,0,0,0-15.31-15.32H295.74A15.31,15.31,0,0,0,280.43,323v78.26a15.31,15.31,0,0,0,15.31,15.32H609.27">
          </path>
          <line class="cls-1" x1="282.93" x2="717.07" y1="511.93" y2="511.93"></line>
          <line class="cls-1" x1="282.93" x2="717.07" y1="602.11" y2="602.11"></line>
          <line class="cls-1" x1="717.07" x2="600.9" y1="692.29" y2="692.29"></line>
          <line class="cls-1" x1="524.88" x2="282.93" y1="692.29" y2="692.29"></line>
        </g>
      </svg> <!--  -->
    </span>
    <span class="text">My posts</span>
  </a>
  <a href="#contact">
    <span class="icon">
      <!-- ICON -->
      <svg viewBox="0 0 1000 1000" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #020202;
                stroke-linecap: round;
                stroke-miterlimit: 10;
                stroke-width: 22px;
              }
            </style>
          </defs>
          <path class="cls-1"
            d="M797.36,616V332.13a52.2,52.2,0,0,0-52.05-52.05H254.69a52.2,52.2,0,0,0-52.05,52.05V667.87a52.2,52.2,0,0,0,52.05,52H797.36">
          </path>
          <path class="cls-1" d="M269,370.05,449.72,530.77a75.68,75.68,0,0,0,100.56,0L731,370.05"></path>
        </g>
      </svg> <!--  -->
    </span>
    <span class="text">My messages</span>
  </a>
  <a href="{{ route('ALL') }}">
    <span class="icon">
      <!-- ICON -->
      <svg viewBox="0 0 1000 1000" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #020202;
                stroke-linecap: round;
                stroke-miterlimit: 10;
                stroke-width: 22px;
              }
            </style>
          </defs>
          <path class="cls-1"
            d="M760.22,534.94c-24-95.71-131-157.47-252-141.83a.81.81,0,0,1-.91-.79v-67a.8.8,0,0,0-1.29-.63l-182,153a.81.81,0,0,0,0,1.27l182,153a.8.8,0,0,0,1.29-.64v-83a.82.82,0,0,1,.47-.73c55.74-26.47,115.28-30,160.54-4.06s66.16,75.16,62.2,130.94a.93.93,0,0,0,1.64.69C766.28,635.29,772.86,585.27,760.22,534.94Z">
          </path>
          <path class="cls-1" d="M416.09,324.7l-182,153a.8.8,0,0,0,0,1.27l182,153"></path>
        </g>
      </svg> <!--  -->
    </span>
    <span class="text">Go back</span>
  </a>
</div>
@endsection


@section('content')
<!--  -->
<h1 class="title">My profile</h1>
<form action="">
  @csrf
  <div class="profile-width">
    <div class="profile-global">
      <div class="profile-left">
        <div class="profile-image">
          <input type="file" name="image" style="display: none;" id="image"
            class="form-control @error('image') is-invalid @enderror">
          <label for="image">
            <img src="{{url('svg/editprofile.svg')}}" alt="" class="edit-img">
          </label>
          <img src="{{url('asset/home/rabat.png')}}" alt="" class="profile-image-img">
        </div>
        <input type="text" class="profile-name" value="Name">
      </div>
      <div class="profile-right">
        <h3>You can both check your profile and edit it !</h3>
        <!--  -->
        <hr>
        <!-- description -->
        <textarea class="profile-desc"
          id="autoresizing">Lorem ipsum dolor sit amet. 33 sint optio sed doloremque nihil eos rerum quibusdam dignissimos At nemo possimus et deleniti inventore! Vel totam quia qui laudantium quasi aut quam debitis eius.</textarea>
        <!--  -->
        <hr>
        <!-- location -->
        <p class="profile-desc">Age : <input type="number" value="18"></p>
        <!--  -->
        <hr>
        <!-- location -->
        <p class="profile-desc">Gender :
          <select>
            <option disabled selected hidden>Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Other">Other</option>
          </select>
        </p>
        <!--  -->
        <hr>
        <!-- contact -->
        <div class="profile-contact">
          <div>
            <img src="{{url('svg/fbauth.svg')}}" class='icon-profile' />
            <p class="profile-desc"><input type="text" value="facebook"></p>
          </div>
          <div>
            <img src="{{url('svg/wtsauth.svg')}}" class='icon-profile' />
            <p class="profile-desc"><input type="text" value="0642917719"></p>
          </div>
          <div>
            <img src="{{url('svg/instaauth.svg')}}" class='icon-profile' />
            <p class="profile-desc"><input type="text" value="instagram"></p>
          </div>
        </div>
        <div class="profile-email">
          <img src="{{url('svg/emailauth.svg')}}" class='icon-profile' />
          <p>Email@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</form>
<!--  -->
@endsection
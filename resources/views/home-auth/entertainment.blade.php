@extends('layouts.app.backoffice')




<!-- MENU -->
@section('menu')
<div class="menu-global">
  <div class="menu-left">
    <img src="{{url('asset/home/zho-logo.png')}}" class='logo' />
  </div>
  <div class="menu-right">
    <div class="topnav" id="myTopnav">
    <a href="{{ route('ALL') }}">All</a>
      <a href="{{ route('COMPANY') }}">Company</a>
      <a href="{{ route('PLACE') }}">Place</a>
      <a href="{{ route('EQUIPMENT') }}">Equipment</a>
      <a href="{{ route('SUGGESTION') }}">Suggestion</a>
      <a href="{{ route('ENTERTAINMENT') }}" class="active">Entertainment</a>
      <a href="{{ route('CATERING') }}">Catering</a>
      <a href="{{ route('ENTERTAINMENT-SUPPLIER') }}" class="become">Check as a Supplier</a>
      @guest
      @if (Route::has('login'))
      <a href="{{ route('login') }}">Sign in</a>
      @endif

      @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a>
      @endif
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>
 
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          @can('Admin')
          <a class="dropdown-item" href="{{ route('dashboard') }}">
            Dashboard
          </a>
          <a class="dropdown-item" href="{{ route('admin_verification') }}">
            Verifications
          </a>
          @endcan
          <a class="dropdown-item" href="{{ route('my_profile') }}">
            Profile
          </a>
          @can('Client')
          <a class="dropdown-item" href="{{ route('my_wishlist') }}">
            My wishlist
          </a>
          <a class="dropdown-item" href="{{ route('my_posts') }}">
            My posts
          </a>
          @endcan
          @can('Admin')
          <a class="dropdown-item" href="{{ route('all_posts') }}">
            All posts
          </a>
          <a class="dropdown-item" href="{{ route('all_messages') }}">
            All messages
          </a>
          @endcan
          @can('Client')
          <a class="dropdown-item" href="{{ route('contactus') }}">
            Contact us
          </a>
          <a class="dropdown-item" href="{{ route('my_messages') }}">
            My messages
          </a>
          @endcan
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>
        </div>
      </li>
      @endguest
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
</div>
@endsection
<!-- CONTENT -->
@section('content')

<!-- BIG TITLE -->

<div class='question'>
  <h1>HOW ?</h1>
</div>

<div class="answer">
  <h1>THE ANSWER IS HERE, LET THE FUN BEGIN !</h1>
</div>

<!-- FILTER -->
<div class='position-filter'>
  <button class="open-button-filter" onclick="openForm()">
    <span class="icon-filter">
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
          <path class="cls-1" d="M437.83,220.55c19.92-2,40.74-3,62.17-3,42.11,0,81.89,4.06,117.08,11.26"></path>
          <path class="cls-1"
            d="M711.55,261.55c30.76,17.35,48.88,38.64,48.88,61.64,0,58.36-116.6,105.67-260.43,105.67S239.57,381.55,239.57,323.19c0-36,44.29-67.74,112-86.82">
          </path>
          <line class="cls-1" x1="257.59" x2="467.1" y1="362.41" y2="657.31"></line>
          <line class="cls-1" x1="742.32" x2="532.81" y1="362.41" y2="657.31"></line>
          <polyline class="cls-1" points="533.23 656.73 532.27 782.49 466.17 742.46 467.08 657.29"></polyline>
        </g>
      </svg>
    </span>
    <span class="text-filter">
      Filter
    </span>
  </button>

  <div class="form-popup-filter" id="myForm-filter">
    <form action="{{ route('filter') }}" method="GET" class="form-container-filter">
      <h2 class="option-filter-title">OPTIONS :</h2>
      <hr>
      <div class="filter-flex">
        <div class="filter-cat">
          <h5 class="filter-title-small">What are you looking for ?</h5>
          <div class="checkboxes">
            <label for="company">
              <input type="checkbox" value="1" id="company" name="company" />
              <span>Company</span>
            </label>
          </div>
          <div class="checkboxes">
            <label for="place">
              <input type="checkbox" value="1" id="place" name="place" />
              <span>Place</span>
            </label>
          </div>
          <div class="checkboxes">
            <label for="equipment">
              <input type="checkbox" value="1" id="equipment" name="equipment" />
              <span>Equipment</span>
            </label>
          </div>
          <div class="checkboxes">
            <label for="suggestion">
              <input type="checkbox" value="1" id="suggestion" name="suggestion" />
              <span>Suggestion</span>
            </label>
          </div>
          <div class="checkboxes">
            <label for="entertainment">
              <input type="checkbox" value="1" id="entertainment" name="entertainment" />
              <span>Entertainment</span>
            </label>
          </div>
          <div class="checkboxes">
            <label for="catering">
              <input type="checkbox" value="1" id="catering" name="catering" />
              <span>Catering</span>
            </label>
          </div>
        </div>
        <div class="filter-cities">
          <h5 class="filter-title-small">Where ?</h5>
          <div class="checkbox-flex">
            <div>
              <div class="checkboxes">
                <label for="company">
                  <input type="checkbox" value="1" id="Rabat" name="Rabat" />
                  <span>Rabat</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="place">
                  <input type="checkbox" value="1" id="Casablanca" name="Casablanca" />
                  <span>Casablanca</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="equipment">
                  <input type="checkbox" value="1" id="Essaouira" name="Essaouira" />
                  <span>Essaouira</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Agadir">
                  <input type="checkbox" value="1" id="Agadir" name="Agadir" />
                  <span>Agadir</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Marrakesh">
                  <input type="checkbox" value="1" id="Marrakesh" name="Marrakesh" />
                  <span>Marrakesh</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Oujda">
                  <input type="checkbox" value="1" id="Oujda" name="Oujda" />
                  <span>Oujda</span>
                </label>
              </div>
            </div>
            <div>
              <div class="checkboxes">
                <label for="Dakhla">
                  <input type="checkbox" value="1" id="Dakhla" name="Dakhla" />
                  <span>Dakhla</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Al Hoceima">
                  <input type="checkbox" value="1" id="Al Hoceima" name="AlHoceima" />
                  <span>Al Hoceima</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Tangier">
                  <input type="checkbox" value="1" id="Tangier" name="Tangier" />
                  <span>Tangier</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Ifrane">
                  <input type="checkbox" value="1" id="Ifrane" name="Ifrane" />
                  <span>Ifrane</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="filter-types">
          <h5 class="filter-title-small">What type ?</h5>
          <div class="checkbox-flex">
            <div>
              <div class="checkboxes">
                <label for="Sport">
                  <input type="checkbox" value="1" id="Sport" name="Sport" />
                  <span>Sport</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Art">
                  <input type="checkbox" value="1" id="Art" name="Art" />
                  <span>Art</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Party">
                  <input type="checkbox" value="1" id="Party" name="Party" />
                  <span>Party</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Wedding">
                  <input type="checkbox" value="1" id="Wedding" name="Wedding" />
                  <span>Wedding</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Birthday">
                  <input type="checkbox" value="1" id="Birthday" name="Birthday" />
                  <span>Birthday</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Music">
                  <input type="checkbox" value="1" id="Music" name="Music" />
                  <span>Music</span>
                </label>
              </div>
            </div>
            <div>
              <div class="checkboxes">
                <label for="Worshop or Class">
                  <input type="checkbox" value="1" id="Worshop or Class" name="WorshoporClass" />
                  <span>Worshop or Class</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Conference">
                  <input type="checkbox" value="1" id="Conference" name="Conference" />
                  <span>Conference</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Trip">
                  <input type="checkbox" value="1" id="Trip" name="Trip" />
                  <span>Trip</span>
                </label>
              </div>
              <div class="checkboxes">
                <label for="Guided tour">
                  <input type="checkbox" value="1" id="Guided tour" name="Guidedtour" />
                  <span>Guided tour</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-float-height">
        <button type="submit" class="btn-filter">Filter</button>
        <button type="button" class="btn-filter cancel-filter" onclick="closeForm()">Close</button>
      </div>
    </form>
  </div>
</div>


<!-- POSTS -->

<div class="w90">
  <div class="closer-look">
  @foreach ($entertainments as $entertainment)
    <!-- CARD -->
    <div class="card">
      <form action="{{ route('favorite.entertainment', $entertainment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <img src="{{url('svg/heart.svg')}}" alt="heart" class="heart">
        <button class="heart" style="height: 2.1vw;opacity: 0%;"></button>
      </form>
      <img src="/images/entertainment/{{$entertainment->images()->first()->image}}" class='img-card' />
      <h3 class="card-type">Entertainment</h3>
      <h3 class="card-title">{{ $entertainment->title }}</h3>
      <p class="price">{{ $entertainment->price }} <span style="color: black;">DHs</span></p>
      @if($entertainment->user()->first()->verified == 1)
      <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verify">
      @endif
      <a href="{{ route('zho-entertainment.show', $entertainment->id)}}"><button class="card-btn">More details</button></a>
    </div>
    @endforeach
  </div>




</div>


@endsection
@extends('layouts.app.backoffice')

<style>
  .post-details-width {
    width: 90%;
    margin: auto;
    margin-top: 2vw;
    margin-bottom: 4vw;
  }

  .post-details-global {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
  }

  .post-details-left {
    position: sticky;
    top: 2vw;
    width: 40%;
  }

  .post-details-right {
    width: 55%;
    background-color: white;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    padding-bottom: 1vw;
    position: relative;
  }

  /* SLIDESHOW */

  .mySlides {
    display: none;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  }

  img {
    vertical-align: middle;
  }

  /* Slideshow container */
  .slideshow-container {
    width: 100%;
    position: relative;
    margin: auto;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    bottom: 0;
    width: auto;
    padding: 1vw;
    color: #da2400 !important;
    font-weight: bold;
    font-size: 1vw;
    transition: 0.6s ease;
    border-radius: 0 1vw 0 0;
    user-select: none;
    background-color: rgb(255, 255, 255, 0.6);
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 1vw 0 0 0;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    font-size: 1.2vw;
  }

  .mySlides img {
    width: 100%;
    height: 20vw;
    object-fit: cover;
  }

  /* PROFILE */

  .profile-img {
    width: 5vw;
    height: 5vw;
    border-radius: 50%;
    margin-right: 0.8vw;
    object-fit: cover;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  }

  .profile {
    padding: 1vw;
    display: flex;
    align-items: flex-end;
  }

  .published-by {
    font-size: 1.8vw;
    color: #03004d;
  }

  .published-on {
    color: #8b8c8b;
    font-size: 1.2vw;
  }

  .post-desc {
    padding-left: 1.5vw;
    padding-right: 1.5vw;
    font-size: 1.5vw;
  }

  .post-contact {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-left: 1.5vw;
    padding-right: 1.5vw;
  }

  .icon-contact {
    width: 3vw ;
  }

  .icon-type {
    width: 2.2vw ;
    margin-left: 0.5vw;
  }

  .post-contact div p {
    font-size: 1.5vw;
  }

  .post-contact div {
    display: flex;
    align-items: center;
  }

  .post-flex{
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding-left: 0.5vw;
  }

  /* ARE YOU */

  .are-you {
    position: absolute;
    top: 0;
    right: 0;
    width: 5vw;
    padding: 0.5vw;
  }

  .are-you-img {
    width: 4vw;
  }

  .text-are-you {
    font-size: 1.3vw;
    color: #da2400;
    background-color: rgb(255, 255, 255, 0.7);
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    padding: 0.2vw;
    padding-left: 0.5vw;
    padding-right: 0.5vw;
    text-align: center;
    border-radius: 1vw;
    width: fit-content;
    visibility: hidden;
    clear: none;
  }

  .are-you:hover .text-are-you {
    visibility: visible;
  }

  /* POST COMMENTS */

  .post-comments-global {
    width: 98%;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    margin: auto;
    margin-top: 2vw;
    display: block;
    padding-bottom: 1vw;
    overflow-y: scroll;
    height: 30vw;
  }

  .post-comments-global::-webkit-scrollbar {
    width: 0.4vw;
  }

  /* Track */
  .post-comments-global::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  /* Handle */
  .post-comments-global::-webkit-scrollbar-thumb {
    background: #03004d;
  }

  /* Handle on hover */
  .post-comments-global::-webkit-scrollbar-thumb:hover {
    background: #03004d;
  }

  .comment-title {
    font-size: 2vw !important;
    color: #da2400;
    padding-top: 1vw;
    padding-left: 1vw;
  }

  .post-comments-details-global {
    padding: 1vw;
  }

  .post-comments-details {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }

  .comment-img {
    width: 3.5vw;
    height: 3.5vw;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  }

  .comment-name-time {
    display: flex;
    justify-content: space-between;
    justify-items: flex-end;
  }

  .post-comment {
    width: 95%;
  }

  .comment-name-text {
    font-size: 1.4vw;
  }

  .comment-time-text {
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

  .comment-time {
    display: flex;
    justify-items: center;
  }

  .comment {
    box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
    padding: 0.5vw;
  }

  .comment-text {
    font-size: 1.2vw;
  }

  .add-comment {
    padding-left: 1vw;
    padding-right: 1vw;
    padding-bottom: 0.5vw;
  }

  .add-comment textarea {
    width: 100%;
    padding: 0.5vw;
    border: 0.1vw solid #8b8c8b !important;
    border-radius: 0.5vw;
    font-size: 1.2vw;
  }

  .add-comment textarea::placeholder {
    font-size: 1.2vw !important;
  }

  .add-comment textarea:focus {
    outline: 0 !important;
  }

  /* HR */

  hr {
    margin-top: 0.7vw !important;
    margin-bottom: 0.7vw !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  /* form */

  form {
    margin: 0 !important;
  }

  /* REPLY */

  .replay {
    min-height: 1.3vw;
  }

  .replay-btn {
    background-color: transparent;
    border: none;
    color: #da2400;
    font-size: 1.2vw;
    float: right;
    cursor: pointer;
  }

  .replay-btn:hover {
    text-decoration: underline;
  }

  button:focus {
    outline: 0 !important;
  }

  .reply-width {
    width: 95%;
    margin-left: 5%;
  }

  .reply-img-width {
    transform: scale(0.9);
  }

  .reply-name {
    transform: scale(0.95);
  }

  .reply-comment-text {
    font-size: 1.1vw !important;
  }

  /* DETAILS */
  .addpost {
    background-image: url(/asset/backoffice/addpost-bg.png) !important;
  }

  .footer-auth {
    background-image: url(/asset/backoffice/addpost-bg.png) !important;
  }
</style>


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
      <a href="{{ route('ENTERTAINMENT') }}">Entertainment</a>
      <a href="{{ route('CATERING') }}">Catering</a>
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
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
  <h1>POST DETAILS</h1>
</div>

<div class="answer">
  <h1>{{ $catering->title }}</h1>
</div>

<!-- POST DETAILS -->

<div class='post-details-width'>
  <div class="post-details-global">
    <div class="post-details-left">
      <div class="slideshow-container">
        @foreach($images as $image)
        <div class="mySlides">
          <img src="/images/catering/{{$image->image}}">
        </div>
        @endforeach
 
        <a class="prev" onclick="plusDivs(-1)">❮</a>
        <a class="next" onclick="plusDivs(1)">❯</a>

      </div>
    </div>
    <div class="post-details-right">
      <!-- profile -->
      <div class="profile">
        <div>
        <a href="{{ route('profile.show', $catering->user->id)}}">
          <img src="/images/user/{{$catering->user->image}}" alt="profile-img" class="profile-img">
        </a>
        </div>
        <div>
          <p class="published-by">{{ $catering->user->name }}</p>
          <p class="published-on">{{ $catering->created_at }}</p>
        </div>
      </div>
      <!--  -->
      <hr>
      <!-- description -->
      <p class="post-desc">{{ $catering->desc }}</p>
      <!--  -->
      <hr>
      <!-- location -->
      <div class="post-flex">
        <img src="{{url('svg/place-post.svg')}}" class='icon-contact' />
        <p class="post-desc">{{ $catering->location }}</p>
      </div>
      <!--  -->
      <hr>
      <!-- date -->
      <div class="post-flex">
        <img src="{{url('svg/date.svg')}}" class='icon-contact' />
        <p class="post-desc">{{ $catering->date }}</p>
      </div>
      <!--  -->
      <hr>
      <!-- price -->
      <div class="post-flex">
        <img src="{{url('svg/price.svg')}}" class='icon-contact' />
        <p class="post-desc">{{ $catering->price }}</p>
      </div>
      <!--  -->
      <hr>
      <!-- type -->
      <div class="post-flex">
        <img src="/svg/{{ PostType()[$catering->type]['icon'] }}.svg" class='icon-type' />
        <p class="post-desc">{{ $catering->type }}</p>
      </div>      
      <!--  -->
      <hr>
      <!-- contact -->
      <div class="post-contact">
        <div>
          <img src="{{url('svg/fbauth.svg')}}" class='icon-contact' />
          <p>{{ $catering->fb }}</p>
        </div>
        <div>
          <img src="{{url('svg/wtsauth.svg')}}" class='icon-contact' />
          <p>{{ $catering->num }}</p>
        </div>
        <div>
          <img src="{{url('svg/instaauth.svg')}}" class='icon-contact' />
          <p>{{ $catering->insta }}</p>
        </div>
      </div>
      <!-- LOOKING FOR / DISPLAYING -->
      @if($catering->looking_for == 1)
      <div class="are-you">
        <img src="/svg/{{ PostType()['looking_for']['icon'] }}.svg" alt="heart" class="are-you-img">
        <p class="text-are-you">Looking for</p>
      </div>
      @elseif($catering->displaying == 1)
      <div class="are-you">
        <img src="/svg/{{ PostType()['displaying']['icon'] }}.svg" alt="heart" class="are-you-img">
        <p class="text-are-you">Displaying</p>
      </div>
      @endif
    </div>
  </div>
  <!-- COMMENTS -->
  <div class="post-comments-global">
    <h3 class="comment-title">Comments :</h3>
    <!-- ADD COMMENT -->
    <form action="{{ route('catering-comment.store') }}" enctype="multipart/form-data" method="POST">
      @csrf
      <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id">
      <input type="hidden" id="catering_id" value="{{ $catering->id }}" name="catering_id">
      <div class="add-comment">
        <textarea name="comment" id="comment" placeholder="  Leave a comment ! Give us your opinion..."></textarea>
      </div>
      <button type="submit" class="comment-publish">Publish</button>
    </form>
    <!-- COMMENT -->
    @foreach($comments as $comment)
    <div class="post-comments-details-global">
      <div class="post-comments-details">
        <div class="post-comment-image">
          <img src="/images/user/{{$comment->user->image}}" alt="comment-profile-img" class="comment-img">
        </div>
        <div class="post-comment">
          <div class="comment-name-time">
            <div class="commet-name">
              <p class="comment-name-text">{{ $comment->user->name }}</p>
            </div>
            <div class="comment-time">
              <div>
                <img src="{{url('svg/time.svg')}}" alt="clock" class="time-img">
              </div>
              <div>
                <p class="comment-time-text">{{ $comment->created_at }}</p>
              </div>
            </div>
          </div>
          <div class="comment">
            <p class="comment-text">{{ $comment->comment }}
            </p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <!--  -->
  </div>
</div>

<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
  }
</script>
<script>
  const replayButtons = document.querySelectorAll('.replay-btn');

  replayButtons.forEach(item => {
    item.addEventListener('click', () => {
      item.parentElement.insertAdjacentHTML('beforeend', `
                  <form action="">
                  @csrf
                    <input type="text" placeholder="write your replay" style="margin-top:0.7vw;margin-bottom:1vw;
                    width:95%;min-height:2.2vw !important;padding-left:0.5vw;"/>
                  </form>
                `);
    });
  })
</script>


@endsection
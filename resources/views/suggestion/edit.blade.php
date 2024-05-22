@extends('layouts.app.backoffice')

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
    width: 3vw;
  }

  .icon-type {
    width: 2.2vw;
    margin-left: 0.5vw;
    margin-right: 0.3vw;
  }

  .post-contact div p {
    font-size: 1.5vw;
  }

  .post-contact div {
    display: flex;
    align-items: center;
  }

  .post-flex {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding-left: 0.5vw;
    padding-right: 1vw;
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
    font-size: 1vw;
  }

  .add-comment textarea::placeholder {
    font-size: 1vw;
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

  /* INPUTS + SELECT */

  input.edit,
  select.edit {
    font-size: 1.2vw;
    font-family: steelfish, Arial, Helvetica, sans-serif;
    height: 2.4vw;
    width: 95% !important;
  }

  ::placeholder {
    font-size: 1.2vw;
  }

  input.edit:focus {
    background-color: white !important;
  }

  #desc {
    width: 95%;
    display: block;
    margin: auto;
    font-size: 1.5vw;
  }

  /* DELETE IMAGE */

  .delete-image {
    background-color: #8b8c8b;
    border: none;
    width: 20%;
    display: block;
    margin: auto;
    font-size: 1.2vw;
    color: white;
  }

  .delete-image:hover {
    background-color: red;
  }

  /* IMAGE ADD */

  .upload__box {
    padding: 0.5vw;
  }

  .upload__inputfile {
    width: 0.01vw;
    height: 0.01vw;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }

  .upload__btn {
    display: block;
    font-weight: 600;
    color: #03004d;
    text-align: center;
    width: 9vw;
    padding: 0.2vw;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 0.2vw solid #03004d;
    background-color: #E6E6E6;
    border-radius: 1vw;
    font-size: 1.2vw;
    margin: auto;
  }

  .upload__btn:hover {
    background-color: white;
    color: #03004d;
    transition: all 0.3s ease;
    border: 0.2vw solid #03004d;

  }


  .upload__img-wrap {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -1vw;
  }

  .upload__img-box {
    width: 6vw;
    margin: 0.7vw;
    border: 0.2vw solid #7F7F7F;
    border-radius: 1vw;
  }

  .upload__img-close {
    width: 1.5vw;
    height: 1.5vw;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0.3vw;
    right: 0.3vw;
    text-align: center;
    line-height: 1.5vw;
    z-index: 1;
    cursor: pointer;
  }

  .upload__img-close:after {
    content: "✖";
    font-size: 0.7vw;
    color: white;
  }

  .img-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    padding-bottom: 100%;
  }

  /* EDIT POST BUTTON */

  button.edit-post {
    background-color: #03004d;
    border: 0.2vw solid #03004d;
    color: white;
    font-size: 1.2vw !important;
    width: 6vw;
    -webkit-box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
    -moz-box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
    box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
    cursor: pointer;
    margin-right: 1.4vw !important;
    margin-top: 2vw !important;
    margin: auto;
    display: block;
  }

  button.edit-post:hover {
    opacity: 0.8;
  }
</style>
</head>

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
          <a class="dropdown-item" href="{{ route('dashboard') }}">
            Dashboard
          </a>
          <a class="dropdown-item" href="{{ route('my_profile') }}">
            Profile
          </a>
          <a class="dropdown-item" href="{{ route('my_posts') }}">
            My posts
          </a>
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
  <h1>POST EDIT</h1>
</div>

<div class="answer">
  <h1>{{ $suggestion->title }}</h1>
</div>

<!-- POST EDIT -->

<div class='post-details-width'>
  <div class="post-details-global">
    <div class="post-details-left">
      <div class="slideshow-container">
        @foreach($images as $image)
        <div class="mySlides">
          <img src="/images/suggestion/{{$image->image}}">
          <form action="{{ route('suggestion-image.destroy', $image->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="delete-image">delete this image</button>
          </form>
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
          <img src="/images/user/{{$user->image}}" alt="profile-img" class="profile-img">
        </div>
        <div>
          <p class="published-by">{{ $user->name }}</p>
          <p class="published-on">{{ $suggestion->created_at }}</p>
        </div>
      </div>
      <!--  -->
      <hr>
      <form action="{{ route('zho-suggestion.update', $suggestion->id) }}" enctype="multipart/form-data" method="POST">
        @method("put")
        @csrf
        <!-- description -->
        <textarea id="desc" class="form-control @error('desc') is-invalid @enderror" name="desc" required autofocus>
                            {{ $suggestion->desc }}
                        </textarea>
        <!--  -->
        <hr>
        <!-- location -->
        <div class="post-flex">
          <img src="{{url('svg/place-post.svg')}}" class='icon-contact' />
          <select name="location" class="edit">
            <option value="{{ $suggestion->location }}" selected>{{ $suggestion->location }}</option>
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
        <!--  -->
        <hr>
        <!-- date -->
        <div class="post-flex">
          <img src="{{url('svg/date.svg')}}" class='icon-contact' />
          <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date"
            value="{{ $suggestion->date }}" required autocomplete="date" autofocus class="edit">
        </div>
        <!--  -->
        <hr>
        <!-- price -->
        <div class="post-flex">
          <img src="{{url('svg/price.svg')}}" class='icon-contact' />
          <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price"
            value="{{ $suggestion->price }}" required autocomplete="price" autofocus class="post-desc" class="edit">
        </div>
        <!--  -->
        <hr>
        <!-- type -->
        <div class="post-flex">
          <img src="/svg/{{ PostType()[$suggestion->type]['icon'] }}.svg" class='icon-type' />
          <select name="type" class="edit">
            <option value="{{ $suggestion->type }}" selected>{{ $suggestion->type }}</option>
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
        <!--  -->
        <hr>
        <!-- contact -->
        <div class="post-contact">
          <div>
            <img src="{{url('svg/fbauth.svg')}}" class='icon-contact' />
            <input id="fb" type="text" class="form-control @error('fb') is-invalid @enderror" name="fb" required
              placeholder="Enter your facebook" value="{{ $suggestion->fb }}">
          </div>
          <div>
            <img src="{{url('svg/wtsauth.svg')}}" class='icon-contact' />
            <input id="num" type="tel" class="form-control @error('num') is-invalid @enderror" name="num" required
              placeholder="Enter your phone number" value="{{ $suggestion->num }}">
          </div>
          <div>
            <img src="{{url('svg/instaauth.svg')}}" class='icon-contact' />
            <input id="insta" type="text" class="form-control @error('insta') is-invalid @enderror" name="insta"
              required placeholder="Enter your instagram" value="{{ $suggestion->insta }}">
          </div>
        </div>
        <!--  -->
        <hr>
        <!-- ADD IMAGES -->
        <div class="upload__box">
          <div class="upload__btn-box">
            <label class="upload__btn">
              <p>Add images</p>
              <input type="file" multiple="" data-max_length="20" class="upload__inputfile" name="image[]">
            </label>
          </div>
          <div class="upload__img-wrap"></div>
        </div>
        <!-- LOOKING FOR / DISPLAYING -->
        @if($suggestion->looking_for == 1)
        <div class="are-you">
          <img src="/svg/{{ PostType()['looking_for']['icon'] }}.svg" alt="heart" class="are-you-img">
          <p class="text-are-you">Looking for</p>
        </div>
        @elseif($suggestion->displaying == 1)
        <div class="are-you">
          <img src="/svg/{{ PostType()['displaying']['icon'] }}.svg" alt="heart" class="are-you-img">
          <p class="text-are-you">Displaying</p>
        </div>
        @endif
    </div>
  </div>
  <button type="submit" class="edit-post">Edit</button>
  </form>
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
  jQuery(document).ready(function () {
    ImgUpload();
  });

  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {

          if (!f.type.match('image.*')) {
            return;
          }

          if (imgArray.length > maxLength) {
            return false
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);

              var reader = new FileReader();
              reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });

    $('body').on('click', ".upload__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }
</script>


@endsection
@extends('layouts.app.dashboard')

<style>
  .user-img {
    width: 3.5vw;
    height: 3.5vw;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  }

  .user-show {
    display: flex;
    justify-content: space-around;
    align-items: baseline;
    margin-top: 0.5vw;
  }

  .user-name {
    font-size: 1.5vw;
    color: black;
    margin-top: 1vw;
  }

  .profile-hr {
    margin-bottom: 0 !important;
  }

  .pdf-frame {
    width: 90%;
    display: block;
    margin: auto;
    height: 23vw;
    margin-top: 1vw;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  }

  .open {
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    z-index: 1000;
    position: absolute;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 5vw;
    padding: 0.2vw;
    font-size: 1.2vw;
    background-color: white;
    border: 0.2vw solid #323639;
    opacity: 0.5;
    cursor: pointer;
  }

  .open:hover{
    opacity: 1;
    width: 7vw;
    font-size: 1.4vw;
  }

  .open:hover .pdf-frame{
    opacity: 0.3 !important;
  }

  /* button verify */

  .verification_pdf {
    width: 100%;
    background-color: #da2400;
    border: none;
    color: white;
    font-size: 1.5vw;
    padding: 0.4vw;
    margin-top: 1vw;
    cursor: pointer;
    opacity: 0.9;
  }

  form{
    margin-block-end: 0 !important;
  }

  /* EMPTY */

  .error {
    height: 45%;
    display: block;
    margin: auto;
    margin-top:3vw;
  }
</style>



@section('content')
<!--  -->
<h1 class="title">Verifications</h1>
<div class="w90">
  <div class="closer-look">
    @foreach ($verifications as $verification)
    <!-- CARD -->
    <div class="card">
      <!-- User -->
      <div class="user-show">
        <div>
          <a href="{{ route('profile.show', $verification->user->id)}}"><img
              src="/images/user/{{$verification->user->image}}" alt="profile-img" class="user-img"></a>
        </div>

        <div>
          <p class="user-name"><span style="color: #03004d;text-transform: uppercase;">{{
              $verification->user->name }}</span> wants to become a verified user !</p>
        </div>
      </div>
      <!-- ---- -->
      <hr class="profile-hr">
      <iframe src="/pdf/{{$verification->file}}" class="pdf-frame">
      </iframe>
      <a href="{{ route('verification.show', $verification->id)}}" target="_blank"><button class="open">Open</button></a>
      <form action="{{ route('verification.update', $verification->user->id)}}" method="post">
        @csrf
        @method('put')
      <button class="verification_pdf" type="submit">Verify this account</button>
      </form>
    </div>
    @endforeach
    <!-- ---- -->
  </div>
</div>
@if($verifications->count() == 0)
<img src="{{url('asset/backoffice/empty.png')}}" alt="" class="error">
@endif
<!--  -->
@endsection
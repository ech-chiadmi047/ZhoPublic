@extends('layouts.app.dashboard')

<style>
  .edit-profile {
    width: 7%;
    background-color: #03004d;
    border: 0.2vw solid #03004d;
    margin-left: 92%;
    margin-top: 1vw;
    color: white;
    padding: 0.1vw;
    height: 2.5vw;
    font-size: 1.3vw;
    cursor: pointer;
  }

  .edit-profile:hover {
    background-color: white;
    color: #03004d;
    border-color: #03004d;
  }

  .verify_acc {
    width: 100%;
    display: block;
    margin-top: 1vw;
    font-size: 1.5vw;
    border: 0.2vw solid #da2400;
    cursor: pointer;
    background-color: white;
    color: #da2400;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  }

  .verify_acc:hover {
    background-color: #da2400;
    color: white;
  }

  .verified-user {
    width: 100%;
    display: block;
    margin: auto;
    margin-top: 1vw;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    padding-left: 35%;
    padding-right: 35%;
    padding-top: 2%;
    padding-bottom: 2%;
    border:0.2vw solid #03004d;
  }

  a {
    text-decoration: none !important;
  }
</style>



@section('content')
<!--  -->
<h1 class="title">My profile</h1>
<form action="{{ route('profile.update' , Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
  @method("put")
  @csrf
  <div class="profile-width">
    <div class="profile-global">
      <div class="profile-left-global">
        <div class="profile-left">
          <div class="profile-image">
            <input type="file" name="image" style="display: none;" id="image"
              class="form-control @error('image') is-invalid @enderror">
            <label for="image">
              <img src="{{url('svg/editprofile.svg')}}" alt="" class="edit-img">
            </label>
            <img src="/images/user/{{$user->image}}" alt="" class="profile-image-img">
          </div>
          <input type="text" class="profile-name" value="{{$user->name}}" name="name">

        </div>
        <!-- Account verified -->
        @if($user->verified == 1)
        <img src="{{url('asset/backoffice/verified.png')}}" alt="verify" class="verified-user">
        @else
        <!-- ---------------- -->
        <!-- Verify Account -->
        <a href="{{ route('verification.create') }}"><button class="verify_acc" type="button">Verify my
            account</button></a>
        <!-- -------------- -->
        @endif
      </div>
      <div class="profile-right">
        <h3>You can both check your profile and edit it !</h3>
        <!--  -->
        <hr>
        <!-- description -->
        <textarea class="profile-desc" id="autoresizing" name="desc">{{$user->desc}}</textarea>
        <!--  -->
        <hr>
        <!-- location -->
        <p class="profile-desc">Age : <input type="number" value="{{$user->age}}" name="age"></p>
        <!--  -->
        <hr>
        <!-- location -->
        <p class="profile-desc">Gender :
          <select name="gender">
            <option selected value="{{$user->gender}}">{{$user->gender}}</option>
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
            <p class="profile-desc"><input type="text" value="{{$user->fb}}" name="fb"></p>
          </div>
          <div>
            <img src="{{url('svg/wtsauth.svg')}}" class='icon-profile' />
            <p class="profile-desc"><input type="text" value="{{$user->num}}" name="num"></p>
          </div>
          <div>
            <img src="{{url('svg/instaauth.svg')}}" class='icon-profile' />
            <p class="profile-desc"><input type="text" value="{{$user->insta}}" name="insta"></p>
          </div>
        </div>
        <div class="profile-email">
          <img src="{{url('svg/emailauth.svg')}}" class='icon-profile' />
          <p>{{$user->email}}</p>
        </div>
      </div>
    </div>
    <button type="submit" class="edit-profile">Edit</button>
  </div>
</form>
<!--  -->
@endsection
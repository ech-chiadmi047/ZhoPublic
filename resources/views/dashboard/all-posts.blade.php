@extends('layouts.app.dashboard')

<style>
    .user-img {
        width: 3.5vw;
        height: 3.5vw;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        margin-left:2vw;
    }

    .user-show {
        display: flex;
        justify-content: flex-start;
        align-items: baseline;
        margin-top: 0.5vw;
    }

    .user-name {
        font-size: 1.3vw;
        color: black;
        padding-left:2vw;
        margin-top: 0.4vw;
    }

    .profile-hr {
        margin-bottom: 0 !important;
    }

    /* show my posts */

    .my_posts {
        text-decoration: none !important;
    }

    .my_posts button {
        width: 15vw;
        font-size: 1.5vw;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        border: 0.2vw solid #da2400;
        color: #da2400;
        background-color: white;
        padding: 0.1vw;
        cursor: pointer;
        display: block;
        margin: auto;
    }

    .my_posts button:hover {
        transform: scale(1.1);
    }
</style>



@section('content')
<!--  -->
<h1 class="title">All posts</h1>


<div class="w90">
    <!-- SHOW POSTS OF ADMIN -->
    <a href="{{ route('my_posts') }}" class="my_posts">
        <button>Show only my posts</button>
    </a>
    <!--  -->
    <div class="closer-look">
        <!-- CARD -->
        <!--  -->
        <!-- ----- -->

        @foreach ($places as $place)
        <!-- CARD -->
        <div class="card">
            <!-- User -->
            <div class="user-show">
                <div>
                    <a href="{{ route('profile.show', $place->user->id)}}"><img
                            src="/images/user/{{$place->user->image}}" alt="profile-img" class="user-img"></a>
                </div>

                <div>
                    <p class="user-name">{{ $place->user->name }}</p>
                </div>
            </div>
            <!-- ---- -->
            <hr class="profile-hr">
            <img src="/images/place/{{$place->images()->first()->image}}" class='img-card' />
            <h3 class="card-type">Place</h3>
            <h3 class="card-title">{{ $place->title }}</h3>
            <p class="price">{{ $place->price }} <span style="color: black;">DHs</span></p>
            <a href="{{ route('zho-place.show', $place->id)}}"><button class="card-btn">Details</button></a>
            <a href="{{ route('zho-place.edit', $place->id)}}"><button class="card-btn edit-post">Edit</button></a>
            <form action="{{ route('zho-place.destroy', $place->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
            </form>
        </div>
        @endforeach
        @foreach ($companys as $company)
        <!-- CARD -->
        <div class="card">
            <!-- User -->
            <div class="user-show">
                <div>
                    <a href="{{ route('profile.show', $company->user->id)}}"><img
                            src="/images/user/{{$company->user->image}}" alt="profile-img" class="user-img"></a>
                </div>

                <div>
                    <p class="user-name">{{ $company->user->name }}</p>
                </div>
            </div>
            <hr class="profile-hr">
            <!-- ---- -->
            <img src="/images/company/{{$company->images()->first()->image}}" class='img-card' />
            <h3 class="card-type">Company</h3>
            <h3 class="card-title">{{ $company->title }}</h3>
            <p class="price">{{ $company->price }} <span style="color: black;">DHs</span></p>
            <a href="{{ route('zho-company.show', $company->id)}}"><button class="card-btn">Details</button></a>
            <a href="{{ route('zho-company.edit', $company->id)}}"><button class="card-btn edit-post">Edit</button></a>
            <form action="{{ route('zho-company.destroy', $company->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
            </form>
        </div>
        @endforeach
        @foreach ($entertainments as $entertainment)
        <!-- CARD -->
        <div class="card">
            <!-- User -->
            <div class="user-show">
                <div>
                    <a href="{{ route('profile.show', $entertainment->user->id)}}"><img
                            src="/images/user/{{$entertainment->user->image}}" alt="profile-img" class="user-img"></a>
                </div>

                <div>
                    <p class="user-name">{{ $entertainment->user->name }}</p>
                </div>
            </div>
            <hr class="profile-hr">
            <!-- ---- -->
            <img src="/images/entertainment/{{$entertainment->images()->first()->image}}" class='img-card' />
            <h3 class="card-type">Entertainment</h3>
            <h3 class="card-title">{{ $entertainment->title }}</h3>
            <p class="price">{{ $entertainment->price }} <span style="color: black;">DHs</span></p>
            <a href="{{ route('zho-entertainment.show', $entertainment->id)}}"><button
                    class="card-btn">Details</button></a>
            <a href="{{ route('zho-entertainment.edit', $entertainment->id)}}"><button
                    class="card-btn edit-post">Edit</button></a>
            <form action="{{ route('zho-entertainment.destroy', $entertainment->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
            </form>
        </div>
        @endforeach
        @foreach ($equipments as $equipment)
        <!-- CARD -->
        <div class="card">
            <!-- User -->
            <div class="user-show">
                <div>
                    <a href="{{ route('profile.show', $equipment->user->id)}}"><img
                            src="/images/user/{{$equipment->user->image}}" alt="profile-img" class="user-img"></a>
                </div>

                <div>
                    <p class="user-name">{{ $equipment->user->name }}</p>
                </div>
            </div>
            <hr class="profile-hr">
            <!-- ---- -->
            <img src="/images/equipment/{{$equipment->images()->first()->image}}" class='img-card' />
            <h3 class="card-type">Equipment</h3>
            <h3 class="card-title">{{ $equipment->title }}</h3>
            <p class="price">{{ $equipment->price }} <span style="color: black;">DHs</span></p>
            <a href="{{ route('zho-equipment.show', $equipment->id)}}"><button class="card-btn">Details</button></a>
            <a href="{{ route('zho-equipment.edit', $equipment->id)}}"><button
                    class="card-btn edit-post">Edit</button></a>
            <form action="{{ route('zho-equipment.destroy', $equipment->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
            </form>
        </div>
        @endforeach
        @foreach ($caterings as $catering)
        <!-- CARD -->
        <div class="card">
            <!-- User -->
            <div class="user-show">
                <div>
                    <a href="{{ route('profile.show', $catering->user->id)}}"><img
                            src="/images/user/{{$catering->user->image}}" alt="profile-img" class="user-img"></a>
                </div>

                <div>
                    <p class="user-name">{{ $catering->user->name }}</p>
                </div>
            </div>
            <hr class="profile-hr">
            <!-- ---- -->
            <img src="/images/catering/{{$catering->images()->first()->image}}" class='img-card' />
            <h3 class="card-type">Catering</h3>
            <h3 class="card-title">{{ $catering->title }}</h3>
            <p class="price">{{ $catering->price }} <span style="color: black;">DHs</span></p>
            <a href="{{ route('zho-catering.show', $catering->id)}}"><button class="card-btn">Details</button></a>
            <a href="{{ route('zho-catering.edit', $catering->id)}}"><button
                    class="card-btn edit-post">Edit</button></a>
            <form action="{{ route('zho-catering.destroy', $catering->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
            </form>
        </div>
        @endforeach
        @foreach ($suggestions as $suggestion)
        <!-- CARD -->
        <div class="card">
            <!-- User -->
            <div class="user-show">
                <div>
                    <a href="{{ route('profile.show', $suggestion->user->id)}}"><img
                            src="/images/user/{{$suggestion->user->image}}" alt="profile-img" class="user-img"></a>
                </div>

                <div>
                    <p class="user-name">{{ $suggestion->user->name }}</p>
                </div>
            </div>
            <hr class="profile-hr">
            <!-- ---- -->
            <img src="/images/suggestion/{{$suggestion->images()->first()->image}}" class='img-card' />
            <h3 class="card-type">Suggestion</h3>
            <h3 class="card-title">{{ $suggestion->title }}</h3>
            <p class="price">{{ $suggestion->price }} <span style="color: black;">DHs</span></p>
            <a href="{{ route('zho-suggestion.show', $suggestion->id)}}"><button class="card-btn">Details</button></a>
            <a href="{{ route('zho-suggestion.edit', $suggestion->id)}}"><button
                    class="card-btn edit-post">Edit</button></a>
            <form action="{{ route('zho-suggestion.destroy', $suggestion->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href=""><button class="card-btn delete-post" type="submit">Delete</button></a>
            </form>
        </div>
        @endforeach
        <!-- ----- -->
    </div>
</div>
@if($companys->count() + $places->count() + $entertainments->count() + $equipments->count() + $suggestions->count()
+
$caterings->count() == 0)
<img src="{{url('asset/backoffice/empty.png')}}" alt="" class="error">
@endif
<!--  -->
@endsection
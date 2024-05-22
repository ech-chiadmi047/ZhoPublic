@extends('layouts.app.form')

<style>
    .auth-form {
        width: 50% !important;
    }

    .link-blue {
        font-size: 1.6vw !important;
    }

    .post {
        width: 4vw;
        height: 4vw;
        margin-bottom: 0.2vw;
        display: block;
        margin: auto;
    }

    .preferences-block {
        width: 80% !important;
    }
</style>

@section('content')

<div class="form-flex-column">
    <div>
        <h3 class="form-title">What do you want to post ?</h3>
    </div>
    <div>

        <div class="preferences-block">
            <div class="preferences-flex">
                <a href="{{ route('zho-company.create') }}">
                    <div class="preference">
                        <div class="preference-detail">
                            <!-- Company ICON -->
                            <img src="{{url('svg/company-post.svg')}}" alt="heart" class="post">
                            <!-- ---- -->
                            <h5>COMPANY</h5>
                        </div>
                    </div>
                </a>
                <a href="{{ route('zho-place.create') }}">

                    <div class="preference">
                        <div class="preference-detail">
                            <!-- SPORT ICON -->
                            <img src="{{url('svg/place-post.svg')}}" alt="heart" class="post">
                            <!-- ---- -->
                            <h5>PLACE</h5>
                        </div>
                    </div>
                </a>
                <a href="{{ route('zho-equipment.create') }}">
                    <div class="preference">
                        <div class="preference-detail">
                            <!-- SPORT ICON -->
                            <img src="{{url('svg/equipment-post.svg')}}" alt="heart" class="post">
                            <!-- ---- -->
                            <h5>EQUIPMENT</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="preferences-flex">
                <a href="{{ route('zho-entertainment.create') }}">
                    <div class="preference">
                        <div class="preference-detail">
                            <!-- SPORT ICON -->
                            <img src="{{url('svg/entertainment-post.svg')}}" alt="heart" class="post">
                            <!-- ---- -->
                            <h5>ENTERTAINMENT</h5>
                        </div>
                    </div>
                </a>
                <a href="{{ route('zho-suggestion.create') }}">
                    <div class="preference">
                        <div class="preference-detail">
                            <!-- SPORT ICON -->
                            <img src="{{url('svg/suggestion-post.svg')}}" alt="heart" class="post">
                            <!-- ---- -->
                            <h5>SUGGESTION</h5>
                        </div>
                    </div>
                </a>
                <a href="{{ route('zho-catering.create') }}">
                    <div class="preference">
                        <div class="preference-detail">
                            <!-- SPORT ICON -->

                            <img src="{{url('svg/catering-post.svg')}}" alt="heart" class="post">
                            <!-- ---- -->
                            <h5>CATERING</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="inputs-contact">
            <div class="form-links">
                <div class="submit">
                </div>
                <div class="links">
                    <h5><span class="link-blue">What is it that you desire !</span></h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
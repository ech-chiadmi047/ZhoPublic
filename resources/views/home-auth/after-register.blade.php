@extends('layouts.app.form')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .auth-form {
            width: 60% !important;
        }

        .link-blue {
            font-size: 1.6vw !important;
        }

        .looking {
            width: 4.5vw;
            height: 4.5vw;
            margin-bottom: 0.5vw !important;
            display: block;
            margin: auto;
        }

        .preferences-block {
            width: 90% !important;
        }

        .preference {
            width: 16vw !important;
            height: 13vw !important;
            margin-bottom: 2vw;
        }

       .auth-logo{
        display: none !important;
       }

    </style>
</head>

@section('content')
<div class="form-flex-column">
    <div>
        <h3 class="form-title">Do you want to ?</h3>
    </div>
    <div>
        <div class="preferences-block">
            <div class="preferences-flex">
                <a href="">
                    <label for="verify">
                        <div class="preference">
                            <div class="preference-detail">
                                <!-- SPORT ICON -->
                                <img src="{{url('svg/verify.svg')}}" alt="heart" class="looking">
                                <!-- ---- -->
                                <h6>VERIFY YOUR ACCOUNT</h6>
                            </div>
                        </div>
                    </label>
                </a>
                <a href="{{ route('ALL') }}">
                    <label for="looking_for">
                        <div class="preference">
                            <div class="preference-detail">
                                <!-- SPORT ICON -->
                                <img src="{{url('svg/lookingfor.svg')}}" alt="heart" class="looking">
                                <!-- ---- -->
                                <h6>CHECK AS A FINDER</h6>
                            </div>
                        </div>
                    </label>
                </a>
                <a href="{{ route('ALL-SUPPLIER') }}">
                    <label for="displaying">
                        <div class="preference">
                            <div class="preference-detail">
                                <!-- SPORT ICON -->
                                <img src="{{url('svg/displaying.svg')}}" alt="heart" class="looking">
                                <!-- ---- -->
                                <h6>CHECK AS A SUPPLIER</h6>
                            </div>
                        </div>
                    </label>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection
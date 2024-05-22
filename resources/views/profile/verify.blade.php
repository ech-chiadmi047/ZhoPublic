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
            width: 6vw;
            height: 6vw;
            margin-bottom: 0.2vw;
            display: block;
            margin: auto;
        }

        .preferences-block {
            width: 80% !important;
        }

        .preference {
            width: 18vw !important;
            height: 15vw !important;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #03004d;
            border: 0.2vw solid #03004d;
            color: white;
            font-size: 1.2vw !important;
            width: 6vw;
            -webkit-box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
            -moz-box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
            box-shadow: 1px 6px 18px -4px rgba(3, 0, 77, 1);
            cursor: pointer;
            margin-right: 3vw !important;
            margin-top: 2vw !important;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #da2400;
            border: 0.2vw solid #da2400;
            -webkit-box-shadow: 1px 6px 18px -4px rgb(218, 36, 0, 1);
            -moz-box-shadow: 1px 6px 18px -4px rgb(218, 36, 0, 1);
            box-shadow: 1px 6px 18px -4px rgb(218, 36, 0, 1);
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 0.7vw;
            width: 0.7vw;
            margin: 0 0.2vw;
            background-color: #03004d;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #da2400;
        }

        .inputs {
            width: 100% !important;
        }

        /* IMAGES */

        p {
            margin: 0;
            margin-bottom: 0 !important;
        }

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
            font-size: 1.5vw;
            margin: auto;
        }

        .upload__btn:hover {
            background-color: white;
            color: #03004d;
            transition: all 0.3s ease;
            border: 0.2vw solid #03004d;

        }

        .upload__btn-box {
            margin-bottom: 1vw;
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

        input[type="checkbox"]:checked+label .preference {
            border-color: #da2400 !important;
            background-color: #E6E6E6;
            transition: all .2s;
        }
        
    </style>
</head>

@section('content')
<form method="POST" action="{{ route('verification.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-flex-column">
            <div>
                <h3 class="form-title">Upload necessary files to verify your account !</h3>
            </div>
            <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id">
            <div>
                <div class="preferences-block">
                    <div class="upload__box">
                        <div class="upload__btn-box">
                            <label class="upload__btn">
                                <p>Upload file</p>
                                <input type="file" multiple="" class="upload__inputfile" accept=".pdf" name="file">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="submit" id="nextBtn">Verify</button>
            </div>
        </div>
</form>

@endsection
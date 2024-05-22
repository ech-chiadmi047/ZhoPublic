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
<form id="regForm" action="{{ route('zho-catering.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-flex-column">
        <div class="tab">
        <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id">
            <div>
                <h3 class="form-title">Are you ?</h3>
            </div>
            <div>
                <div class="preferences-block">
                    <div class="preferences-flex">
                        <input type="checkbox" id="looking_for" name="looking_for" value="1" style="display: none;">
                        <label for="looking_for">
                            <div class="preference">
                                <div class="preference-detail">
                                    <!-- SPORT ICON -->
                                    <img src="{{url('svg/lookingfor.svg')}}" alt="heart" class="looking">
                                    <!-- ---- -->
                                    <h5>LOOKING FOR AN OFFER</h5>
                                </div>
                            </div>
                        </label>
                        <input type="checkbox" id="displaying" name="displaying" value="1" style="display: none;">
                        <label for="displaying">
                            <div class="preference">
                                <div class="preference-detail">
                                    <!-- SPORT ICON -->
                                    <img src="{{url('svg/displaying.svg')}}" alt="heart" class="looking">
                                    <!-- ---- -->
                                    <h5>DISPLAYING AN OFFER</h5>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab">
            <div>
                <h3 class="form-title">Let's start !</h3>
            </div>
            <div>
                <div class="preferences-block">
                    <div class="inputs">
                        <p>Title :</p>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="inputs">
                        <p>Description :</p>
                        <textarea id="desc" class="form-control @error('desc') is-invalid @enderror" name="desc"
                            required autofocus>
                        </textarea>

                        @error('desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="inputs">
                        <p>Date :</p>
                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror"
                            name="date" value="<?php echo date('Y-m-d'); ?>" required autocomplete="date" autofocus>

                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="tab">
            <div>
                <h3 class="form-title">Express yourself through images !</h3>
            </div>
            <div>
                <div class="preferences-block">
                    <div class="upload__box">
                        <div class="upload__btn-box">
                            <label class="upload__btn">
                                <p>Upload images</p>
                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile"
                                    name="image[]">
                            </label>
                        </div>
                        <div class="upload__img-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab">
            <div>
                <h3 class="form-title">Almost finished !</h3>
            </div>
            <div>
                <div class="preferences-block">
                    <div class="inputs">
                        <p>Type :</p>
                        <select name="type">
                            <option disabled selected hidden>Choose...</option>
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

                        @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="inputs">
                        <p>More type details :</p>
                        <input id="typeDetails" type="text"
                            class="form-control @error('typeDetails') is-invalid @enderror" name="typeDetails"
                            value="{{ old('typeDetails') }}"  autocomplete="typeDetails" autofocus>

                        @error('typeDetails')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="inputs">
                        <p>Location :</p>
                        <select name="location">
                            <option disabled selected hidden>Where...</option>
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

                        @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="tab">
            <div>
                <h3 class="form-title">Last step !</h3>
            </div>
            <div>
                <div class="preferences-block">
                    <div class="inputs">
                        <p>Price or budget :</p>
                        <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                            name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputs">
                        <p>Contact :</p>
                        <input id="num" type="tel" class="form-control @error('num') is-invalid @enderror" name="num"
                            required placeholder="Enter your phone number" value="{{ Auth::user()->num }}">

                        @error('num')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="inputs">
                        <input id="fb" type="text" class="form-control @error('fb') is-invalid @enderror" name="fb"
                            required placeholder="Enter your facebook" value="{{ Auth::user()->fb }}">

                        @error('fb')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="inputs">
                        <input id="insta" type="text" class="form-control @error('insta') is-invalid @enderror"
                            name="insta" required placeholder="Enter your instagram" value="{{ Auth::user()->insta }}">

                        @error('num')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:2vw;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </div>
</form>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
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
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        @font-face {
            font-family: 'steelfish' !important;
            src: url('/fonts/steelfish bd.otf') format('otf') !important;
            font-style: normal !important;
            font-weight: normal !important;
        }



        body {
            margin: 0;
            font-family: steelfish, Arial, Helvetica, sans-serif !important;
        }

        h1 {
            font-size: 4.5vw;
        }

        .w90 {
            width: 90%;
            display: block;
            margin: auto;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-1vw);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-1vw);
            }
        }




        /* GLOBAL MENU */

        .menu-global {
            display: flex;
            justify-content: space-between;
            background-color: white;
        }

        /* LOGO */

        .menu-left {
            width: 6vw;
        }

        .logo {
            width: 4.5vw;
            display: block;
            margin: auto;
            margin-top: 0.3vw;
            margin-bottom: 0.3vw;
        }

        /* MENU ITEMS (Home,catering....) */

        .topnav {
            display:flex;
            justify-content: space-around;
            background-color: white !important;
        }

        .topnav a {
            float: left;
            display: block;
            color: #03004d;
            text-align: center;
            margin: 1vw 1.5vw;
            text-decoration: none;
            font-size: 1.5vw;
        }

        .topnav a:hover {
            color: #da2400;
        }

        .topnav a.active {
            color: #da2400;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
                padding-right: 2.7vw;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: left;
                display: block;
                text-align: left;
            }
        }

        /* SEARCH BAR */

        .search-bar {
            background-color: white;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1vw;
        }

        .search-icon {
            width: 2vw;
            display: block;
            margin: auto;
        }

        .search-inputs form {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .input-group-text {
            background-color: white;
            color: #03004d;
            font-size: 1vw;
            height: 3vw !important;
        }

        select:focus,
        input:focus {
            outline: 0.1vw solid #03004d !important;
            box-shadow: none;
        }

        .input-group {
            width: 15vw !important;
            height: 3vw !important;
            padding: 0.5vw;
        }

        select,
        input,
        option {
            height: 3vw !important;
            font-size: 1vw !important;
        }

        ::placeholder,
        select option {
            font-size: 1vw !important;
        }

        .search-btn button {
            background-color: transparent;
            border: 0.2vw solid #da2400;
            border-radius: 2vw;
            color: #da2400;
            width: 7vw;
            font-size: 1.2vw;
            display: block;
            margin: auto;
        }

        .search-btn button:hover {
            background-color: #da2400;
            border: 0.2vw solid #da2400;
            color: white;
            cursor: pointer;
        }

        .custom-select {
            font-size: 1vw;
            background-size: 0.6vw;
        }

        @media screen and (max-width: 600px) {
            .search-bar {
                display: block;
                margin: auto;
            }

            .search-inputs form {
                display: block;
                width: 100% !important;
            }

            .input-group {
                width: 90% !important;
                height: 3vw !important;
                padding: 0.5vw;
                margin: auto;
                margin-top: 1vw;
                margin-bottom: 1vw;
            }

            .search-icon {
                display: none;
            }
        }


        /* TAKE A LOOK */

        .title {
            text-align: center;
            color: #03004d;
            margin-top: 3vw;
            margin-bottom: 5vw;
        }

        .blue-rec {
            width: 200%;
            height: 5vw;
            background-color: #03004d;
            position: absolute;
            top: 40%;
            -ms-transform: translate(-50%);
            transform: translate(-50%);
            z-index: -100;
        }

        .orange-rec {
            width: 200%;
            height: 5vw;
            background-color: #da2400;
            position: absolute;
            top: 40%;
            -ms-transform: translate(-50%);
            transform: translate(-50%);
            z-index: -100;
        }

        .take-a-look {
            position: relative;
            margin-bottom: 4vw;
        }

        .img-look {
            width: 100%;
        }

        .container {
            width: 25vw;
            margin: -1vw;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
        }

        .container:hover .overlay {
            opacity: 1;
        }

        .container:hover .img-look {
            filter: blur(0.15vw);
            transform: scale(1.1);
        }

        .text {
            color: white;
            font-size: 3.5vw;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .take-a-look-imgs {
            margin: auto;
            margin-top: 2vw;
            margin-bottom: 5vw;
            display: flex;
            justify-content: space-around;
            width: fit-content;
            align-items: center;
        }





        /* FOOTER */

        .footer {
            width: 100%;
            margin-top: 11vw;
            position: relative;
        }

        .img-footer {
            width: 100%;
        }

        .quote {
            position: absolute;
            right: 0.5vw;
            top: 4vw;
        }

        .quote p {
            font-size: 3vw;
            color: white;
        }

        .social-media {
            position: absolute;
            bottom: 1vw;
            left: 50%;
            -ms-transform: translate(-50%);
            transform: translate(-50%);
        }

        .social-media p {
            font-size: 2.5vw;
            color: #da2400;
            text-align: center;
        }

        .social-media-icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-media-icons-w {
            width: 12vw;
            display: block;
            margin: auto;
        }

        .sm-icon {
            width: 3.5vw;
            display: block;
            margin: auto;
            cursor: pointer;
        }

        .sm-icon:hover {
            transform: scale(1.2);
        }

        .logo-footer {
            width: 6vw;
            display: block;
            margin: auto;
            margin-top: 1.5vw;
        }


        /* ------------------------------------------------------------------------------------------------------- */

        /* TAKE A LOOK OTHER PAGES */

        .take-a-look1 {
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        .blue-rec-tk {
            width: 100%;
            height: 5vw;
            background-color: #03004d;
            position: absolute;
            top: 20%;
            z-index: -100;
        }

        .orange-rec-tk {
            width: 100%;
            height: 5vw;
            background-color: #da2400;
            position: absolute;
            bottom: 20%;
            z-index: -100;
        }

        .tk1 {
            width: 80%;
            align-self: flex-start;
            margin-bottom: -5vw;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }

        .tk2 {
            width: 80%;
            align-self: flex-end;
            overflow: hidden;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
        }

        .take-a-look-text {
            font-size: 4vw;
            color: black;
            text-align: center;
        }

        .tk-quote {
            font-size: 5vw;
            text-align: center;
            color: black;
        }

        /* HAVE A CLOSER LOOK */

        .closer-look {
            margin-bottom: 4vw;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 1vw;
            grid-row-gap: 1vw;
        }

        .card {
            display: block;
            margin: auto;
            position: relative;
            width: 90%;
            margin-bottom: 1vw;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .img-card {
            width: 100%;
            height: 22vw;
            object-fit: cover;
        }

        .card h3 {
      font-size: 2.6vw !important;
    }

    .card-type {
      color: #da2400;
      padding-left: 1vw;
    }

        .card-type {
            color: #da2400;
        }

        .card-title {
            color: black;
            text-align: center;
        }

        .price {
            text-align: center;
            font-size: 2vw;
            color: #4fa154;
        }

        .card-btn {
            float: right;
            background-color: transparent;
            color: #03004d;
            padding-right: 2.5vw;
            padding-left: 2.5vw;
            font-size: 2vw;
            height:3.1vw;
            width:11.5vw;
            cursor: pointer;
            margin-top: 1vw;
            box-shadow: #E6E6E6 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
            border:none;
            border-top-left-radius: 1vw;
        }

        .card-btn:hover {
            background-color: #E6E6E6;
            font-size: 1.8vw;
        }

        .heart {
            position: absolute;
            top: 0.7vw;
            right: 0.4vw;
            width: 2.4vw;
            filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.5));
            cursor: pointer;
        }

        .verify {
            position: absolute;
            bottom: 0.4vw;
            left: 1vw;
            height: 2vw;
        }

        .heart:hover {
            transform: scale(1.1);
        }

        p {
            margin-bottom: 0;
        }

        /* ------------------------------------------------------------------------------------------------------- */
        .question {
            text-align: center;
            color: #03004d;
            margin-top: 3vw;
        }

        .answer {
            margin-bottom: 2vw !important;
            text-align: center;
            color: #da2400;
            overflow: hidden;
            /* The typwriter cursor */
            white-space: nowrap;
            /* Keeps the content on a single line */
            margin: 0 auto;
            /* Gives that scrolling effect as the typing happens */
            letter-spacing: .12em;
            /* Adjust as needed */
            animation:
                typing 3.5s steps(30, end),
                blink-caret .5s step-end infinite;
        }

        /* The typing effect */
        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        /* The typewriter cursor effect */
        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: orange
            }
        }

        /* ADD POST */

        .addpost {
            width: 100%;
            background-image: url('../asset/backoffice/addpost-bg.png');
            background-size: 100%;
            padding-top: 1vw;
            padding-bottom: 1vw;
        }

        .feelfree {
            font-size: 3vw;
            color: white;
            text-align: center;
            margin-bottom: 0.6vw;
        }

        /* BUTTON ADD POST */

        .addpost-btn {
            padding: 0.4vw;
            background-color: rgb(255, 255, 255, 0.8);
            border: none;
            width: 100%;
            text-align: center;
            display: block;
            margin: auto;
            font-size: 2vw;
            cursor: pointer;
            color: #03004d;
        }

        .addpost-btn:hover {
            background-color: rgb(255, 255, 255);
            color: #da2400;
        }

        a {
            text-decoration: none !important;
        }

        /* FILTER */
        .open-button-filter {
            background-color: white;
            color: #03004d !important;
            padding: 0.3vw;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            border-radius: 2vw;
            border: none;
            cursor: pointer;
            width: 18vw;
            display: block;
            margin: auto;
            margin-bottom: 2.3vw;
        }

        .position-filter {
            position: relative;
            display: block;
            width: 100% !important;
        }

        /* The popup form - hidden by default */
        .form-popup-filter {
            display: flex;
            justify-content: space-between;
            width: 90vw;
            position: absolute;
            top: 0;
            right: 5vw;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container-filter {
            min-width: 90vw;
            padding: 1vw;
            background-color: white;
            margin: 0;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        /* Full-width input fields */
        .form-container-filter input[type=text],
        .form-container-filter input[type=password] {
            padding: 1vw;
            margin: 0.5vw;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container-filter input[type=text]:focus,
        .form-container-filter input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container-filter .btn-filter {
            background-color: #03004d;
            color: white;
            padding: 0.3vw;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            width: 9vw;
            float: right;
            font-size: 1.1vw;
        }

        .btn-float-height {
            height: 2vw;
        }

        /* Add a red background color to the cancel button */
        .form-container-filter .cancel-filter {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container-filter .btn-filter:hover,
        .open-button-filter:hover {
            opacity: 1;
        }

        /* LOGO FILTER */
        .open-button-filter svg {
            width: 3vw;
        }

        .icon-filter svg,
        .text-filter {
            vertical-align: middle;
            display: inline-block;
            margin: 0;
        }

        .text-filter {
            font-size: 1.5vw !important;
            text-align: center;
            color: #03004d !important;
        }

        .option-filter-title {
            color: #03004d;
            font-size: 2.2vw;
        }

        .filter-title-small {
            color: #03004d;
            font-size: 1.4vw;
            text-align: center;
        }

        #myForm-filter {
            display: none;
        }

        .filter-looking{
            width:25%;
            display:block;
            margin:auto;
        }

        /* CHECKBOX */

        .checkboxes label {
            display: inline-block;
            margin-bottom: 0 !important;
        }

        .checkboxes input {
            vertical-align: middle;
            height: 1vw;
            width: 1vw;
        }

        .checkboxes input:checked {
            accent-color: #da2400 !important;
        }

        .checkboxes label span {
            vertical-align: middle;
            font-size: 1.2vw;
        }

        /* FILTER FLEX */

        .filter-flex {
            display: flex;
            justify-content: space-around;
            margin-bottom: 1.5vw;
        }

        .filter-flex div {
            margin-left: 0.5vw;
        }

        .checkbox-flex {
            display: flex;
            justify-content: space-between;
        }

        /* CHANGE SUPPLIER/FINDER */

        .become{
            box-shadow: rgba(218, 36, 0, 0.4) 0px 2px 4px, rgba(218, 36, 0, 0.3) 0px 7px 13px -3px, rgba(218, 36, 0, 0.2) 0px -3px 0px inset;
            padding: 0.2vw;
            width: 13vw;
            height: 3vw;
        }

        .become:hover{
            background-color: rgb(218, 36, 0);
            color: white !important;
        }

        /* NAME AFTER AUTH */

        li{
            list-style:none;
        }

        .dropdown-menu{
            width: 8vw !important;
        }

        .dropdown-item{
            width: 8vw;
            height: 3vw;
            margin: 0 !important;
            text-align: left !important;
            font-size: 1.3vw !important;
        }

        .dropdown-item:focus{
            background-color:#F9FAFC !important;
        }

        /* PUBLISH COMMENT */

        .comment-publish{
            background-color: #03004d;
            border: none;
            font-size: 1vw;
            color: white;
            width: 7%;
            margin-left: 92%;
            margin-bottom: 1vw;
        }

        form{
    margin-block-end: 0 !important;
  }
    </style>
</head>

<body>

    <!-- MENU GLOBAL -->

    @yield('menu')

    <!-- NOTIF -->
    @if (Auth::check())
    @include('layouts.home.notif')
    @endif
    
    <!-- SEARCH GLOBAL -->
    @include('layouts.home.search')
    <!-- ADD POST -->
    @include('layouts.home.addpost')
    <!-- ------------------------------------------------------------------------------------------------- -->
    @yield('content')
    <!-- ------------------------------------------------------------------------------------------------- -->

    <!-- FOOTEER -->
    @include('layouts.home.footer-auth')

    <!-- SCRIPT MENU -->
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    <!-- SCRIPT FILTER -->

    <script>
        function openForm() {
          document.getElementById("myForm-filter").style.display = "block";
        }
      
        function closeForm() {
          document.getElementById("myForm-filter").style.display = "none";
        }
      </script>
      
</body>

</html>

@if (session('success'))
@include('layouts.auth.alert')
@endif 
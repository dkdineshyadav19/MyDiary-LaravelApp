<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Diary</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
               
            }

            .my-col1 {

                height: 90vh;
            }

            .my-col2 {

            height: 90vh;
            align-items: center;
            justify-content: center;
            }

            .my-col2 h1 {
            font-size: 10vh;
            }

            .btn-cont {
            margin-top: 1vh;
            }

            .btn-cont button {
            margin-left: 2vw;
            }

            .my-col3 {
            height: 90vh;
            background-image: url(/images/3.jpg);
            background-size: cover;
            background-position: center;

            }
            .para{
                font-size:2vh;
            }

            .icon-diary {
            margin-top: 5vh;
            margin-bottom: 12vh;
            }

            .featr1{
            height: 80vh;
            text-align: center;
             background-image: url(/images/26.jpg);
            background-size: cover;
            background-position: center;

            }
            .featr{
            height: 80vh;
            text-align: center;

            background-image: url(/images/26.jpg);
                color: white;
            background-size: cover;
            background-position: center;
;
            }

            .featr h1 {
            font-size:15vh ;
            }
            .features{

            height: 60vh;
            justify-content:center;
            align-items:center;
            flex-direction:column;

            }
            .features:hover{
             
                background: black;
                color:white;
            }
            .features4
            {
            background:#3f37c9;

            }
            .features1
            {
            background:#4361ee;

            }
            .features2
            {
            background:#4895ef;

            }
            .features3
            {
            background:#4cc9f0;

            }
            .feat-p{
            font-size:2.1vh ;
                color: white;
            }
            .cont{
              height: 80vh;
                color: white;
              background-image: url(/images/13.jpg);
            background-size: cover;
            background-position: center;
                align-items: center;
            justify-content: center;

            }
            .scroll{
                margin-top:5vh;
                writing-mode: vertical-rl;
            }
           .bg1{
            background-image: url(/images/0.jpg);
            background-size: cover;
            background-position: center;
           }
            @media screen  and (max-width:770px){
                .my-col1{
                        display:none;
                }
                my-col3 {
            background-position:center;

            }
            }

        </style>
        </head>

        <body>

            @extends('layouts.app')

            @section('content')
            @yield('content')
            <div class="container-fluid hero ">
                <div class="row d-flex flex-wrap ">
                    <div class="my-col1 col-lg-1 col-md-2  bg1">
                    </div>
                    <div class="my-col2 col-lg-5 col-md-5 bg-white d-flex flex-column">
                        <h1 class="font-weight-bold ">MY DIARY</h1>
                        <p class="text-center para">In the midst of the hustle and bustle of daily living, there is an indisputable need to keep a diary. Our minds also build up tons of emotions and our creativity comes alive. With so much bubbling within us, we have to let our thoughts and emotions flow into written or spoken words, not to mention the need to set reminders for upcoming events.</p>
                        <h5>Ready to start writing? Sign up now!</h5>
                        <div class=" btn-cont">
                        <a href="{{ route('register') }}"> <button type="button" class="btn btn-warning btn-lg font-weight-bold">Get Started</button></a>
                            <a href="#diary-feature"> <button type="button" class="btn btn-white btn-lg font-weight-bold ">Learn More     ──</button></a>
                        </div>
                    </div>
                    <div class="my-col3 col-lg-6 col-md-5 bg-warning"> </div>
                </div>
                <div class="row" id="diary-feature">
                    
                    <div class="featr col-lg-12 d-flex flex-column bg-dark justify-content-center align-items-end">
                    <div class="m-3"><h1>Features</h1> <h5 class=""> Features of diary exxagrate<br> or enhance the looks and experience of a user.</h5></div>
                    </div>
                    <div class="features features4 col-lg-6 d-flex "><h2>Available Everywhere</h2>  <p class="feat-p">You can use diary at everywhere anytime</p>  </div>
                    <div class="features features1 col-lg-6 d-flex ">
                    <h2>Public</h2> <p class="feat-p">Share your thoughts to the world</p>
                    <a href="{{ url('/public') }}"> <button type="button" class="btn btn-primary btn-lg">Visit</button></a>
                    </div>
                    <div class="features features2 col-lg-12 d-flex ">
                    <h2>100% Private</h2> <p class="feat-p">Keep some secrets in your own private diary</p>
                    <a href="{{ url('/private') }}"> <button type="button" class="btn btn-warning btn-lg">Private Diary</button></a>
                    </div>
                    
                </div>
                 <div class="row">
                    <div class="cont col-lg-12  d-flex flex-column "><h1>Contact</h1> <h4>we would like to help the user about any querry regardig the diary </h4>
                    <a href="{{ url('/contact') }}"> <button type="button" class="btn btn-dark btn-lg">Contact-Us</button></div></a>
                </div>

            </div>
            @endsection

        </body>

        </html>

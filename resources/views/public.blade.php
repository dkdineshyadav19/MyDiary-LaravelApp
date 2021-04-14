<style>
    .my-col2 {
        height: 40vh;
        justify-content: center;
        align-items: center;
    }

    .col2-h1 {
        font-size: 8vh;
        font-weight: bold;
    }

    .col2-h2 {
        font-size: 4vh;
    }

    .col2-p {
        font-size: 3vh;
    }

    .my-col1 {
        height: 50vh;
        writing-mode: vertical-rl;
        font-weight: bold;
        font-size: 4vh;

        background-image: url(/images/randomthoughts.svg);
        background-size: cover;
        background-position: center;
    }

    .my-col3 {
        height: 50vh;
        writing-mode: vertical-rl;
        font-weight: bold;
        font-size: 4vh;
        background-image: url(/images/4.jpg);
        background-size: cover;
        background-position: center;
    }

    .my-col4 {
        height: 50vh;
        justify-content: center;
        align-items: center;
        background-image: url(/images/stickynote.svg);
        background-size: cover;
        background-position: center;
    }

    @media screen and (max-width:770px) {



        .my-col2 {
            height: 60vh;
            flex-direction: column;
        }

        .my-colh1 {
            font-size: 3vh;
        }

    }
</style>
@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="my-col2 col-lg-12 col-md-12 col-sm-12 bg-white d-flex">
            <div class="col-lg-6 col-md-3  d-flex">
                <h1 class="col2-h1  mr-3 text-success">Create</h1>
                <h1 class="col2-h1  mr-3 text-secondary">Public</h1>
                <h1 class="col2-h1  text-success">Diary</h1>
            </div>
            <div class="col-lg-6 col-md-9 ">
                <h2 class="col2-h2">Share your unique interior thoughts publicly</h2>
                <p class="text-secondary col2-p">Public thoughts:-conventional-wisdom,
                 general belief, popular belief and prevailing belief, climate of opinion.
                </p>
                <a href="{{ url('/add-diary') }}"> <button type="button" class="btn btn-primary btn-lg font-weight-bold m-3 ">Create Diary</button></a>
            </div>
        </div>
        <div class="my-col1 col-lg-4 col-md-4 col-sm-12 bg-light">...</div>
        <div class="my-col3 col-lg-4 col-md-4 col-sm-12 bg-light">...</div>
        <div class="my-col4 col-lg-4 col-md-4 col-sm-12 bg-dark d-flex"> <a href="{{ url('/showpublic') }}"> <button type="button" class="btn btn-primary btn-lg font-weight-bold m-3 ">View All Public Posts</button></a></div>
    </div>
    <main>
        @yield('content')
        @yield('post')
    </main>
</div>

@endsection

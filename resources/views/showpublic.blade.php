<style>

.mycard{
        width:20vw;
       
}
body{
        background-size:cover;
        background-repeat: no-repeat;
        animation: changebackground 18s infinite;
}
@keyframes changebackground {
  0% {background-image: url("/images/a.jpg");}
  19% {background-image: url("/images/a1.jpg");}
  30% {background-image: url("/images/aa.jpg");}
  45% {background-image: url("/images/aaa.jpg");}
  65% {background-image: url("/images/aaaa.jpg");}
  85% {background-image: url("/images/aaaaaa.jpg");}
  100% {background-image: url("/images/aaaaaaa.jpg");}
}
.bgg{
  background:#4a9976;
}
</style>
@extends('layouts.app')
@section('content')
<div class="container-fluid">

<a href="{{ url('/showpublic') }}"> <button type="button" class="btn btn-primary btn-lg font-weight-bold m-3">Refesh</button></a>
<a href="{{ url('/add-diary') }}"> <button type="button" class="btn btn-primary btn-lg font-weight-bold  float-lg-right">Create Diary</button>
</a>

<div class="d-flex flex-wrap flex-row font-monospace fw-bold">
@foreach($members as $member)
<div class="card text-dark bg-success m-2 mycard" style="max-width: 18rem;">
            <div class="card-header font-monospace fw-bold text-light "><i>{{$member['created_at']}}</i></div>
            <div class="card-body">
            <h5 class="card-title text-light text-uppercase"><u><b><i>{{$member['title']}}</u></b></i></h5>
            <p class="card-text text-light lead">{{$member['story']}}</p>
            </div>
        </div>
    @endforeach
</div>
</div>
    @endsection
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
  20% {background-image: url("/images/aa.jpg");}
  40% {background-image: url("/images/aaa.jpg");}
  60% {background-image: url("/images/aaaa.jpg");}
  80% {background-image: url("/images/aaaaaa.jpg");}
  100% {background-image: url("/images/aaaaaaa.jpg");}
}
::selection {
    color: #fff;
    background-color: #005aee;
}

.text-card {
    position: relative;
    width: 370px;
    height: 470px;
    margin: 20px;
    padding: 50px;
    border-radius: 10px;
    font-family: 'neuzeit-grotesk', sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 1em;
    line-height: 1.5;
    color: #303336;
    background-color: #fff;
    box-shadow: 0 40px 40px -20px #8fc7d577;
}

.text-card .author-section {
    position: relative;
    display: flex;
    height: 40px;
}

.text-card .author-avator {
    width: 40px;
    height: 40px;
    border-radius: 40px;
    object-position: center;
    object-fit: cover;
}

.text-card .author-name {
    position: relative;
    display: inline-block;
    height: fit-content;
    font-weight: 700;
    font-size: .875em;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #000;
    transition: 250ms;
}

.text-card .author-avator-link {
    margin-right: 20px;
    border-radius: 40px;
}

.text-card .author-name-link {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    height: fit-content;
}

.text-card p {
    padding: 50px 0;
    line-height: 1.75;
    font-weight: 300;
    color: #7b8591;
}
.mybox{
    position:absolute;
    bottom:10px;
}

.b1 {
    padding: 10px 25px;
    border: 1px solid #ebebeb;
    border-radius: 50px;
    font-family: 'neuzeit-grotesk', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: .875em;
    line-height: 1.5;
    letter-spacing: 1px;
    color: #303336;
    background-color: #fff;
    cursor: pointer;
    transition: 300ms;
}

.b1:hover {
    border: 1px solid #bebebe;
}
@media only screen and (max-width: 425px) {

    .text-card {
        width: 100%;
        height: auto;
    }

}
</style>
@extends('layouts.app')
@section('content')
<div class="container-fluid random-back">

<a href="{{ url('/showprivate') }}"> <button type="button" class="btn btn-primary btn-lg font-weight-bold m-3">Refesh</button></a>
<a href="{{ url('/addprivate') }}"> <button type="button" class="btn btn-primary btn-lg font-weight-bold  float-lg-right">Create Diary</button>
</a>
<div class="d-flex flex-wrap flex-row font-monospace fw-bold ">
    @foreach($myprivates as $myprivate)
    <section class="text-card">
        <div class="content">
            <div class="author-section">
                <a href="#" class="author-avator-link"><img class="author-avator" src="/images/backpack.png" alt="Logo" width="40"></a>
                <a href="#" class="author-name-link"><h6 class="author-name">{{$myprivate['title']}}</h6></a>
            </div>
            <p>
            {{$myprivate['story']}}
            </p>
            <div class="d-flex mybox">
            <button class="b1 disabled">{{$myprivate['created_at']}}</button>
            <a href={{"edit/".$myprivate['id']}}><button type="button" class="btn btn-warning m-1">Edit</button>
            <a href={{"delete/".$myprivate['id']}}><button type="button" class="btn btn-danger m-1">Delete</button>
            </div>
        </div>
    </section>
    @endforeach
</div>
</div>
    @endsection
    
<style>

body{
        background-image: url("/images/f.jpg");
        background-size:cover;
      
        background-repeat: no-repeat;
}
.center1{
     margin-top:12vh;
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
   margin-bottom:1vh;
    padding: 50px 0;
    line-height: 1.75;
    font-weight: 300;
    color: #7b8591;
}
.mybox{
    position:absolute;
    bottom:20px;
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
<div class="container ">
<form action="/edit" method="post" class="center1">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<section class="text-card">
        <div class="content">
            <div class="author-section">
                <a href="#" class="author-avator-link"><img class="author-avator" src="/images/backpack.png" alt="Logo" width="40"></a>
                <a href="#" class="author-name-link"><h6 class="author-name"> <div class="mb-3">
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" name="title"  style="border:none" 
      value="{{$data['title']}}"
      >
      <span class="text-danger">@error('title'){{$message}}@enderror</span>
   </div></h6></a>
            </div>
            
            <p>
            <h6><b><span class="text-danger">@error('story'){{$message}}@enderror</span></b></h6>
            <div class="mb-3">
            
      <label for="exampleFormControlTextarea1" class="form-label text-light"><h4>Story</h4></label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="story" name="story"
      style="border:none;height:20vh;"> {{$data['story']}}</textarea>
      
   </div>
            </p>
            <div class="d-flex mybox">
            <button class="b1 disabled">{{$data['created_at']}}</button>
            </div>
        </div>
    </section>
   
   <button type="submit" class="btn btn-warning btn-lg">Update</button>
   </form>
   </div>
   @endsection
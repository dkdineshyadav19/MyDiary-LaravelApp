<style>

body{
        background-image: url("/images/h.jpg");
        background-size:cover;
      background-position:center;
        background-repeat: no-repeat;
}
.center1{
     margin-top:12vh;
}
</style>
@extends('layouts.app')
@section('content')
<div class="container">

<form action="save-diary" method="post" class="center1">
@csrf
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label text-warning"> <h4>Title</h4></label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" name="title" >
      <span class="text-danger">@error('title'){{$message}}@enderror</span>
   </div>
   
   <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label text-warning"><h4>Story</h4></label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="story" name="story" ></textarea>
   <span class="text-danger">@error('story'){{$message}}@enderror</span>
   </div>
   <button type="submit" class="btn btn-primary btn-lg">Create</button>
   </form>
   </div>
   @endsection
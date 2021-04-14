<style>
.my-col1{
       height:80vh;
       background-image: url("/images/11.jpeg");
        background-size:cover;
     filter: grayscale(10%);
        background-repeat: no-repeat;
        background-position: center;
        justify-content:center;
        align-items:center;
        color:black;
}
.my-col2{
       height:80vh;
       background-image: url("/images/port.svg");
        background-size:cover;
        background-repeat: no-repeat;

}
.my-col3{
       height:11vh;
    background-image: url("/images/texture1.jpg");
        background-size:cover;
        background-repeat: no-repeat;
}
.my-col4{
        height:11vh;
        background-image: url("/images/texture2.jpg");
        background-size:cover;
        background-repeat: no-repeat;
}
     .para{
                font-size:2vh;

            }
    .btn1{
        margin-top: 20vh;
        margin-bottom:5vh;
    }

</style>
@extends('layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="row">

        <div class="my-col1 col-lg-6 col-md-6 bg-light d-flex flex-column">

             <a class="btn btn-primary btn1" href="{{ url('/addprivate') }}" role="button">
             Create New Diary
            </a>
            <p class="text-center para">Try creating a new Diary.Add your <br>title and daily life story into the diary.</p>
        </div>
        <div class="my-col2 col-lg-6 col-md-6 bg-white d-flex">
           <p class="text-center para">View all your personal Diaries here. <br>You can Delete and Update your diaries at any time. </p>
           <a href="{{ url('/showprivate') }}">
            <button type="button" class="btn btn-primary btn-lg font-weight-bold m-3 ">Your Posts</button>
            </a>
         </div>
         <div class="my-col3 col-lg-6 col-md-6 bg-dark"></div>
         <div class="my-col4 col-lg-6 col-md-6 bg-white"></div>

    </div>
</div>
@endsection

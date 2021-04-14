<style>
    .d1{
        height:90vh;
        background: white;
    }
    .d2{
        height:90vh;
        background-image: url("/images/contactus.jpg");
        background-size:cover;
        background-repeat: no-repeat;
    }
    .middle{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    form {
  width: 710px;
  margin-left: 20vw;
  height: 208px;
  display: flex;
  justify-content: space-between;
}

h2 {
  margin-bottom: 80px;
  margin-left: 82px;
  font-family: 'Open Sans', sans-serif;
  font-weight: 700;
  font-size: 24px;
}

.left-form {
 width: 224px;
 display: block;
}

input {
  width: 224px;
  padding-bottom: 1em;
  border: none;
  border-bottom: 1px solid #2E2F22;
  font-size: 16px;
    outline: none;

}

    textarea {
  width: 224px;
  padding-bottom: 1em;
  border: none;
  border-bottom: 1px solid #2E2F22;
  font-size: 16px;
        outline: none;

}
.mess-input {
  margin-top: 10px;
}

button {
  margin-top: 50px;
  width: 224px;
  height: 45px;
  background: none;
  border-radius: 10px;
  font-size: 16px;
  border: 1px solid #2E2F22;
  box-sizing: border-box;
}
    .top{
        margin-top:5vh;
        margin-left:15vh ;
        margin-bottom:30vh;
    }
    .top p{
        font-weight: bold;
        color:black;
        font-size:5vh;
    }
    a{
        text-decoration: none;
    }
   </style>
@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="d1 col-lg-4">
       <div class="top">
       <a class="btn btn-primary" href="tel:+919729893060" role="button"><img src="/images/telephone.png" height="32px" width="32px"></a>
        <a class="btn btn-primary" href="mailto:dkdineshyadav19@gmail.com" role="button"><img src="/images/gmail.png" height="32px" width="32px"></a>
        </div>
        <div class="middle">
           <form action="check" method="post" >
           @csrf
      <div class="left-form">
      <input class="email-input" type="text" name="email" id="email" placeholder="email">
      <span class="text-danger">@error('email'){{$message}}@enderror</span>
  <textarea rows="6" placeholder="message" id="message" name="message" class="mess-input"></textarea>
  <span class="text-danger">@error('message'){{$message}}@enderror</span>
      <button type="submit">Send</button>
      <div class="m-3">
        
       </div>
    </div>
   
  </form>
        </div>
    </div>
<div class="d2 col-lg-8"></div>
</div>
</div>
@endsection
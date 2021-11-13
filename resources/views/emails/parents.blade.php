
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<link rel="stylesheet" href="input.css">
<script type="text/javascript" src="input.js"></script>  


<div class="container-fluid px-1 px-md-3 px-lg-1 px-xl-5 py-3 mx-auto">
  <div class="card card0 border-0">
      <div class="row d-flex">
          <div class="col-lg-6">
              <div class="card1 pb-0">
                  
                  <div class="row px-2 justify-content-center mt-4 mb-5 border-line"> <img src="48.jpg" class="image"> </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="card2 card border-0 px-6 py-5">
              
                  <div class="row px-3 mb-4">
                      <div class="line"></div> <h1>Add emails</h1>
                      <div class="line"></div>
                  </div>
<body>
 
<div>



    <form action="{{route('email.send')}}" method="post"> 
        @csrf
    <input type="text" id="email" name="email" placeholder="Enter Student email">
    <input type="text" id="sname" name="sname" placeholder="Enter Student Name">
    <input type="text" id="subject" name="subject" placeholder="Enter Subject">
    <input type="text" id="body" name="body" placeholder="Enter Body">

    
    <input type="submit" value="Send" class="btn btn-primary">
  </form>
</div>

</body>
</html>








































{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}

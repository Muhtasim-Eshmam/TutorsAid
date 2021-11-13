
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
                  <div class="row"> <img src="4.png" class="logo"> </div>
                  <div class="row px-2 justify-content-center mt-4 mb-5 border-line"> <img src="48.jpg" class="image"> </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="card2 card border-0 px-6 py-5">
              
                  <div class="row px-3 mb-4">
                      
                      <div class="line"></div>
                  </div>


<body>

<h3>Update marks</h3>

<div>

    
    

    <form action="{{ url('update/marksheet/'.$marksheet->id)}}" method="get"> 
      @csrf
      
      <input type="text" name="name" id="name "placeholder="Enter Student Name" value="{{$marksheet->name}}">
      <br>
      <input type="text" name="mock1" id="mock1 "placeholder="Enter mock1" value="{{$marksheet->mock1}}">
      <br>
      <input type="text" name="mock2" id="mock2 "placeholder="Enter mock2" value="{{$marksheet->mock2}}">
      <br>
      <input type="text" name="mock3" id="mock3 "placeholder="Enter mock3" value="{{$marksheet->mock3}}">
      <br>
      <input type="text" name="email" id="email "placeholder="Enter email" value="{{$marksheet->email}}">
      <br>
     
      {{-- <input type="text" name="mock" id="mock " value="{{$marksheet->average('marks');}}">
      <br> --}}
      
      
      <button type="submit" class="btn btn-primary">Add marks</button> <br> <br>
      
   </form>    

   
  
</div>

</body>
</html>

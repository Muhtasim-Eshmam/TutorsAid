
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
                        <div class="line"></div> <h1>Add attendance</h1>
                        <div class="line"></div>
                    </div>
<script>
    const d = new Date();
    const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    document.getElementById("demo").innerHTML = months[d.getMonth()];
    </script>

<body>

    {{-- <video autoplay muted loop id="myVideo">
        <source src="787.mp4" type="video/mp4"  frameborder="0">
        Your browser does not support HTML5 video.
      </video> --}}


    <div class="loginbox">
   
        
         <form action="{{route('attend.save')}}" method="post"> 
            @csrf
            
            <input type="text" name="name" id="name "placeholder="Enter sname">
            <br>
           
          
            <input type="text" name="subject" id="subject"placeholder="Enter subject">
            <br>
           
            {{-- <input type="text" name="date" id="date " value="{{$subjectheet->average('subject');}}">
            <br> --}}
            <input type="date" name="date" id="date "placeholder="Enter date">
            <br>
            <input type="text" name="month" id="month" placeholder="Enter month">
            <br>
            <button type="submit" class="btn btn-outline-primary">Add attendance</button> <br> <br>
            
         </form>    

    <button href="http://127.0.0.1:8000/" class="btn btn-outline-primary">Back </button> <br>
            
                
</body>
</head>
</html>

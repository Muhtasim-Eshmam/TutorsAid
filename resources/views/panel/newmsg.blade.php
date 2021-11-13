
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
    <form action="{{route('student.newmsg')}}" method="post"> 
        @csrf
        <div class="form-group">
            <label>Enter type</label>
            <input type="text"  id="title" name="title" placeholder=""  required autofocus >
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"></span>
            </div>
            <textarea class="form-control" aria-label="With textarea" id="msg" name="msg" placeholder="" required></textarea>
          </div><br>

        <div class="form-group">
            <input type="hidden"  id="name" name="name" placeholder="name" value="{{auth()->user()->name}}" >
        </div>
  
       




        <div class="d-grid mb-2">
          <button class="btn btn-primary " type="submit">Post</button>
          <a href="http://127.0.0.1:8000/showpanel" class="btn btn-primary">Panel</a><br>
    
        </div>



       
        <hr class="my-4">

        

      </form>

      <a href="http://127.0.0.1:8000/student" class="btn btn-primary">Back</a>
</div>

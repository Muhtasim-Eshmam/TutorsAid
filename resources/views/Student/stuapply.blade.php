<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('https://media.istockphoto.com/vectors/application-form-on-paper-sheet-agreement-document-in-flat-style-vector-id1195548220?k=20&m=1195548220&s=612x612&w=0&h=JhAF7MWgE6Ze_UM3WJTodePXN3KNQ-hHIsNrGIZxrOs=');
  background-size: cover;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}


</style>
</head>










<body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Apply Now</h5>
              <form action="{{route('studapply.save')}}" method="post"> 
                @csrf
  
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="taskid" name="taskid" placeholder="taskid"  required autofocus>
                 
                </div>
  
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
               
                </div>
  
                <hr>
  
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="education" name="education" placeholder="Education">
           
                </div>
  

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="grade" name="grade" placeholder="Enter Your Subject+Grades">
              
                  </div>
    
                
  
                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Apply</button>
                </div>
  
               
                <hr class="my-4">
  
                
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
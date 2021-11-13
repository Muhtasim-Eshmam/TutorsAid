
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
                    <div class="row"> <img src="48.jpg" class="logo"> </div>
                    <div class="row px-2 justify-content-center mt-4 mb-5 border-line"> <img src="48.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card2 card border-0 px-6 py-5">
                
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <h1>Add Notice</h1>
                        <div class="line"></div>
                    </div>
                    <form action="{{route('notice.save')}}" method="post"> 
                        @csrf
                        
                        <input type="text" name="title" id="title "placeholder="Enter title">
                        <br>
                       
                      
                        <input type="text" name="subject" id="subject"placeholder="Enter subject">
                        <br>
                       
                        {{-- <input type="text" name="date" id="date " value="{{$subjectheet->average('subject');}}">
                        <br> --}}
                        <input type="text" name="type" id="type "placeholder="Enter type">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Add Notice</button> <br> <br>
                        
                     </form>    
            
                <button ahref="http://127.0.0.1:8000/noticemenu" class="btn btn-outline-primary">Back </button> <br>
                        
                </div>
            </div>
        </div>
        {{-- <div class="bg-blue py-2">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; TutorsAid</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div> --}}
    </div>
</div>

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
                        <div class="line"></div> <h1>Add Submissions</h1>
                        
                        <div class="line"></div>
                    </div>


 <form method="POST" action="{{ route('submission.save') }}" enctype="multipart/form-data">
    @csrf 
<div class="form-group">
     <label for="image_file">+</label> 

    <div id="image_file" class="custom-file">
        <input id="image" name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror">
        <label for="image" class="custom-file-label">Upload</label>

        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<input type="text" name="class" id="class "  placeholder="Enter classno" >
            <br>
           
          
<input type="text" name="topic" id="topic"  placeholder="Enter topic">
            <br>
           
           
 <input type="text" name="description" id="description" placeholder="Enter theory if any">
            <br> 

<input type="text" name="name" id="name"  placeholder="Enter Name"  value="{{auth()->user()->name}}">
            <br>
           
           
<input type="text" name="email" id="email" placeholder="Enter Email" value="{{auth()->user()->email}}">
            <br>

<div class="form-group">
    <div class="">
        <button type="submit" class="btn btn-success">
            Submit
        </button>
        <a href="http://127.0.0.1:8000/showassign" class="btn btn-outline-primary">Exit</a>
    </div>
</div>
</form>

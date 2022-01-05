
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
                        <div class="line"></div> <h1>Add Assignments</h1>
                        <div class="line"></div>
                        <hr>
                    </div>
        <form accept-charset="UTF-8" action="{{route('assignment.save')}}" method="POST" > 
         @csrf
          <div class="form-group">
           <label for="exampleInputName">Topic</label>
           <input type="text" name="topic" class="form-control" id="topic" placeholder="Enter topic" required="required">
         </div>
         <div class="form-group">
           <label for="type" required="required">Due Date</label>
           <input type="text" name="duedate" class="form-control" id="duedate"  placeholder="Enter Due date">
         </div>
         <div class="form-group">
          <label for="description" required="required">Description</label>
          <input type="text" name="description" class="form-control" id="description"  placeholder="Enter Description">
        </div>
  
        <div class="form-group">
          <label for="description" required="required">Class No.</label>
          <input type="text" name="class" class="form-control" id="class"placeholder="Enter Class">
        </div>
         
         
         
         <hr>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>
       <a href="http://127.0.0.1:8000/assignmenu" class="btn btn-danger">Back</a> 
   </div> 
   
  
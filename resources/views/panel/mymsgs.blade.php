<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  


<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<link rel="stylesheet" href="chatroom.style.css">
<body>
    <div class="container content">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-6 col-sm-12 col-18">
                <div class="card">
                    <div class="card-header">Discussion panel   <a href="http://127.0.0.1:8000/student" class="btn btn-outline-primary float-right">Exit</a></div><a href="http://127.0.0.1:8000/showpanel" class="btn btn-primary">Panel</a></div>
                    <div class="card-body height3">
                        <ul class="chat-list">

                @foreach($newmsg as $row)
                @if(auth()->user()->name==$row->name)
                <a href="{{URL::to('delete/mymsgs/'.$row->id) }}" class="btn btn-sn btn-danger">Delete</a> 
                <a href="{{URL::to('edit/mymsgs/'.$row->id) }}" class="btn btn-sn btn-success">Update</a>
                            <li class="out">
                                <div class="chat-img">
                         
                                </div>
                                <div class="chat-body">
                                
                                    <div class="chat-message">
                                        <h5>{{ $row->name }}</h5>    
                                        <p>{{ $row->msg }}</p>
                                      
                                           
                                      
                                    </div>
                                 
                                </div>
                            </li>
              

@endif
@endforeach

               
          

</body>
</html>

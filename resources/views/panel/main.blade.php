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
                    <div class="card-header">Discussion panel   <a href="http://127.0.0.1:8000/student" class="btn btn-outline-primary float-right">Exit</a></div>
                    <div class="card-body height3">
                        <ul class="chat-list">

                            @foreach($newmsg as $row)
                @if(auth()->user()->name==$row->name)
                            <li class="out">
                                <div class="chat-img">
                                    <img alt="Avtar" >
                                </div>
                                <div class="chat-body">
                                
                                    <div class="chat-message">
                                        <h5>{{ $row->name }}</h5>    
                                        <p>{{ $row->msg }}</p>
                                      
                                    </div>
                                </div>
                            </li>
                            @else
                            

                            <li class="in">
                                <div class="chat-img">
                                    <img alt="Avtar" >
                                </div>
                                <div class="chat-body">
                                    <div class="chat-message">
                                        <h5> {{ $row->name }}</h5>
                                        <p> {{ $row->msg }}</p>
                                    </div>
                                </div>
                            </li>



@endif
@endforeach



<button class="open-button" onclick="openForm()">Chat</button> <br>


<div class="chat-popup" id="myForm">
    <form action="{{route('student.newmsg')}}" class="form-container"method="post"> 
        @csrf
        <div class="form-group">
            <label>Enter type</label>
            <input type="text"  id="title" name="title" placeholder=""  required autofocus >
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
             
            </div>
            <textarea class="form-control" aria-label="With textarea" id="msg" name="msg" placeholder="" required></textarea>
          </div><br>

        <div class="form-group">
            <input type="hidden"  id="name" name="name" placeholder="name" value="{{auth()->user()->name}}" >
        </div>
        <div class="d-grid mb-2">
          <button class="btn btn-primary " type="submit">Post</button>
       
          <button type="button" class="btn btn-primary" onclick="closeForm()">Close</button>
        </div>   
        <hr class="my-4">
      </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



</body>
</html>






{{-- 


                @foreach($newmsg as $row)
                @if(auth()->user()->name==$row->name)
                <div class="group-rom">
                    <div class="third-part">{{ $row->created_at->format('d-m-Y') }}</div>
                    <div class="second-part">{{ $row->msg }}</div>
                    <div class="first-part odd">{{ $row->name }}</div>
                  
                </div>

@else

<div class="group-rom">
    <div class="first-part odd">{{ $row->name }}</div>
    <div class="second-part">{{ $row->msg }}</div>
    <div class="third-part">{{ $row->created_at->format('d-m-Y') }}</div>
</div>

@endif



                @endforeach
                
            </aside>
            <!-- end:aside tengah chat room -->

            <!-- start:aside kanan chat room -->
           
            </div>
        </div>
        <!-- end:chat room -->
    </div>
</div>
</div> --}}
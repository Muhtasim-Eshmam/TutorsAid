<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
  <style>
 body {
  min-height: 100vh;
  
  /* background-color: #FFE53B; */
  /* background-image: linear-gradient(147deg, #FFE53B 0%, black 100%); */
  background-image: url('26.jpg');
            background-repeat: no-repeat;
  
             background-size: cover;
  }
</style>
<body>

<h3>Update studapply</h3>

<div>

    
    <form action="{{ url('update/studapply/'.$studapply->id)}}" method="get"> 
        @csrf
   
    <input type="text" id="taskid" name="taskid" placeholder="taskid" value="{{$studapply->taskid}}">
    <input type="text" id="name" name="name" placeholder="name"  value="{{$studapply->name}}">
    <input type="text" id="education" name="education" placeholder="education"  value="{{$studapply->education}}">
    <input type="text" id="grade" name="grade" placeholder="grade"  value="{{$studapply->grade}}">


    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

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
  background-image: url('96.jpg');
            background-repeat: no-repeat;
  
             background-size: cover;
  }
</style>
<body>

<h3>Update assistance</h3>

<div>

    
    <form action="{{ url('update/assistance/'.$assistance->id)}}" method="get"> 
        @csrf
   
    <input type="text" id="work" name="work" placeholder="work" value="{{$assistance->work}}">
    <input type="date" id="duedate" name="duedate" placeholder="duedate"  value="{{$assistance->duedate}}">
    <input type="text" id="description" name="description" placeholder="description"  value="{{$assistance->description}}">
    <input type="text" id="status" name="status" placeholder="status"  value="{{$assistance->status}}">


    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

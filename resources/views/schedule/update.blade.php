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

<h3>Update Schedule</h3>

<div>

    
    <form action="{{ url('update/schedule/'.$schedule->id)}}" method="get"> 
        @csrf
   
    <input type="text" id="subject" name="subject" placeholder="subject" value="{{$schedule->subject}}">
    <input type="date" id="date" name="date" placeholder="date"  value="{{$schedule->date}}">
    <input type="text" id="time" name="time" placeholder="time"  value="{{$schedule->time}}">
    <input type="text" id="bookname" name="bookname" placeholder="bookname"  value="{{$schedule->bookname}}">
    <input type="text" id="price" name="price" placeholder="price"  value="{{$schedule->price}}">
    <input type="text" id="store" name="store" placeholder="store"  value="{{$schedule->store}}">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<link rel="stylesheet" href="input.css">
<script type="text/javascript" src="input.js"></script>  



<h3>Update income</h3>

<div>

    <body>
      
    <form action="{{ url('update/income/'.$income->id)}}" method="get"> 
        @csrf
        <input type="text" name="name" id="sname " value="{{$income->name}}" >
    
        <input type="month" name="month" id="month "value="{{$income->month}}">
     
        <input type="text" name="amount" id="amount "value="{{$income->amount}}">
   
        <input type="text" name="email" id="email "value="{{$income->email}}">
       
        <input type="text" name="status" id="status "value="{{$income->status}}">
        
  


    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

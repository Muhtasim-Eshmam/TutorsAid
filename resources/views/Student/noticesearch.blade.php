<!DOCTYPE html>
<html>
<head>
    <title>Notice panel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  </head>
<body>
  <div class="container py-5">
    <header class="text-center text-white">
      <h1 class="display-6">Notice</h1><br>
    {{-- <a href="/store/attend">Add department</a> --}}
    <input type="text" name="search" id="search" placeholder="Enter your keyword" class="form-control search-box">

   
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
       
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>      
              
     <tr class="info" >
<tbody class="generaldata">
    @foreach($notice as $key=>$data)
<tr>


    <td>{{++$key}}</td>
    
    <td> {{ $data->title }} </td>
    <td> {{ date_format($data->created_at,'D M Y') }}</td>
    <td> {{ $data->subject }} </td>
    <td> {{ $data->type }} </td>

    {{-- <td><a href="/attend/{{$data->id}}/edit"> Edit</a>| <a onclick="return confirm('are you sure delete this data')" href="/department/delete/{{$data->id}}"> Delete</a></td> --}}

</tr>
    @endforeach
</tbody>
    <tbody id="Content" class="ajaxdata"></tbody>
</table>

<script type="text/javascript">
    $("#search").on('keyup',function(){
        $value=$(this).val();
        if($value){
            $(".generaldata").hide();
            $(".ajaxdata").show();
        }else{
            $(".generaldata").show();
            $(".ajaxdata").hide();
        }

          $.ajax({
                        type:'get',
                        url:'{{URL::to('search')}}',
                        data : {'search':$value},
                        success:function(data){
                            console.log(data);
                          $('#Content').html(data);
                        }
                    });
    })
</script>
</body>
</html>
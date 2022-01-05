<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  
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
  <div class="container py-5">
    <header class="text-center text-white">
      <h1 class="display-6"> {{ Auth::user()->name }}'s Marksheet</h1>
      
   
          {{-- <u>Datatables</u></a>, add interaction controlsto your HTML tables.</p>
      <p class="font-italic">Snippet By
        <a href="https://bootstrapious.com" class="text-white">
          <u>Bootstrapious</u> --}}
        </a>
      </p>
  
     
    </header>
  
   
    <div class="row py-5">
      <div class="col-lg-10 mx-auto">
        @foreach($marksheet as $row)

               
        @if ($row->name==auth()->user()->name )   
        <div class="card rounded shadow border-0">
          <div class="card-body p-9 bg-white rounded">
            <div class="table-responsive">
              {{-- Class Average:   <div class="text-success">    {{number_format($sum)}}</div><br> --}}
              <table id="example" style="width:100%" class="table table-striped table-bordered">
                <thead>
  
                      <tr class="info" >
                        {{-- <th> Id </th> --}}
                        <th> Email </th>
                        <th> Mock 1</th>
                        <th> Mock 2</th>
                        <th> Mock 3</th>
                        <th> Your average</th>
                        <th> Posted at </th>
                       
                    
                     
                </tr>

                <tr  >                                                                
                  
                        <td> {{ $row->email }} </td>
                        <td @if($row->mock1 < 55 )class="text-danger" @endif> {{ $row->mock1 }} </td>
                        <td @if($row->mock2 < 55 )class="text-danger" @endif> {{ $row->mock2 }} </td>
                        <td @if($row->mock3 < 55 )class="text-danger" @endif> {{ $row->mock3 }} </td>
                        <td @if($row->mock3+ $row->mock2+ $row->mock1<180) class="text-danger"  @endif)> {{number_format(($row->mock3+ $row->mock2+ $row->mock1)/3 ) }} </td>
                        {{-- <td @if($row->marks < 55 )class="text-danger" @endif> {{ $row->marks }} </td> --}}
             
                        <td class="text-dark"> {{ $row->created_at }} </td>

                  
                
                   
              </table>
             
              <canvas id="myChart" style="width:100%;max-width:500px"></canvas>

              
              <script>
                var xValues = ["Mock1", "AVG1", "Mock2", "AVG2", "Mock3", "AVG3"];
                var yValues = [{{$row->mock1}}, {{$sum1}} , {{$row->mock2}} , {{$sum2}} , {{ $row->mock3 }} , {{$sum3}} ];
                var barColors = ["#32c1f5", "#0e68f3","#32c1f5","#0e68f3","#32c1f5","#0e68f3"];
                
                new Chart("myChart", {
                  type: "bar",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Results "
                    },
                    scales: {
                    
                    yAxes: [{ticks: {min: 0, max:100}}],
                  }
                  }
                });
              
              
                            </script>
                            

  @endif
  @endforeach
  

</tr>
                    

            </div>
          </div>
          
        </div>
      


        <br>
       
              <a href="http://127.0.0.1:8000/student" class="btn btn-danger">Exit</a> 
      </div>
    </div>
  </div>

  
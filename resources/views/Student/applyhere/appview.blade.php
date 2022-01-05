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
  </head>
  <div class="container py-5">
    <header class="text-center text-white">
      <h1 class="display-6">Check Applications</h1>
      
    <a href="{{ url()->previous () }}" class="btn btn-danger">Close</a> 
          {{-- <u>Datatables</u></a>, add interaction controlsto your HTML tables.</p>
      <p class="font-italic">Snippet By
        <a href="https://bootstrapious.com" class="text-white">
          <u>Bootstrapious</u> --}}
        </a>
      </p>
  
     
    </header>
  
   
    <div class="row py-5">
      <div class="col-lg-18 mx-auto">
        <div class="card rounded shadow border-0">
          <div class="card-body p-9 bg-white rounded">
            <div class="table-responsive">
              <table id="example" style="width:100%" class="table table-striped table-bordered">
                <thead>
  
  
                    
  
                   
  
                      <tr class="info" >
                        {{-- <th> Id </th> --}}
                        {{-- <th> ID </th> --}}
                        <th> Applicants Name </th>
                        <th> Task </th>
                        <th> Applicants Education </th>
                        <th> Subjects(Grades) </th>
                        <th> Applied at </th> 
                       <th> Action </th> 
                    
                        
                </tr>
                @foreach($studapply as $row)
                @if ($row->name==auth()->user()->name )   
                     <tr>
                {{-- <tr @if ($row->marks< 50) class="text-danger"
                     @elseif ($row->marks == 100) class="text-success" 
                     @elseif ($row->marks> 50 && $row->marks< 60 ) class="text-warning"@endif> --}}
                        {{-- <td> {{ $row->id }} </td> --}}
                        {{-- <td> {{ $row->id }} </td> --}}
                        <td> {{ $row->name }} </td>
                        <td> {{ $row->taskid }} </td>
                        <td> {{ $row->education }} </td>
                        <td> {{ $row->grade }} </td>
                        <td> {{ $row->created_at }} </td> 
                      
                        <td>
                           
                            <a href="{{URL::to('delete/studapply/'.$row->id) }}" class="btn btn-sn btn-danger">Delete</a> 
                            <a href="{{URL::to('edit/studapply/'.$row->id) }}" class="btn btn-sn btn-success">Update</a>
                        </td>
                    </tr>
                    @endif
                   @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




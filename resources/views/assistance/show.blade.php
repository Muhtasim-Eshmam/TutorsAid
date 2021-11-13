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
  </head>
  <div class="container py-5">
    <header class="text-center text-white">
      <h1 class="display-6">Assistance</h1>
      
    <a href="{{ url()->previous () }}" class="btn btn-success">Close    </a> 
    <a href="http://127.0.0.1:8000/admin" class="btn btn-danger">Exit</a> 
          {{-- <u>Datatables</u></a>, add interaction controlsto your HTML tables.</p>
      <p class="font-italic">Snippet By
        <a href="https://bootstrapious.com" class="text-white">
          <u>Bootstrapious</u> --}}
        </a>
      </p>
    </header>
  <body>
   
    <div class="row py-5">
      <div class="col-lg-10 mx-auto">
        <div class="card rounded shadow border-0">
          <div class="card-body p-9 bg-white rounded">
            <div class="table-responsive">
              <table id="example" style="width:100%" class="table table-striped table-bordered">
                <thead>
  
  
                    
  
                    {{-- <div class="form-outline">
                        <input type="search" id="form1" class="form-control" placeholder="Type query"
                        aria-label="Search" />
                      </div><br> --}}
  
{{--   
                      
  
                      <tr class="info" >
                        {{-- <th> Id </th> --}}
                        <th> ID </th>
                        <th> Work</th>
                        <th> Due Date </th>
                        <th> Description </th>
                        <th> Status </th>
                        <th> Date </th>
                        <th> Action </th>
                        
                </tr>
                @foreach($assistance as $row)
                <tr @if ($row->status!="3/3") class="text-success"
                     @elseif ($row->status == "3/3") class="text-danger" 
                     @endif>
                        {{-- <td> {{ $row->id }} </td> --}}
                        <td> {{ $row->id }} </td>
                        <td> {{ $row->work }} </td>
                        <td> {{ $row->duedate }} </td>
                        <td> {{ $row->description }} </td>
                        <td> {{ $row->status }} </td>
                      
                        <td > {{ $row->created_at }} </td>
                      
                        <td>
                          {{-- @if ($row->status!="3/3") --}}
                             {{--<a href="{{URL::to('delete/donate/'.$row->id) }}" class="btn btn-sn btn-danger">Delete</a>--}}
                            <a href="{{URL::to('edit/assistance/'.$row->id) }}" class="btn btn-sn btn-success">Update</a>
                            {{-- @endif --}}
                        </td> 
                    </tr>
                   @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
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
  background-image: url('26.jpg') ;
            background-repeat: no-repeat;
          
  
             background-size: cover;
  }
  </style>
  </head>
  <div class="container py-5">
    <header class="text-center text-white">
      <h1 class="display-6">Students here</h1>
      
   
    <a href="http://127.0.0.1:8000/admin" class="btn btn-danger">Exit</a> 
          {{-- <u>Datatables</u></a>, add interaction controlsto your HTML tables.</p>
      <p class="font-italic">Snippet By
        <a href="https://bootstrapious.com" class="text-white">
          <u>Bootstrapious</u> --}}
        </a>
      </p>
  
     
    </header>
  
   
    <div class="row py-5">
      <div class="col-lg-20 mx-auto">
        <div class="card rounded shadow border-0">
          <div class="card-body p-9 bg-white rounded">
            <div class="table-responsive">
              <table id="example" style="width:100%" class="table table-striped table-bordered">
                <thead>
  
  
                    
  
                    {{-- <div class="form-outline">
                        <input type="search" id="form1" class="form-control" placeholder="Type query"
                        aria-label="Search" />
                      </div><br> --}}
  
  
                      {{-- <form action="{{ route('search') }}" class="d-flex" method="post"> 
                        @csrf
                        <input class="form-control search-box" type="search" name="string" placeholder="Search name" aria-label="Search">
                        {{-- <button class="btn btn-outline-primary btn-search btn-sm" type="submit">Search<span data-feather="search" class="p-1"></span></button> 
                    </form> --}}
 
  
  
  
  
  
  
                      <tr class="info" >
                        {{-- <th> Id </th> --}}
                        <th>ID</th>
                        <th> Name</th>
                        <th> Email </th>
                        <th> Password </th>
                        <th> Date Joined </th>
                        <th> Action </th>
                        {{-- <th>{{$month}}</th> --}}
                     
                </tr>
                @foreach($User as $row)
                <tr >
                        {{-- <td> {{ $row->id }} </td> --}}
                        <td> {{ $row->id }} </td>
                        <td> {{ $row->name }} </td>
                        <td> {{ $row->email }} </td>
                        <td> {{ $row->password }} </td>
                        <td> {{ $row->created_at}} </td>
                      
                        {{-- @if($month=!$row->created_at->format('m')) --}}
                        <td>
                          <a href="{{URL::to('edit/User/'.$row->id) }}" class="btn btn-sn btn-success">Block</a>
                            <a href="{{URL::to('delete/User/'.$row->id) }}" class="btn btn-sn btn-danger">Terminate</a>
                            
                        </td> 
{{-- @endif --}}
                      
                    </tr>
                   @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
      <h1 class="display-6">Submissions</h1>
      
 
    <a href="http://127.0.0.1:8000/assignmenu" class="btn btn-danger">Exit</a> 
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
                        <th> Student Name </th>
                        <th> Student Email </th>
                        <th> Topic</th>
                        <th> Class</th>
                        <th> Theory </th>
                       
                     
                        <th> Submission </th>
                        <th> Date </th>
                        
                </tr>
                @foreach($submission as $row)

                
                <tr>
                        {{-- <td> {{ $row->id }} </td> --}}
                        <td> {{ $row->name }} </td>
                        <td> {{ $row->email }} </td>
                        <td> {{ $row->topic }} </td>
                        <td> {{ $row->class }} </td>
                        <td> {{ $row->description }} </td>
                       
                        
                      
                        <td>  <img src="{{ ($row->image_path) ?  $row->image_path : asset('images/No_Image_Available.jpg') }} " alt="image" width="30px" height="30px" data-toggle="modal" data-target="#something{{ $loop->index }}" > </td>
                        <div class="modal fade "  id="something{{ $loop->index }}" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg ">
                                <div class="modal-content">
                                    <div class="modal-body text-danger font-weight-bold ">
                                        
                                        <img src="{{ ($row->image_path) ?  $row->image_path : asset('images/No_Image_Available.jpg') }} " alt="image"  width="400px" height="400px" data-toggle="modal" data-target="#image0">
                                    
                                    </div>
                        
                                   
                                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                                   
                                </div>
                            </div>
                        </div>

                        <td > {{ $row->created_at }} </td>
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
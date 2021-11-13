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
      <h1 class="display-6">Income Tab View</h1>
    
    </header>
  
    <nav class="navbar navbar-expand-md navbar-dark">
        </nav>

   
    <div class="row py-5">
      <div class="col-lg-10 mx-auto">
        <div class="card rounded shadow border-0">
          <div class="card-body p-9 bg-white rounded">
            <div class="table-responsive">
              <table id="example" style="width:100%" class="table table-striped table-bordered">
                <thead>


                    
                  <a href="http://127.0.0.1:8000/admin" class="navbar-brand">Back</a>
                  <form action="{{ route('searchsalary') }}" class="d-flex" method="post"> 
                    @csrf
                    <input class="form-control search-box" type="search" name="string" placeholder="Search name" aria-label="Search">
                    {{-- <button class="btn btn-outline-primary btn-search btn-sm" type="submit">Search<span data-feather="search" class="p-1"></span></button> --}}
                </form>
<br>
                <tr>
                        {{-- <th> Id </th> --}}
                        <th> ID </th>
                        <th> Student Name </th>
                        <th> Month </th>
                        <th> Amount </th>
                        <th> email </th>
                        <th> Status </th>
                        <th> Date </th>
                        <th> Action </th>
                        {{-- <th> Action </th> --}}
                </tr> 
            
                @foreach($income as $row)
                <tr>
                        {{-- <td> {{ $row->id }} </td> --}}
                        <td> {{ $row->id }} </td>
                        <td> {{ $row->name }} </td>
                        <td> {{ $row->month }} </td>
                        <td> {{ $row->amount }} </td>
                        <td> {{ $row->email }} </td>
                        <td @if ($row->status=="advpaid" ) class="text-success" 
                          
                          @elseif ($row->status=="notpaid")class="text- danger" 
                          @endif> {{ $row->status }} </td>

                        <td> {{ $row->created_at }} </td>
                   
                        
                        <td>
                          
                            
                            <a href="{{URL::to('edit/income/'.$row->id) }}" class="btn btn-sn btn-success">Update</a>
                        </td>  
                      
                
                </div>
                @endforeach
             
                  </tr>
                </tbody>
              
              </table>
            Total in account :  {{ $sum }} <br>
            No. of students who paid:  {{ $plus}}  <br>
            No. of students who paid advance:  {{ $adv}} 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
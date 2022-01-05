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
      <h1 class="display-6">View Notes here</h1>
      
    <a href="{{ url()->previous () }}" class="btn btn-success">Close    </a>  

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
  
        
                <tr>
                    <th scope="col">Class No</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Image</th>
               
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $row)
                <tr>
                      
                    <td>{{$row->classno}}</td>
                    <td>{{$row->topic}}</td>
                    <td>{{$row->subject}}</td>
                    <td>  <img src="{{ ($row->image_path) ?  $row->image_path : asset('images/No_Image_Available.jpg') }} " alt="image" width="30px" height="30px" data-toggle="modal" data-target="#something{{ $loop->index }}" > </td>
                    <div class="modal fade "  id="something{{ $loop->index }}" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg ">
                            <div class="modal-content">
                                <div class="modal-body text-danger font-weight-bold ">
                                    
                                    <img src="{{ ($row->image_path) ?  $row->image_path : asset('images/No_Image_Available.jpg') }} " alt="image"  data-toggle="modal" data-target="#image0">
                                
                                </div>
                    
                               
                                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                               
                            </div>
                        </div>
                    </div>

                   
                         
              
                </tr>
              
                @endforeach


{{-- 
             <script>
 document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 300);

                 </script> --}}
            </tbody>
        </table>
      
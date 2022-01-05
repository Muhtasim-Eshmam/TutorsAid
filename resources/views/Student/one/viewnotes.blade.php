
        <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        
        <style>
        body {
        min-height: 100vh;
        
        background-color:white;
        /* background-image: linear-gradient(147deg, #FFE53B 0%, black 100%); */
        /* background-image: url('26.jpg'); */
                  background-repeat: no-repeat;
        
                   background-size: cover;
        }
        
        </style>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Class No </th>
                    <th scope="col">Topic </th>
                    <th scope="col">Subject </th>
                    <th scope="col">Image </th>
                
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

                    <td>


                    </td>
                         
              
                </tr>
              
                @endforeach



             
            </tbody>
        </table>
      
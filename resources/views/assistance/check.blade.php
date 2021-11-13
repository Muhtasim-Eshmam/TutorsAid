
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>



<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: url('96.jpg');
  
    background-size:cover;
  background-attachment: fixed;
  background-position: center center;
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px
}

.card2 {
    margin: 5px 10px
}

.logo {
    width: 50px;
    height: 50px;
    margin-top: 20px;
    margin-left: 35px
}

.image {
    width: 460px;
    height: 420px
}

.border-line {
    border-right: 1px solid #EEEEEE
}





.or {
    width: 10%;
    font-weight: bold
}

.text-sm {
    font-size: 14px !important
}

::placeholder {
    color: #BDBDBD;
    opacity: 2;
    font-weight: bold;
    font-size: 20px;
}

:-ms-input-placeholder {
    color: #BDBDBD;
    opacity: 2;
    font-weight: bold;
    font-size: 20px;
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    background-color: 
    outline-width: 0
}

a {
    color: inherit;
    cursor: pointer
}

.btn-blue {
  background-color: #0590c1;
  
    width: 150px;
    color: #fff;
    border-radius: 2px
}

.btn-blue:hover {
    background-color: #81b6f7;
    color: #EEEEEE
    cursor: pointer
}

.bg-blue {
    color: #fff;
  background-color: #0590c1;
    
}

@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px
    }

    .image {
        width: 300px;
        height: 520px
    }

    .border-line {
        border-right: none
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px
    }
}
</style>
</head>



<div class="container-fluid px-1 px-md-3 px-lg-1 px-xl-5 py-3 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-0">
                    <div class="row"> <img src="4.png" class="logo"> </div>
                    <div class="row px-2 justify-content-center mt-4 mb-5 border-line"> <img src="48.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card2 card border-0 px-6 py-5">
                
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <h1>Welcome Please enter the code</h1>
                        <div class="line"></div>
                    </div>
                    <form action="{{route('assist.check')}}" method="get">
                        @csrf
                    
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-3 text-lg">Security Key</h6>
                        </label> <input type="text" name="loc" id="loc "placeholder="Enter Security key"> </div>
                    <div class="row px-3 mb-4">
                      
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button> </div>
                    
                </div>
            </div>
        </div>
        {{-- <div class="bg-blue py-2">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; TutorsAid</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div> --}}
    </div>
</div>
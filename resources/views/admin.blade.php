<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="style.js"></script>  

</head>

<body>






  <header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
			<a href="http://127.0.0.1:8000/" class="navbar-brand">TutorsAid </a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					{{-- <li><a href="#" class="nav-item nav-link active">Home</a></li>
					<li><a href="#" class="nav-item nav-link">About Us</a></li> --}}


					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Email</a>
						<div class="dropdown-menu">
              <a href="http://127.0.0.1:8000/parents" class="dropdown-item">Email parents<a>
            
						</div>
					</li>

					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Reg Students</a>
						<div class="dropdown-menu">
              <a href="http://127.0.0.1:8000/regstudents" class="dropdown-item">View Reg students</a>
            
						</div>
					</li>

					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Income</a>
						<div class="dropdown-menu">
              <a href="http://127.0.0.1:8000/incometab" class="dropdown-item">Incometab</a>
              <a href="http://127.0.0.1:8000/incomeshow" class="dropdown-item">IncomeShow</a>
						</div>
					</li>

         

					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Notes
            </a>
			<div class="dropdown-menu">
				<a href="http://127.0.0.1:8000/create" class="dropdown-item">Post</a>
				<a href="http://127.0.0.1:8000/index" class="dropdown-item">Check</a>
						  </div>
						<div class="dropdown-menu">

            		
						</div>
					</li>


          <li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Attendance</a>
						<div class="dropdown-menu">
							<a href="http://127.0.0.1:8000/attend" class="dropdown-item">Give Attendance</a>
              <a href="http://127.0.0.1:8000/attendview" class="dropdown-item">Check Attendance</a>
            	
						</div>
					</li>




				</ul>
			</div>
		</div>
	</nav>

  



	<div class="banner">
		<div class="container">
      <br>
      <br>
			<h1>Welcome To TutorsAid</h1>
		
	
      <a href="http://127.0.0.1:8000/schedulemenu" class="button button-primary">Upload class schedule</a><br>
      <a href="http://127.0.0.1:8000/noticemenu" class="button button-primary">Notice</a><br>
      <a href="http://127.0.0.1:8000/studentmsgs" class="button button-primary">Discussion Panel</a><br>
      
      <a href="http://127.0.0.1:8000/marksheetmenu" class="button button-primary">Marksheets</a><br>
      <a href="http://127.0.0.1:8000/assistancemenu" class="button button-primary">Post Assistance</a><br>
      
		</div>
	</div>
</header>




<main>
	<section id="content" class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie. Pellentesque vestibulum dui sit amet dui volutpat sollicitudin. Etiam non erat finibus, iaculis nunc vel, convallis eros. Etiam efficitur tempor dui, vitae fringilla ipsum tristique quis. Aliquam erat volutpat. Cras ullamcorper ex et viverra vulputate. Nam lectus ligula, pretium nec risus nec, ultricies fringilla mauris. Proin quis venenatis neque, iaculis porta nulla. </p>
				</div>
				<div class="col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie. Pellentesque vestibulum dui sit amet dui volutpat sollicitudin. Etiam non erat finibus, iaculis nunc vel, convallis eros. Etiam efficitur tempor dui, vitae fringilla ipsum tristique quis. Aliquam erat volutpat. Cras ullamcorper ex et viverra vulputate. Nam lectus ligula, pretium nec risus nec, ultricies fringilla mauris. Proin quis venenatis neque, iaculis porta nulla. </p>
				</div>
				<div class="col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie. Pellentesque vestibulum dui sit amet dui volutpat sollicitudin. Etiam non erat finibus, iaculis nunc vel, convallis eros. Etiam efficitur tempor dui, vitae fringilla ipsum tristique quis. Aliquam erat volutpat. Cras ullamcorper ex et viverra vulputate. Nam lectus ligula, pretium nec risus nec, ultricies fringilla mauris. Proin quis venenatis neque, iaculis porta nulla. </p>
				</div>
			</div>
		</div>
	</section>
</main>
</body>

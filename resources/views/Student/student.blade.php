<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>TutorsAid- Student Panel</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="48.ipg">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="constra/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="constra/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="constra/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="constra/plugins/slick/slick.css">
  <link rel="stylesheet" href="constra/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="constra/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="constra/css/style.css">

</head>
@extends('layouts.app')
<body>

  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 TutorsAid Incorporate, USA</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="48.jpg" alt="TutorsAid">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle"><a href="#">01776495947</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle"><a href="mailto:office@TutorsAid.com">office@TutorsAid.com</a></p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>

                  <a href="http://127.0.0.1:8000/home" class="btn btn-outline-primary">Home</a></li>
                  
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      
                      <li class="nav-item dropdown active">
                        
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Discussion Panel <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="active"><a href="http://127.0.0.1:8000/showpanel">Open Panel</a></li>
                            <li><a href="http://127.0.0.1:8000/newmsg">Post</a></li>
                            <li><a href="http://127.0.0.1:8000/showmsgs">View my posts</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown active">
                        
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Notes<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                         
                          <li><a href="http://127.0.0.1:8000/viewnotes">View</a></li>
                        </ul>
                    </li>

                      <li class="nav-item dropdown">
                         
                          {{-- <ul class="dropdown-menu" role="menu">
                            <li><a href="about.html"></a></li>
                            <li><a href="team.html">Our People</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                          </ul> --}}
                      </li>
              
                      <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/marksview">Marksheets</a></li>

                      <li class="nav-item dropdown">
                        <a href="http://127.0.0.1:8000/payments" class="nav-link dropdown-toggle" data-toggle="dropdown">Payments</i></a>
                        
                    </li>
                      <li class="nav-item dropdown">
                          <a href="http://127.0.0.1:8000/assistcheck" class="nav-link dropdown-toggle" data-toggle="dropdown">Apply Here <i class="fa fa-angle-down"></i></a>
                         
                      </li>
              
                     
              
                      <li class="nav-item dropdown">
                          <a href="http://127.0.0.1:8000/viewattend" class="nav-link dropdown-toggle" >Attendance <i class="fa fa-angle-down"></i></a>
                          
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="http://127.0.0.1:8000/noticeshow" class="nav-link dropdown-toggle" >Notices <i class="fa fa-angle-down"></i></a>
                         
                      </li>
              
                     
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

    
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image: url('26.jpg');opacity:0%>
 <div class="container py-5">
    {{-- <header class="text-center text-white">
      <h1 class="display-6">Class Schedule</h1> 
      
    
          <u>Datatables</u></a>, add interaction controlsto your HTML tables.</p>
      <p class="font-italic">Snippet By
        <a href="https://bootstrapious.com" class="text-white">
          <u>Bootstrapious</u> 
        </a>
      </p>
  
     
    </header> --}}
  
    <br><br>
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
 
                      <tr class="info" >
                        {{-- <th> Id </th> --}}
                        {{-- <th> ID </th> --}}
                        <th> Subject </th>
                        <th> Date </th>
                        <th> Time </th>
                        <th> Bookname </th>
                        {{-- <th> Price </th>
                        <th> Store </th> --}}
                      
                        
                </tr>
                @foreach($schedule as $row)
                     <tr class="td">
                {{-- <tr @if ($row->marks< 50) class="text-danger"
                     @elseif ($row->marks == 100) class="text-success" 
                     @elseif ($row->marks> 50 && $row->marks< 60 ) class="text-warning"@endif> --}}
                        {{-- <td> {{ $row->id }} </td> --}}
                        {{-- <td> {{ $row->id }} </td> --}}
                        <td> {{ $row->subject }} </td>
                        <td> {{ $row->date }} </td>
                        <td> {{ $row->time }} </td>
                        <td> {{ $row->bookname }} </td>
                        {{-- <td> {{ $row->price }} </td>
                        <td> {{ $row->store }} </td> --}}



                        {{-- <td> {{ $row->created_at }} </td> --}}
                      
                        {{-- <td>
                           
                             <a href="{{URL::to('delete/donate/'.$row->id) }}" class="btn btn-sn btn-danger">Delete</a> 
                            <a href="{{URL::to('edit/schedule/'.$row->id) }}" class="btn btn-sn btn-success">Update</a>
                        </td> --}}
                    </tr>
                   @endforeach
              </table>
              <a href="http://127.0.0.1:8000/seemore" class="btn btn-primary">See more</a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div><!-- Banner area end --> 



  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="TutorsAid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
              labore et dolore magna aliqua.</p>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
              Hotline and Contact form.
              <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
              <br> Saturday: <span class="text-right">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="service-single.html">Pre-Construction</a></li>
              <li><a href="service-single.html">General Contracting</a></li>
              <li><a href="service-single.html">Construction Management</a></li>
              <li><a href="service-single.html">Design and Build</a></li>
              <li><a href="service-single.html">Self-Perform Construction</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info text-center text-md-left">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed Muhtasim Rahman</span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href="about.html">About</a></li>
                <li><a href="team.html">Our Promises</a></li>
             
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('simple/vendors/owl-carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('simple/vendors/owl-carousel/css/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{asset('simple/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('simple/vendors/aos/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('simple/css/style.min.css')}}">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-sm-0" id="navbar">
      <div class="container">
        <div class="navbar-brand-wrapper d-flex w-100">
          <img src="{{asset('simple/images/smk.png')}}" height="60" alt="">
          <!-- <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu navbar-toggler-icon"></span>
          </button>  -->
        </div>
        <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
            <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
              <div class="navbar-collapse-logo">
                <img src="{{asset('simple/images/Group2.svg')}}" alt="">
              </div>
              <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
              </button>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features-section">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#digital-marketing-section">Blog</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#feedback-section">Testimonials</a>
            </li> -->
            <!-- <li class="nav-item btn-contact-us pl-4 pl-lg-0">
              <a href="/login" class="p-3">Sign In</a>
              <a href="/register" class="btn btn-info">Sign Up</a>
            </li> -->
          </ul>
        </div>
      </div> 
    </nav>   
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Layanan Pengaduan Masyarakat</h1>
      <h6 class="font-weight-normal text-muted pb-3">Laporkan Masalah Anda terkait lingkungan di sini</h6>
      <div>
        <a href="/login" class="btn btn-opacity-light mr-1">Sign In</a>
        <a href="/register" class="btn btn-opacity-info ml-1">Sign Up</a>
      </div>
      <img src="{{asset('simple/images/Group171.svg')}}" alt="" class="img-fluid">
    </div>
  </div>
  <script src="{{asset('simple/vendors/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('simple/vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('simple/vendors/owl-carousel/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('simple/vendors/aos/js/aos.js')}}"></script>
  <script src="{{asset('simple/js/landingpage.js')}}"></script>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dr. Structures | Builders &amp; Architechts</title>
    <!-- Normalize -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom style-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--<link href="styles/carousel.css" rel="stylesheet">-->
    <link href="styles/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $("body").addClass("animated fadeIn");
        $(".first-slide").addClass("animated pulse");
        $(".second-slide").addClass("animated pulse");
        $(".third-slide").addClass("animated pulse");
        $("#menuModal").addClass("animated fadeIn");
      });
    </script>
    <script>
        $('.carousel').carousel({
        interval: 6000,
        pause: "false"
        });
    </script>
  </head>
  <body>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark " id="top-header">
        <a class="navbar-brand" href="#"><img class="img-fluid" id="logo" src="assets/img/logo.jpg" alt="Dr. Structures" title="Dr. Structures" height="auto" width="35px" style="position:relative; z-index:2;"></img></a>
        <button class="navbar-toggler" id="menu-hamburger-btn" type="button" data-toggle="modal" data-target="#menuModal" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active pull-right">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Modal Menu -->
<div class="modal" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menueModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close" id="menu-close-ico"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="navbar-nav mr-auto text-center">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

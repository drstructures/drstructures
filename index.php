<?php require_once('header.php');?>
<!-- Carousel-->
<main role="main">
      <div id="myCarousel" class="carousel slide  d-flex h-100 p-0 mx-auto flex-column" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="assets/img/carousel1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left wow bounceInLeft">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary carbtn" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="assets/img/carousel2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-left wow bounceInLeft">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary carbtn" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="third-slide" src="assets/img/carousel3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left wow bounceInLeft">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary carbtn" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </main>
  <div class="container-fluid">
      <div class="row">
        <!--First-->
        <div class="col-md-4 mx-auto box wow fadeIn" style="background-image:url('assets/img/paper.jpg'); background-size:cover;background-postion:center;">
        </div>
          <div class="col-md-8 my-auto box bluegrey">
            <div class="punchlines wow fadeInUp">
                <h1 class="text-center">Delivering World-Class Engineering.</h1>
                <p class="lead text-center">We are committed to deliver world-class engineering, no mattter what the project size is. Be it Large or Small,
                word-class performance delivered.</p>
              </div>
          </div>
          <!--Second-->
            <div class="col-md-8 my-auto box blackgrey">
              <div class="punchlines wow fadeInUp">
                  <h1 class="text-center">Delivering World-Class Engineering.</h1>
                  <p class="lead text-center">We are committed to deliver world-class engineering, no mattter what the project size is. Be it Large or Small,
                  word-class performance delivered.</p>
                </div>
                </div>
                <div class="col-md-4 mx-auto box wow fadeIn" style="background-image:url('assets/img/listen.jpg'); background-size:cover;background-postion:center;">
                </div>
        </div>
      <!-- Footer -->
    <?php require_once('footer.php'); ?>

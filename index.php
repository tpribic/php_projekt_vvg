<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Kawasaki Iskustva</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
<link rel="icon" href="images/favicon.jpg" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body>
<header>
  <nav>
    <ul>
      <?php
      if ($_SESSION == true) {
        echo "<li><a href='#iskustva'>Iskustva</a></li>";
        echo "<li><a href='#'>Kontakt</a></li>";
        echo "<li>Ulogiran si kao: ".$_SESSION["username"]."</li>";
        echo "<li><a href='logout.php'>Odjava</a></li>";
        echo "<li><a href='main_forum.php'>Forum</a></li>";
      }
      else{
              echo "<li><a href='#iskustva'>Iskustva</a></li>";
              echo "<li><a href='#'>Kontakt</a></li>";
              echo "<li><a href='registracija.php'>Registracija</a></li>";
              echo "<li><a href='login.php'>Login</a></li>";
            }
      ?>
    </ul>
  </nav>
<header>
<content>
  <div id="home">
  <!-- Slider Starts -->
  <div class="banner">
            <img src="images/back.jpg" alt="banner" class="img-responsive">
            <div class="caption">
              <div class="caption-wrapper">
                <div class="caption-info">
                <img src="images/profile.jpg" class="img-circle profile">
                <h1 class="animated bounceInUp">Kawasaki</h1>
                <p class="animated bounceInLeft">Moto industry. </p>
               <div class="animated bounceInDown"><a href="#works" class="btn btn-default explore">Pogledaj modele</a></div>
                </div>
              </div>
            </div>
  </div>
  <!-- #Slider Ends -->
  </div>


  <!-- modeli -->
  <div id="works"  class=" clearfix grid">
      <figure class="effect-oscar  wowload fadeInUp">
          <img src="images/portfolio/1.jpg" alt="img01"/>
          <figcaption>
              <h2>Sport</h2>
              <p>Sportski motori za ljubitelje brzine<br>
              <a href="images/portfolio/1.jpg" title="1" data-gallery>Vidi više</a></p>
          </figcaption>
      </figure>
       <figure class="effect-oscar  wowload fadeInUp">
          <img src="images/portfolio/2.jpg" alt="img01"/>
          <figcaption>
              <h2>Sport</h2>
              <p>Sportski motori za ljubitelje brzine<br>
              <a href="images/portfolio/2.jpg" title="1" data-gallery>Vidi više</a></p>
          </figcaption>
      </figure>
       <figure class="effect-oscar  wowload fadeInUp">
          <img src="images/portfolio/3.jpg" alt="img01"/>
          <figcaption>
              <h2>Naked</h2>
              <p>Kome trebaju maske?<br>
              <a href="images/portfolio/3.jpg" title="1" data-gallery>Vidi više</a></p>
          </figcaption>
      </figure>
       <figure class="effect-oscar  wowload fadeInUp">
          <img src="images/portfolio/4.jpg" alt="img01"/>
          <figcaption>
              <h2>Supersport</h2>
              <p>Živi se samo jednom<br>
              <a href="images/portfolio/4.jpg" title="1" data-gallery>Vidi više</a></p>
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="images/portfolio/5.jpg" alt="img01"/>
          <figcaption>
              <h2>Sport Touring</h2>
              <p>Spoj snage i udobnosti<br>
              <a href="images/portfolio/5.jpg" title="1" data-gallery>Vidi više</a></p>
          </figcaption>
      </figure>
      <figure class="effect-oscar  wowload fadeInUp">
          <img src="images/portfolio/6.jpg" alt="img01"/>
          <figcaption>
              <h2>Sport</h2>
              <p>Sportski motori za ljubitelje brzine<br>
              <a href="images/portfolio/6.jpg" title="1" data-gallery>Vidi više</a></p>
          </figcaption>
      </figure>

  </div>
  <!-- works -->
  <div id="testimonials" class="container spacer ">
  	<h2 id="iskustva" class="text-center  wowload fadeInUp">Iskustva</h2>
    <div class="clearfix">
      <div class="col-sm-6 col-sm-offset-3">


      <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active animated bounceInRight row">
        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/sirovina.jpg" width="100" class="img-circle img-responsive"></div>
        <div  class="col-xs-10">
        <p>Reći ću samo jedno. <a href="https://www.youtube.com/watch?v=seS2lp7WFbU">Boro Majstorović - Kawasaki</a></p>
        <span>Domagoj Sirovina - <b>Zadovoljni kupac Badel proizvoda  </b></span>
        </div>
        </div>
        <div class="item  animated bounceInRight row">
        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
        <div  class="col-xs-10">
        <p>Bilo bi mi draže da se češće kvare.</p>
        <span>Filip Torjanac - <b>Torki d.o.o.</b></span>
        </div>
        </div>
        <div class="item  animated bounceInRight row">
        <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/mirenic.jpg" width="100" class="img-circle img-responsive"></div>
        <div  class="col-xs-10">
        <p>Kawasaki je dobar, ali ne kao moj Ford 1.4</p>
        <span>Martin Mirenić - <b>Ericsson Nikola Tesla d.d.</b></span>
        </div>
        </div>
    </div>

     <!-- Indicators -->
     	<ol class="carousel-indicators">
      <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-testimonials" data-slide-to="1"></li>
      <li data-target="#carousel-testimonials" data-slide-to="2"></li>
    	</ol>
    	<!-- Indicators -->
    </div>



      </div>
    </div>
  </div>
</content>

<!-- Footer Starts -->
<footer>
  <div class="footer text-center spacer">
  <p class="wowload flipInX"><a href="https://github.com/tpribic"><i class="fa fa-github fa-2x"></i></a> </p>
  Tomislav Pribić | 2019
  </div>
  <!-- # Footer Ends -->
  <a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>
</footer>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>



<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>




<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>

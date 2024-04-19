<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 
     ?>
<!doctype html>
<html lang="en">
  <head>
   
    <title>Lash Studio Management System | Home Page</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">

<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<div class="w3l-hero-headers-9">
  <div class="css-slider">
    <input id="slide-1" type="radio" name="slides" checked>
    <section  class="slide slide-one">
      <div class="container">
        <div style="float:right" class="banner-text">
        <h4>Mink or Miss!</h4>
          <h3>Exquisite lash extensions<br>
            for a Radiant you</h3>

            <a href="book-appointment.php" class="btn logo-button top-margin">Book An Appointment</a>
        </div>
      </div>
      
    </section>
    <input id="slide-2" type="radio" name="slides">
    <section class="slide slide-two">
      <div class="container">
        <div class="banner-text">
          <h4>Transform your look</h4>
          <h3>Exquisite lash extensions<br>
          for a Radiant you</h3>
          <a href="book-appointment.php" class="btn logo-button top-margin">Book An Appointment</a>
        </div>
      </div>
      <!-- <nav>
        <label for="slide-2" class="prev">&#10094;</label>
        <label for="slide-1" class="next">&#10095;</label>
      </nav> -->
    </section>
    <header>
      <label for="slide-1" id="slide-1"></label>
      <label for="slide-2" id="slide-2"></label>
    </header>
  </div>
</div> 
<section class="w3l-call-to-action_9">
    <div class="call-w3 ">
        <div class="container">
            <div class="grids">
                    <div class="grids-content row">

                        <div class="column col-lg-4 col-md-6 color-2 ">
                            <div>
                            <h4 class=" ">Our Studio is Your Lash Haven</h4>
                            <p class="para ">Mina Minks offers premium lash extension services to enhance your natural beauty and confidence.</p>
                            <a href="about.php" class="action-button btn mt-md-4 mt-3">Read more</a>
                        </div>
                    </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 back-image  ">
                            <img src="assets/images/5.jpg" alt="product" class="img-responsive ">
                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 back-image2 ">
                            <img src="assets/images/6.jpg" alt="product" class="img-responsive ">
                          </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="w3l-teams-15">
	<div class="team-single-main ">
		<div class="container">
		
				<div class="column2 image-text">
					<h3 class="team-head ">Feel the Beauty of Mina Minks</h3>
					<p class="para  text ">
          Our lash artists are dedicated to crafting stunning lash designs tailored to your unique style, ensuring you leave feeling glamorous and new.</p>
						<a href="book-appointment.php" class="btn logo-button top-margin mt-4">Book An Appointment</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-specification-6">
    <div class="specification-layout ">
        <div class="container">
            <div class=" row">
                <div class="col-lg-6 back-image">
                    <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
                </div>
                <div class="col-lg-6 about-right-faq align-self">
                    <h3 class="title-big"><a href="about.html">Expert Lash Services</a></h3>
                    <p class="mt-3 para"> Our services include classic lashes, volume lashes, hybrid lashes, and lash lifts, all performed by skilled professionals dedicated to your satisfaction.</p>
                        <div class="hair-cut">
                            <div >
                    <ul class="w3l-right-book">
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Classic Lash Extensions</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Volume Lash Extensions</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Hybrid Lashes</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Lash Lifts</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Custom Lash Designs</a></li>
                    </ul>
                </div>
                    <div  class="image-right">
                        <ul class="w3l-right-book">
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Expert Lash Styling</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Lash Maintenance</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Lash Removal</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Aftercare Tips</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Exclusive Lash Products</a></li>
                        </ul>
                </div>
            </div>
        </div>
</section>
<?php include_once('includes/footer.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>
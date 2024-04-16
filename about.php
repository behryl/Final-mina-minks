<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    
    <title>Lash Studio Management System | About us Page</title>

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

<!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner about ">
            <div class="container">   
                <div class="main-titles-head text-center">
                <h3 class="header-name ">
					About Us
                </h3>
            </div>
</div>
   </div>
   <div class="breadcrumbs-sub">
   <div class="container">   
    <ul class="breadcrumbs-custom-path">
        <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
        <li class="active ">About</li>
    </ul>
</div>
</div>
        </div>
    </section>
<!-- breadcrumbs //-->
<section class="w3l-content-with-photo-4"  id="about">
    <div class="content-with-photo4-block ">
        <div class="container">
            <div class="cwp4-two row">
            <div class="cwp4-image col-xl-6">
                <img style="width:300px; height:300px" src="assets/images/b2.jpg" alt="product" class="img-responsive about-me">
            </div>
                <div class="cwp4-text col-xl-6 ">
                    <div class="posivtion-grid">
                    <h3 class="">Welcome to Mina Minks Lash Studio</h3>
                    <p class="text">At Mina Minks, we specialize in creating stunning lash extensions that enhance your natural beauty. Our services include:</p>
                    <div class="hair-two-colums">
                        <div class="hair-left">
<h5>
    Lash Removal</h5>
</div>
                        <div class="hair-left">
                            <h5>Brow shaping</h5>
                        </div>
                            <div class="hair-left">
                                                        <h5>Lash Tinting</h5>

                                                    </div>
                                                                                <div class="hair-left">
                                                                                    <h5>Classic Lashes</h5>
                                    
                                                                                </div>
                                                                                 <div class="hair-left">
                                                                                    <h5>Volume Lashes</h5>
                                                                                </div>

   <div class="hair-left">
                                                                                    <h5>Hybrid Lashes</h5>
                                                                                </div>
                                                                                   <div class="hair-left">
                                                                                    <h5>Lash Lifts</h5>
                                                                                </div>

                                                                                   <div class="hair-left">
                                                                                    <h5>Custom Lash Designs</h5>
                                                                                </div>

                    
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>

<section class="w3l-recent-work">
	<div class="jst-two-col">
		<div class="container">
<div class="row">
		<div class="my-bio col-lg-6">

	<div class="hair-make">
		<?php
/*
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {*/

?>
	
        <h5><a href="blog.html">
    About Us
        </a></h5>
        <p class="para mt-2">
        Mina Minks is your exclusive destination for exquisite lash transformations. Our team of skilled lash artists is dedicated to enhancing your natural beauty with customized lash extensions tailored to your unique style and preferences. Whether you're looking for a subtle enhancement or a dramatic flutter, we're here to make your lash dreams a reality. Step into our studio and experience the artistry, precision, and luxury that Mina Minks has to offer. Your eyes deserve nothing less than perfection, and that's exactly what we deliver.
        </p>
	</div>
	
	
	</div>
	<div class="col-lg-6 ">
		<img src="assets/images/b3.jpg" alt="product" class="img-responsive about-me">
	</div>

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
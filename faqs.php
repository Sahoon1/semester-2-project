<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FAQS_Gifterzz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand text-dark mb-4" href="index.php" style="font-size:2.5rem;">Gifterzz</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
               
                <a class="dropdown-item" href="cart2.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
				<a class="dropdown-item" href="faqs.php">FAQs</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php if(isset($_SESSION['username'])){?>
				<li class="nav-item"><a href="logout.php" class="nav-link"> logout</a></li>
				<div class="mt-3 text-dark"><?=$_SESSION['username']?></div>
		    <?php
			}
			else{?>
			<li class="nav-item"><a href="login.php" class="nav-link"> login</a></li>
		<?php } ?>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Shop</span></p>
            <h1 class="mb-0 bread">FAQ's</h1>
          </div>
        </div>
      </div>
    </div> <br>

    <!-- accordian -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed btn btn-primary h1 fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Can I cancel my subscription at anytime?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body h1 fs-3">Sure. Your paid subscription can be cancelled anytime by shifting to Lite plan.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed btn btn-primary h1 fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Can I change my plan later on?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body h1 fs-3">Absolutely! You can upgrade or downgrade your plan anytime. The money paid for the previous subscription will be recalculated to the new plan.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingthree">
      <button class="accordion-button collapsed btn btn-primary h1 fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapseThree">
      Do you offer any discounts?
      </button>
    </h2>
    <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body h1 fs-3">Yes! We offer 17% discount for payment per year. There may be other temporary discounts, check for this inside the service.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingfour">
      <button class="accordion-button collapsed  btn btn-primary h1 fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
      Can I request a refund?
      </button>
    </h2>
    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body h1 fs-3">Sure, you will be welcome to request your refund within 14 days of subscribing to any paid plan.</div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingfive">
      <button class="accordion-button collapsed btn btn-primary h1 fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
      Will you renew my subscription automatically?
      </button>
    </h2>
    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body h1 fs-3 ">Yes, your subscription will be automatically renewed according to your pay period.</div>
    </div>
  </div>
</div><br>
      
		
   <!-- ===================gallery section==================================== -->
<section class="ftco-gallery">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
		<h2 class="mb-4">Follow Us On Instagram</h2>
		<p>It provides an opportunity to explore new products, compare options, and enjoy the experience.</p>
	  </div>
		</div>
	</div>
	<div class="container-fluid px-0">
		<div class="row no-gutters">
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/bag4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/bag4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/Greeting-Cards.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Greeting-Cards.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="giftcard3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(giftcard3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/download (2).jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/download\ \(2\).jfif);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/doll6.webp" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/doll6.webp);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/image_6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_6.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
					</a>
				</div>
	</div>
	</div>
</section>

    <!--=============== footer section============================= -->
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Gifterzz</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="shop.php" class="py-2 d-block">Shop</a></li>
                <li><a href="about.php" class="py-2 d-block">About</a></li>
                <li><a href="blog.php" class="py-2 d-block">Journal</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled">
	                <li><a href="faqs.php" class="py-2 d-block">FAQs</a></li>
	                <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p> All rights reserved | <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="#" target="_blank" class="text-danger">Gifterzz</a>
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
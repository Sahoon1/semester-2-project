<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Gifterzz</a>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ftco-animate">
						<div class="row">
							<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#">April 9, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <h3 class="heading"><a href="#">Why shopping is important in our life?</a></h3>
		                <p>It provides an opportunity to explore new products, compare options, and enjoy the experience. Emotional Connection: Shopping can be a mood booster, especially when searching for that perfect outfit or finding a special gift for someone.</p>
		                <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#">April 9, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <h3 class="heading"><a href="#">What is the main purpose of shopping?</a></h3>
		                <p>On the most basic level, shopping allows you to acquire items that you need or want in order to live your day-to-day life, such as food, clothing, and household goods.</p>
		                <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#">April 9, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <h3 class="heading"><a href="#">What is good about shopping?</a></h3>
		                <p>Shopping activates the pleasure centers of the brain and releases dopamine, the “feel good” hormone.</p>
		            
		                <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_5.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#">April 9, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <h3 class="heading"><a href="#">Why do we enjoy shopping?</a></h3>
		                <p>Shopping also doses us with dopamine — the happy neurochemical that literally makes us feel better</p>
		                <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_6.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#">April 9, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <h3 class="heading"><a href="#">Why do we need shopping?</a></h3>
		                <p>We want to show off that we have the latest and greatest of everything. We also want to give ourselves a reward for hard work</p>
		                <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
						</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Categories</h3>
              <ul class="categories">
                <li><a href="shop.php">Greeting cards<span>(12)</span></a></li>
                <li><a href="shop.php">Men's Wallets <span>(22)</span></a></li>
                <li><a href="shop.php">Women's Bags <span>(37)</span></a></li>
                <li><a href="shop.php">Beauty products <span>(42)</span></a></li>
                <li><a href="shop.php">Gift bags <span>(14)</span></a></li>
                <li><a href="shop.php">Hand bags <span>(140)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="#">
					the activity of looking for things to buy: </a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="
					#"> Shopping makes you feel better.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="#">You can enjoy it as a hobby.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="shop.php class="tag-cloud-link">cards</a>
                <a href="shop.php" class="tag-cloud-link"> beauty products</a>
                <a href="shop.php" class="tag-cloud-link">wallets</a>
                <a href="shop.php" class="tag-cloud-link"> gift bags</a>
                <a href="shop.php" class="tag-cloud-link">hand bags</a>
                <a href="shop.php" class="tag-cloud-link">dress</a>
                <a href="shop.php" class="tag-cloud-link">dolls</a>
                
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Paragraph</h3>
              <p>Shopping also doses us with dopamine — the happy neurochemical that literally makes us feel better. Luckily, you don't have to first feel sad to get that dopamine high from shopping. It comes even when we're already happy.</p>
            </div>
          </div>

        </div>
      </div>
    </section> 

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

            <p> All rights reserved | <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="#" target="_blank">Gifterzz</a>
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
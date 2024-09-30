<?php
session_start();

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'shoppingcart');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch products
$query = "SELECT `id`, `name`, `img`, `price`, `discount`, `description` FROM `shopping_cart_index` ORDER BY id ASC"; // Ensure this is the correct table name
$queryfire = mysqli_query($con, $query);

if (!$queryfire) {
    die("Query failed: " . mysqli_error($con));
}

$num = mysqli_num_rows($queryfire);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home_Gifterzz</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                    <?php if (isset($_SESSION['username'])) { ?>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                        <div class="mt-3 text-dark"><?php echo htmlspecialchars($_SESSION['username']); ?></div>
                    <?php } else { ?>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <?php } ?>
                    <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- END nav -->
<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid bgimg" src="images/istockphoto-1458718224-612x612.png" alt="" >
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">New Arrival</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">Online Shopping </h1>
				            <p class="mb-4">Explore a wide range of styles.
								Discover Your Next Masterpiec.
							</p>
				            
				            <p><a href="index.php" class="btn btn-light text-dark"style="font-size:2rem;">Discover Now</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="images/giftbag_4f67e67b-a191-417e-b8ed-ddd7c3ea217c.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">New Arrival</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">New Winter Collection</h1>
				            <p class="mb-4">Explore a wide range of styles.
								Discover Your Next Masterpiec..</p>
				            
				            <p><a href="index.php" class="btn btn-light text-dark"style="font-size:2rem;">Discover Now</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-bag"></span>
              </div>
			  <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <p>Free shipping is an increasingly-popular option for online shopping, where customers do not have to pay an additional shipping charge</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-customer-service"></span>
              </div>
			  <div class="media-body">
                <h3 class="heading">Support Customer</h3>
                <p>Customer support is the team of people who provide help when customers have trouble with a company's products or services. </p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-payment-security"></span>
              </div>
			  <div class="media-body">
                <h3 class="heading">Secure Payments</h3>
                <p>A secure payment system (SPS) refers to the technologies, infrastructure, and policies that protect sensitive information</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		<!-- ========================= product scetion =============================-->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2>New Arrivals</h2>
                    <p>Discover our latest items! Check out the pictures below and shop your favorites.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <?php if ($num > 0) {
                    while ($product = mysqli_fetch_assoc($queryfire)) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <form action="cart_actions.php" method="post">
                                <div class="card">
                                    <h6 class="card-title bg-dark text-white h4 p-2 mx-2 my-2 text-uppercase"><?php echo htmlspecialchars($product['name']); ?></h6>
                                    <div class="card-body">
                                        <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="img-fluid mb-2">
                                        <h4>$<?php echo htmlspecialchars($product['price']); ?><span> (<?php echo htmlspecialchars($product['discount']); ?>% off)</span></h4>
                                        <h4 class="badge badge-success">4.4 <i class="fa fa-star"></i></h4>
                                        <input type="number" name="quantity" class="form-control" placeholder="Quantity" min="1" required>
                                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                                    </div>
                                    <div class="btn-group d-flex">
                                        <button type="submit" name="add_to_cart" class="btn btn-dark mx-2 my-3 px-4 py-3">Add to Cart</button>
                                        <a href="customercart.php" class="btn btn-primary mx-2 my-3 px-4 py-3">Buy Now</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php }
                } else {
                    echo "<p>No products available.</p>";
                } ?>
            </div>
        </div>
        <button class="btn btn-primary py-3 px-3" style="margin-left:45%; margin-top:3rem;">
            <a href="shop.php" style="font-size:1.8rem; color:black;">See More...</a>
        </button>
    </section>

<?php
// Close the database connection
mysqli_close($con);
?>

<!-- ===========================choose section========================================== -->

<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
    	  <div class="container">
				<div class="row no-gutters">
					<div class="col-lg-4">
						<div class="choose-wrap divider-one img p-5 d-flex align-items-end" style="background-image: url('images/gift1.jfif');">

    					<div class="text text-center text-white px-2">
								<span class="subheading" style="color:black;">Gift Articles</span>
    						<h2 style="color:black;">Gift Articles</h2>
    						<p style="color:black;">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
    						<p><a href="shop.php" class="btn btn-black px-3 py-2">Shop now</a></p>
    					</div>
    				</div>
					</div>
					<div class="col-lg-8">
    				<div class="row no-gutters choose-wrap divider-two align-items-stretch">
    					<div class="col-md-12">
	    					<div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-start" style="background-image: url('images/images (2).jfif');">
	    						<div class="col-md-7 d-flex align-items-center">
	    							<div class="text">
	    								<span class="subheading"style="color:black;" >Gift Cards</span>
			    						<h2 style="color:black;">Gift Cards</h2>
			    						<p style="color:black;">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			    						<p><a href="shop.php" class="btn btn-black">Shop now</a></p>
			    					</div>
	    						</div>
	    					</div>
	    				</div>
    					<div class="col-md-12">
    						<div class="row no-gutters">
    							<div class="col-md-6">
		    						<div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
		    							<div class="text text-center px-5">
		    								<span class="subheading">Summer Sale</span>
				    						<h2>Extra 50% Off</h2>
				    						<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				    						<p><a href="shop.php" class="btn btn-black px-3 py-2">Shop now</a></p>
				    					</div>
		    						</div>
	    						</div>
	    						<div class="col-md-6">
		    						<div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url('images/bag3.jpg');">
		    							<div class="text text-center text-white px-5">
		    								<span class="subheading"style="color:black;">Gift Bags</span>
				    						<h2 style="color:black;">Best Sellers</h2>
				    						<p style="color:black;">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				    						<p><a href="shop.php" class="btn btn-black px-3 py-2">Shop now</a></p>
				    					</div>
		    						</div>
	    						</div>
	    					</div>
    					</div>
    				</div>
    			</div>
  			</div>
    	  </div>
  </section> 
    <br>
	<!--======================= deal scetion=================================== -->

    <section class="ftco-section ftco-deal">
    	<div class="container bgcolor">
    		<div class="row">
    			<div class="col-md-6">
    				<img src="images/Greeting-cards.png" class="img-fluid" alt="">
    			</div>
    			<div class="col-md-6">
    				<div class="heading-section">
	            <h2 class="mb-3">Deal of the month</h2>
	          </div>
    				<div id="timer" class="d-flex mb-4">
						  <div class="time" id="days"></div>
						  <div class="time pl-4" id="hours"></div>
						  <div class="time pl-4" id="minutes"></div>
						  <div class="time pl-4" id="seconds"></div>
						</div>
						<div class="text-deal">
							<h2>Greeting Cards</h2>
							<p class="price"><span class="mr-2 price-dc">220Rs</span><span class="price-sale">150Rs</span></p>
							<ul class="thumb-deal d-flex mt-4">
								<li class="img" style="background-image: url('images/gift card3.jpg');"></li>
								<li class="img" style="background-image: url('images/gift card2.jpg');"></li>
								<li class="img" style="background-image: url('images/giftcard3.jpg');"></li>
							</ul>
						</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row">
        	<div class="col-lg-5">
        		<div class="services-flow">
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-bag"></span>
        				</div>
        				<div class="text">
	        				<h3>Free Shipping</h3>
	        				<p class="mb-0">Separated they live in. A small river named Duden flows</p>
        				</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-heart-box"></span>
        				</div>
        				<div class="text">
	        				<h3>Valuable Gifts</h3>
	        				<p class="mb-0">Separated they live in. A small river named Duden flows</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-payment-security"></span>
        				</div>
        				<div class="text">
	        				<h3>All Day Support</h3>
	        				<p class="mb-0">Separated they live in. A small river named Duden flows</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-customer-service"></span>
        				</div>
        				<div class="text">
	        				<h3>All Day Support</h3>
	        				<p class="mb-0">Separated they live in. A small river named Duden flows</p>
	        			</div>
        			</div>
        		</div>
        	</div>
          <div class="col-lg-7">
          	<div class="heading-section ftco-animate mb-5">
	            <h2 class="mb-4">Our satisfied customer says</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
	          </div>
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center ">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
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
  <script src="js/main.js"></script>
    
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy_gifterzz</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
	 <!-- font awesome cdn link  -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .container-fluid {
           /* background: rgb(233,152,166);
        background: radial-gradient(circle, rgba(233,152,166,0.9556197478991597) 0%, rgba(255,135,206,0.8883928571428571) 50%, rgba(250,90,125,0.9248074229691877) 100%) ; */
         padding: 4px;
            border-radius: 80px;
            margin-top:4rem;
            width:70%;
            margin-bottom:2.5rem; 
             
            
        }
        
        .form-control {
            border-radius:15px ;
            border-color: palevioletred;
            margin-left:18rem;
            
           }
        .btn-warning {
            background: rgb(233,152,166);
        background: radial-gradient(circle, rgba(233,152,166,0.9556197478991597) 0%, rgba(255,135,206,0.8883928571428571) 50%, rgba(250,90,125,0.9248074229691877) 100%) ;
       
            border-color:#fff;
            color: white;
            font-size: 2rem;
            margin-top:1.4rem;
            padding-left:1.4rem;
            padding-right:1.4rem;
            padding-bottom:.8rem;
            width:30%;
            

        }
        .btn-warning:hover {
            background-color: #fff;
            border-color: black;
            color:black;
            font-size:2rem;

        }
        .alert {
            display: none;
            margin-top:2rem;
            border-radius:19px;
            width:80%;
            margin-left:15rem;
            
        }
        legend,h1{
      
          font-size:2.5rem;
          padding-top:1rem;
          padding-bottom:1rem;
          color:black;
          text-align:center;
          font-weight:bold;

        }
        .cart-detail{
          width:40%;
          margin-left:19rem;
          margin-bottom:2rem;
         
                }
    </style>
</head>
<body>
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
  <!-- nav end -->
  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Place Your Order</h1>
          </div>
        </div>
      </div>
    </div>

<section>
<div class="container-fluid ftco-section">
    <form class="form-horizontal" action="" method="post" id="contact_form">
        <fieldset>
            <legend>Personal Details</legend>

            <!-- Text input -->
            <div class="form-group row">
                
                <div class="col-md-8 ">
                    <input name="first_name" placeholder="First Name" class="form-control" type="text" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
         
                <div class="col-md-8 ">
                    <input name="last_name" placeholder="Last Name" class="form-control " type="text" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
         
                <div class="col-md-8">
                    <input name="email" placeholder="E-Mail Address" class="form-control" type="email" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
              
                <div class="col-md-8">
                    <input name="phone" placeholder="Enter Your Number" class="form-control" type="tel" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
           
                <div class="col-md-8">
                    <input name="address" placeholder="Address" class="form-control" type="text" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
             
                <div class="col-md-8">
                    <input name="city" placeholder="City" class="form-control" type="text" required>
                </div>
            </div>

            <h1>Product Details</h1>

            <!-- Text input -->
            <div class="form-group row">
         
                <div class="col-md-8">
                    <input name="product_name" placeholder="Product name" class="form-control" type="text" required  >
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
                
                <div class="col-md-8">
                    <input name="product_qty" placeholder="Product Qty" class="form-control" type="number" required>
                </div>
            </div>
            <div class="cart-detail bg-light p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
					
						      </div>
                  <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">
                Success! Thanks for contacting us, we will get back to you shortly. 
                <a href="chechout.php">check form</a>
            </div>
            <!-- Button -->
            <div class="form-group row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-warning" name="send">
                        Place your Order <span class="glyphicon glyphicon-send"></span>
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
    
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
    
  

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Show the success message using JavaScript
    <?php if (isset($_POST['send'])): ?>
    document.getElementById('success_message').style.display = 'block';
    <?php endif; ?>
</script>
</body>
</html>

<?php
if (isset($_POST['send'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "costomer";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("insert into costomer(first_name, last_name, email, phone, address, city, product_name, product_qty) values (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $phone, $address, $city, $product_name, $product_qty);

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $product_name = $_POST['product_name'];
    $product_qty = $_POST['product_qty'];

    if ($stmt->execute()) {
        echo "<script>document.getElementById('success_message').style.display = 'block';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?> 

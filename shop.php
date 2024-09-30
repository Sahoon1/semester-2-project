<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gifterzz-products</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
	  
    
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
	<style>
		form{
			margin-left:1.8rem;
			margin-right:1.8rem;
			margin-bottom:2rem;
			margin-top:2rem;
		} h5{
			font-weight:bold;
			font-family: Helvetica, Arial, sans-serif;
		}
		h1{
			font-size:3rem;
			font-weight:bold;
			
		}
	</style>
</head>
<body class=" goto-here">
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
	  <h5 class="text-center"><a href="index.php"class="text-dark">home</a>  shop</h5>
	  <h1 class="text-center">Shop</h1>
	  
      </div>
    </div>

	
<div class="row">

	<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'shoppingcart');

	// if($con){
	// 	echo "connection succussful";
	// }else{
	// 	echo "no connection";
	// }


	$query = " SELECT `name`, `img`, `price`, `discount`,`description` FROM `shopping_cart`  order by id ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
			
		<div class="col-lg-3 col-md-3 col-sm-12 ">
			
			<form>
				<div class="card">
					<h6 class="card-title bg-dark text-white h4 p-2 mx-2 my-2 text-uppercase"> <?php echo
					 $product['name'];  ?>   </h6>

					<div class="card-body">
						 <img src="<?php echo
					 $product['img'];  ?>" alt="phone" class="img-fluid mb-2" >

					 <h4> $<?php echo $product['price']; ?><span> (<?php echo $product['discount'];  ?>% off) </span> </h4> 

					 <h4 class="badge badge-success"> 4.4 <i class="fa fa-star"> </i> </h4>

					 <input type="text" name="" class="form-control" placeholder="Quantity">
					 <p>
					 <?php echo $product['description']; ?>
					 </p>
					</div>
					<div class="btn-group d-flex">
                     <button class=" btn btn-dark mx-2 my-3 px-4 py-3"><a href=""class="h4 text-light">Add to cart</a></button> 
                     <button class="  btn btn-primary mx-2 my-3 px-4 py-3"> <a href="customercart.php"class="h4">Buy Now</a> </button>
                   </div>


				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>
</div>
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

</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Ristro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

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
  <body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">7050403020</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">myristro10@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Everyday</span> <span>7:30AM - 11:30PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <a class="navbar-brand" href="user dashboard/main/template/app-profile.php">User Dashboard</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	        	<li class="nav-item"><a href="main.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item cta"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Contact</h1>
           
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
						<h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
						<form action="contact.php" method="POST">
              
              
              <div class="form-group">
                <input type="hidden" class="form-control"  name="rec" autocomplete="off" value="myristro10@gmail.com">
              </div><br>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Your Email" name="sub" autocomplete="off" required>
              </div><br>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Message" name="msg" autocomplete="off" required></textarea>
              </div><br>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="submit">
              </div>
            </form>
            <?php 
if(isset($_POST["submit"]))
{
    $sub=$_POST["sub"];
    $msg=$_POST["msg"];
    $rec=$_POST["rec"];
    mail($rec,$sub,$msg);
}
?>


					</div>
				<div class="col-md-6 d-flex align-items-stretch">
						

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28472.88937217839!2d80.98728565769457!3d26.868208802405015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2c8dca44d89%3A0x25b7db079664da69!2sThe%20Mughal&#39;s%20Dastarkhwan!5e0!3m2!1sen!2sin!4v1586952793736!5m2!1sen!2sin" width="850" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


          
					</div>
				</div>
			</div>
		</section>
		
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">My Ristro</h2>
              <p>Want to throw a party ...Dont worry just join us.</p>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>7:30 - 23:30</span></li>
                <li class="d-flex"><span>Tuesday</span><span>7:30 - 23:30</span></li>
                <li class="d-flex"><span>Wednesday</span><span>7:30 - 23:30</span></li>
                <li class="d-flex"><span>Thursday</span><span>7:30 - 23:30</span></li>
                <li class="d-flex"><span>Friday</span><span>7:30 - 23:30</span></li>
                <li class="d-flex"><span>Saturday</span><span>7:30 - 23:30</span></li>
                <li class="d-flex"><span>Sunday</span><span> 7:30 - 23:30</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Events Pics</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Want to know more about My Ristro</h2>
            	<p>Enter Your Email address we will send you a mail</p>
              <form action="main.php" class="subscribe-form" method="post">
                <div class="form-group">
                <input type="email" name="rec" class="form-control mb-2 text-center" placeholder="Enter email address" autocomplete="off">
              
<input type="submit" value="Send Mail" class="form-control submit px-3">

</form>
<?php 
if(isset($_POST["rec"]))
{
   
    $sub="More About My Ristro:";
    $msg="My Ristro is a web application that is used for full-fledge restaurant personalization of user's choice.Suppose you have to organise an event and don't have time to manage all the things , My Ristro helps you to organise an event from your favorite given restaurants with customization of your choice at affordable prices.This app gives you various options like you can choose a package according to your event available at reasonable prices and if still it is not according to your choice then you can go for customization.It gives you customization in four fields such as Waiters , Themes , Entrance And Foods.

You will know more about it as soon as you enter in the user dashboard.Please give us the golden opportunity to serve you as our customer.We are sure you will love this app.

Regards: My Ristro
               myristro10@gmail.com ";
    $rec=$_POST["rec"];
    mail($rec,$sub,$msg);
}
?>

                  
                </div>
              </form>
            </div>
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
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
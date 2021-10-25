<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' name='viewport'/>
<link rel="stylesheet" href="assets/css/w3css.css">
	<link rel="stylesheet" href="assets/css/googleapis.css">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home | Leyland Online Library </title>
	<link rel="icon" href="images/leylandicon.jpg">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS here -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    
<style>
.slider_bg_1 {
  background-image: url(images/bookicon.jpg);
}
.slider_bg_2 {
  background-image: url(images/lib6.jpg);
}
.slider_bg_3 {
  background-image: url(images/lib2.jpg);
}
.slider_bg_4 {
  background-image: url(images/bokgif.gif);
}

.circle {
border: 1px black; 
width: 110px;
height: 110px;
border-radius: 50%;
}
.img-circle {
border: 1px black; 
width: 250px;
height: 190px;
border-radius: 50%;
}
.slider_area .single_slider .slider_text h4 {

color:#f5678a;}

.header-area .main-header-area .main-menu ul li a.active {
  color: #f5678a;
  border-color:#f5678a;
}

.header-area .main-header-area .main-menu ul li a:hover {
  color: #f5678a;
  border-color:#f5678a;
}
</style>

</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-4 col-lg-4">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li>
                                            <?php if($_SESSION['login']){?> 
											<a href="logout.php" ><b>LOG OUT</b></a>
										<?php }?>
                                        </li>
										<li><a  href="userhome.php">Home</a></li>
										<li><a  href="menu.php">Available Books</a>
										<span>|</span>
                                            
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <small>0</small>
                                                    </a></li>
                                        <li role="presentation"><a href="my-profile.php" >My Profile</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
		
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>...</span>
                                </div>
                                <h3>Leyland</h3>
                                <h4>Library</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>...</span>
                                </div>
                                <h3>Leyland</h3>
                                <h4>Library</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_4 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>...</span>
                                </div>
                                <h3>Leyland</h3>
                                <h4>Library</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>...</span>
                                </div>
                                <h3>Leyland</h3>
                                <h4>Library</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="single_slider  d-flex align-items-center slider_bg_4 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>...</span>
                                </div>
                                <h3>Leyland</h3>
                                <h4>Library</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about_thumb2">
                            <div class="img_1">
                                <img src="images/arrow1.png" alt="">
                            </div>
							<div class="img_1">
                                <img src="images/arrow1.png" alt="">
                            </div>
							
                            <div class="img_2">
                                <img src="images/auth5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                        <div class="about_info">
                            <div class="section_title mb-20px">
                                <span>About Us</span>
                                <h3>Leyland, <br>for your satisfaction</h3>
                            </div>
                            <p>In our times, many are so uneager to attain intelligence and the value of knowledge is quite underated.. We subscribe to the notion that <i>"Knowledge is power"</i> and that <i>"No knowledge is a waste"</i>. I am most humbled for this opportunity. My passion for this project is that it gives our users the best reading experience. We at Leyland, love all our readers a whole lot. Please don't relent to give your  reviews as we only want to do better for you. Have a great time here! </p>
                            <div class="img_thumb">
                               <p>.... <img src="images/signature.jpg" alt="" height="60px" width="220px">...</p>
                            </div>
							<p class="w3-xlarge">
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-red w3-opacity 
		w3-hover-opacity-off" style="padding:8px 60px">Stay Connected</button>
		</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about_area_end >
    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <h3>Motivation</h3>
            <span>A short video</span>
            <div class="video_payer">
				 
				  
				 <!-- Your browser does not support the video tag.-->
				<video class="video_btn popup-video" controls>
			<!---	<a href="https://m.youku.com/alipay_video/id_XMjc5NzM1OTIxNg==.html?spm=a2h0c.8166622.PhoneSokuUgc_2.dtitle" class="video_btn popup-video">-->
					<source src="images/knowvideo.mp4" type="video/mp4">
                   <i class="fa fa-play"></i>
                </a></video>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- testimonial_area_start  -->
        <div class="testimonial_area ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                                <div class="section_title mb-60 text-center">
                                        <span>Testimonials</span>
                                        <h3>Happy Customers</h3>
                                    </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“This place is a freeing mind mine.“</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="images/1.png" alt="">
                                            </div>
                                            <h4>Monica Simone</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“I love Leyland“</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="images/2.png" alt="">
                                            </div>
                                            <h4>Hussein Arafath</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Leyland library is awesome. I love that my choices aren't limited here“</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="images/3.png" alt="">
                                            </div>
                                            <h4>Chude W.Wadell</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
		
        </div>
    <!-- testimonial_area_ned  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/1.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/2.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/3.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/4.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
	
	
	

<!-- Contact information -->
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="contact">
	<div class="w3-content">
		<h1>CONTACT US HERE</h1>
		<div class="w3-row">
		  <div class="w3-half">
			<h2>Follow us</h2>
			<div>
				<a href="https://www.sololearn.com/" target="_blank">
				<img class="circle" alt="SoloLearn" src="images/sololearn.jpg" />
				</a>
				<a href="#">
				<img class="circle" alt="Facebook" src="images/facebook.webp"/>
				</a>
				<a href="#">
				<img class="circle" alt="Twitter" src="images/twitter.webp" />
				</a>
				<a href="#">
				<img class="circle" alt="Instagram" src="images/instagram.png" />
				</a>
				
			</div>
		  </div>
		  <div class="w3-half">
			<h2>Location</h2>
			<p>Jiangsu University</p>
			<p>301, Xuefu Road. Zhenjiang,</p>
			<p>Jiangsu Province, China. 212013.</p>
		  </div>
		</div>
		<br/>
		<p class="w3-xlarge">
		<a href="comment.php"><button class="w3-button w3-round w3-red w3-opacity 
		w3-hover-opacity-off" style="padding:8px 60px">Leave a comment</button></a>
		</p>
	</div>
</div>

	
	


<!-- Email modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white w3-center">
      <h1 class="w3-wide">Newsletter Subscription</h1>
		<form action="#" class="newsletter_form" action="usercontact.php" method="POST">
			<div class="row">
				<div class="col-12">
					<div class="form-group">
					  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
						onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
					  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
						onblur="this.placeholder = 'Enter email address'" placeholder='Enter your email address'>
					</div>
				  </div>
				<div class="col-12 w3-row w3-center">
					<div class="w3-half">
				  <button onclick="document.getElementById('id01').style.display='none'" type="submit" class="w3-button w3-block w3-purple">Sign up</button>
				</div>
				<div class="w3-half">
				  <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-red">No thanks</button>
				</div>
				</div>
			</div>
		</form><br/>
		<p class="newsletter_text"><i>Stay connect with us to get exclusive offer!</i></p>
	</div>
   </div>
</div>
                    
         
		 
		<footer>	
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <?php include('includes/footer.php');?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
<?php } ?>
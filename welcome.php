<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' name='viewport'/>
	<link rel="stylesheet" href="assets/css/w3css.css">
	<link rel="stylesheet" href="assets/css/googleapis.css">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Welcome </title>
	<link rel="icon" href="images/leylandicon.jpg">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/welcome.css" rel="stylesheet" />

<style>
body,h1,h2{font-family: "Raleway", sans-serif}
h1{
	font-size:50px;
}
body, html {height: 100%}
p {line-height: 2;
	font-style:bold;}
.bgimg, .bgimg2 {
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
.bgimg {background-image: url("images/pink.jpg")}
.bgimg2 {background-image: url("images/lib5.jpg")}
.gallery{
	background-color: #202125;
}
.circle {
border: 1px black; 
width: 110px;
height: 110px;
border-radius: 50%;
}
</style>
</head>
<body>
<?php include('includes/header.php');?>

<!-- Header / Home-->
<header class="w3-container bgimg w3-padding-64 w3-pale-red " id="home">
  <div class="w3-content  w3-text-white ">
    <h1 align="right"><b>LEYLAND LIBRARY</b></h1><br><br>
    <p  align="right"><i> ”A good book is an event in my life.” – Stendhal</i></p><br>
	<p  align="right"><i>Welcome to Leyland where we provide a suitable, efficient, and user-friendly platform </i></p>
	<p align="right"><i>for library management. Leyland library serves as a central database containing</i> </p>
	<p align="right"><i>various books in stock. A wide range of books are available and arranged in their </i></p>
	<p align="right"><i>respective categories. There is limited free books for non-users and many more </i></p>
	<p align="right"><i>for registered users. So take your time and bless your minds.</i>
    </p><br>
  </div>
</header>

<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <a href="#home" style="width:25%" class="w3-bar-item w3-button">Home</a>
    <a href="#auth" style="width:25%" class="w3-bar-item w3-button">Leyland Author</a>
    <a href="#list" style="width:25%" class="w3-bar-item w3-button">Popular Authors</a>
    <a href="#contact" style="width:25%" class="w3-bar-item w3-button w3-hover-black">Contact</a>
  </div>
</div>

<!-- Author Section-->
<div class="w3-container  w3-padding-64 " id="auth">
  <div class="w3-content">
    <h1 class="w3-text-grey" align="left"><b>Meet the Author</b></h1>

    <p>In our times, many are so uneager to attain intelligence and the value of knowledge is quite underated.. We subscribe to the notion that <i>"Knowledge is power"</i> and that <i>"No knowledge is a waste"</i>. I am most humbled for this opportunity. My passion for this project is that it gives our users the best reading experience. We at Leyland, love all our readers a whole lot. Please don't relent to give your  reviews as we only want to do better for you. Have a great time here!
    </p>
    <p class="w3-center"><img class="imgauth" src="images/author4.jpg" style="width:190px; height: 190px;margin:32px;"></p>
  </div>
</div>


<!-- Popular authors information -->
<div class="w3-container gallery w3-padding-64 w3-content" id="list">
<p class="heading">POPULAR AUTHORS</p>
  <div class="gallery-image ">
    <div class="img-box">
      <img src="images/Chinua.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Chinua Achebe</p>
          <p class="opacity-low">Nigeria</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/harperlee.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Harper Lee</p>
          <p class="opacity-low">U.S.A</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="images/JKRowling.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>J.K. Rowling</p>
          <p class="opacity-low">U.K</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="images/nelsonmandela.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Nelson Mandela</p>
          <p class="opacity-low">South Africa</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/vikramseth.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Vikram Seth</p>
          <p class="opacity-low">India</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/adiche2.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Chimamanda Ngozi Adiche</p>
          <p class="opacity-low">Nigeria</p>
        </div>
      </div> 
    </div>
  </div>
</div> 

<!-- Free books -->
<!--div class="content">
			<h2 class="content-title">Free Books</h2>
			<hr>
			<hr>
			<-- more content still to come here ... 

			<php foreach ($books as $book): ?>
				<div class="book" style="margin-left: 0px;" style="color: white;">
					<img src="<php echo BASE_URL . '/static' . $book['featured_image']; ?>" class="book_image" alt="">
			        <!-- Added this if statement... --

					<a href="single_post.php?post-slug=<php echo $book['slug']; ?>">
						<div class="post_info">
							<h3><php echo $book['name'] ?></h3>
						</div>
					</a>
					<img src="<php echo BASE_URL . '/static/' . $book['featured_image']; ?>" class="bok_image" alt="">
				</div>
			<php endforeach ?>
</div> -->
		
	<!--end of free books-->	
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
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-red w3-opacity 
		w3-hover-opacity-off" style="padding:8px 60px">Leave a comment</button>
		</p>
	</div>
</div>

<!-- Contact modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white w3-center">
      <h1 class="w3-wide">Message Box</h1>
      <p>We are so glad to have you here.</p>
		<form class="form-contact contact_form" action="visitorcontact.php" method="POST" id="contactForm" novalidate="novalidate">
			<div class="row">
				<div class="col-12">
					<div class="form-group">
					  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
						placeholder='Enter Message'></textarea>
					</div>
				</div>
			  <div class="col-sm-6">
				<div class="form-group">
				  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
					onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
				</div>
			  </div>
			  <div class="col-sm-6">
				<div class="form-group">
				  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
					onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
				</div>
			  </div>
			  <div class="col-12">
				<div class="form-group">
				  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
					onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-half">
				  <button onclick="document.getElementById('id01').style.display='none'" type="submit" class="w3-button w3-block w3-purple">Send Message</button>
				</div>
				<div class="w3-half">
				  <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-red">No thanks</button>
				</div>
			  </div>
          </div>
		</form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>&copy; 2020 Adaku Inem from Leyland Inc.. All rights reserved.</p></footer>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>
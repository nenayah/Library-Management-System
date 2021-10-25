<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' name='viewport'/>
	<title>Comment | Leyland Online Library </title>
	<link rel="icon" href="images/leylandicon.jpg">
	 <meta name="description" content="">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>

<body>
<!-- contact modal -->
<div  class="w3-modal">
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
			<div class="col-12 w3-row">
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
</body>
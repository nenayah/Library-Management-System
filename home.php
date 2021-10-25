<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<head>
	<style>
	body {
	background-color:#f0d8d8;
	background-size: 100% 100%;
	background-repeat: no-repeat;
}
	h1{
	font-size: 100px;
	font-family:"Raleway", sans-serif";
	color:white;
	font-style:italic;
	}
	p {line-height: 2;
	font-size: 10px;
	font-family: ""Raleway", sans-serif";
	color:white;
	font-style: normal;
	}
	body, html {height: 100%;
	width:100%;
	}
	.bgimg {
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
.bgimg {background-image: url("images/lib12.jpg")}

</style>
    <meta charset="utf-8" />
    <title>Leyland Home</title>
	<link rel="icon" href="images/leylandicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<link rel="stylesheet" href="assets/css/w3css.css">
	<link rel="stylesheet" href="assets/css/googleapis.css">
</head>

<body>

	<header class="w3-display-container w3-wide bgimg " id="home">
  <div class="w3-display-middle w3-center w3-text-white w3-black w3-round w3-padding-large w3-large">
   
    <h1 class="w3-jumbo">L E Y L A N D</h1>
	<p>By Adaku Inem</p>
	<hr/>
	<p class="w3-center"><a href="welcome.php"  target="_blank" class="w3-button w3-blue w3-round w3-padding-large w3-medium">
	Go to home</a></p>
   
  </div>
  
</header>
</body>
</html>
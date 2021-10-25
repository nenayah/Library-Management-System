<?php  
include('includes/config.php');
session_start();
error_reporting(0);
 if(isset($_POST['login']))
{
	//code for captcha verification
	if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
		echo "<script>alert('Incorrect verification code');</script>" ;
		
		}
	else{	
		$price = "SELECT tablbooks.BookName,tablbooks.BookPrice,tablbooks.id as bookid from  tablbooks";
		$query = $dbh -> prepare($price);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		$cnt=1;
		if($query->rowCount() > 0)
		{
			if($_POST["$result->BookPrice"] = 0)
			{
				header('location:free.php');
			}
			else{
				foreach($results as $result)
				{    
					//Code for user payment
					$count_my_page = ("userpayment.txt");
					$hits = file($count_my_page);
					$hits[0] ++;
					$fp = fopen($count_my_page , "w");
					fputs($fp , "$hits[0]");
					fclose($fp); 
					$userid= $hits[0];   
					$cnumber=$_POST['cardnumber'];
					$cname=$_POST['cardname'];
					$expdate=$_POST['expdate']; 
					$ccvc=md5($_POST['cvc']); 
					$add1($_POST['add1']); 
					$add2($_POST['add2']); 
					$town($_POST['town']); 
					$postcode($_POST['postcode']); 
					$country($_POST['country']); 
					$sql="INSERT INTO  carddetails(UserId,CardNumber,CardName,ExpiryDate,cvccode,Address1,Address2,Town,PostCode,Country) VALUES(:userid,:cnumber,:cname,:expdate,:ccvc,:add1,:add2,:town,:postcode,:country)";
					$query = $dbh->prepare($sql);
					$query->bindParam(':userid',$userid,PDO::PARAM_STR);
					$query->bindParam(':cnumber',$fname,PDO::PARAM_STR);
					$query->bindParam(':cname',$mobileno,PDO::PARAM_STR);
					$query->bindParam(':expdate',$email,PDO::PARAM_STR);
					$query->bindParam(':ccvc',$password,PDO::PARAM_STR);
					$query->bindParam(':add1',$userid,PDO::PARAM_STR);
					$query->bindParam(':add2',$fname,PDO::PARAM_STR);
					$query->bindParam(':town',$mobileno,PDO::PARAM_STR);
					$query->bindParam(':postcode',$email,PDO::PARAM_STR);
					$query->bindParam(':country',$password,PDO::PARAM_STR);
					$query->execute();
					$lastInsertId = $dbh->lastInsertId();
					if($lastInsertId)
						{
						echo '<script>alert("Your payment is successfull!")</script>';
						}
					else 
						{
						echo "<script>alert('Something went wrong. Please try again');</script>";
						}
				}
			}
		}
	} 
}	
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' name='viewport'/>
    <title>Card payment</title>
	<link rel="icon" href="images/leylandicon.jpg">
    <!-- CUSTOM STYLE  -->
    <link rel="stylesheet" href="assets/css/w3css.css">
	<link rel="stylesheet" href="assets/css/cardfont.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<style>
body{
  background: #fac0cf;
}
body, input{
  font-family: "Roboto";
  font-size: 1em;
}
/* CSS for Credit Card Payment form */
.credit-card-box .panel-title {
    display: inline;
    font-weight: bold;
}
.credit-card-box label {
    display: block;
	float: center;
}
/* The old "center div vertically" hack */
.credit-card-box .display-table {
    display: table;
}
.credit-card-box .display-tr {
    display: table-row;
}
.credit-card-box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 50%;
}
/* Just looks nicer */
.credit-card-box .panel-heading img {
    min-width: 180px;
}
h1, .credit{
  font-family: "Roboto Slab";
}
.credit{
  text-align: center;
  font-size: 0.7em;
  padding: 10px;
}

.item{
  width: 60px;
  vertical-align: middle;
  margin-right: 15px;
}
.card .company{
  box-sizing: border-box;
  float: right;
}
.card{
  position: relative;
  perspective: 600px;
}
.card, .card .side{
  width: 350px;
  height: 200px;
}
.card .side{
  border-radius: 5px 5px;
  transition: all 0.4s linear;
  background-image: url("images/backblack.jpg");
  color: #FFF;
  box-sizing: border-box;
  transform-style: preserve-3d;
  backface-visibility: hidden;
  position: absolute;
	top: 0;
	left: 0;
}
.card .front{
  padding: 10px;
  transform: rotateX(0deg) rotateY(0deg);
}
.card.flip .front{
  transform: rotateY(180deg);
}
.card .cc-num{
  width: 100%;
  padding-top: 100px;
}
.card input{
  outline: none;
  border: 0px solid;
  background: none;
  color: #FFF;
}
.card[data-type="visa"] input::-webkit-input-placeholder, .card[data-type="mastercard"] input::-webkit-input-placeholder{
  color: #DDD;
}
.card[data-type="visa"] input::-moz-placeholder, .card[data-type="mastercard"] input::-moz-placeholder{
  color: #DDD;
}
.card[data-type="visa"] input:-ms-placeholder, .card[data-type="mastercard"] input:-ms-placeholder{
  color: #DDD;
}
.card[data-type="visa"] .company{
  color: rgba(255,255,255,0.9);
font-style: italic;
text-shadow: 0px 0px 3px rgba(17,123,173,0.9);
}
.card[data-type="visa"] .side{
  background: #1db1cf;
}
.card[data-type="mastercard"] .side{
  background: #4d86ce;
}
.card[data-type="mastercard"] .company div{
  float: left;
width: 15px;
height: 15px;
border-radius: 10px;
background: rgba(239,209,57,0.8);
}
.card[data-type="mastercard"] .company div:first-child{
background: rgba(223,40,40,0.8);
margin-right: -5px;
}
.signature{
  background: #DDD;
  color: #000;
  padding: 10px;
}
.right{
  float: right;
}
.sig{
  font-family: "Allura";
}
.signature input.cc-cvc{
  color: #000;
  width: 40px;
}
.stripe{
  margin: 20px 0;
  height: 40px;
  background: #000;
}
.card .back{
  padding-top: 15px;
  transform: rotateY(-180deg);
}
.card.flip .back{
  transform: rotateX(0deg) rotateY(0deg);
}
.button{
  background: #3194a8;
  padding: 4px;
  color: #FFF;
  cursor: pointer;
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
  border-radius: 5px 5px;
}
.button:hover{
  background: #33B5E5;
}
.checkout{
  margin: 0 auto;
  width: 400px;
  background-color: white;
  border-radius: 5%;
  padding-left:10px;
  padding-right:10px;
}
.addr input{
  width: 100%;
  outline: none;
  border: 0px solid;
  padding: 5px;
}
#main-menu .widget,#main-menu .widget > h3{display:none}
#main-menu .show-menu{display:block}
#main-menu{position:relative;height:56px;z-index:15}
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
                                        <li><a  href="menu.php">Available Books</a></li>
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
	
	 <div class="checkout">
  <h1>Checkout</h1>
  <p>You are about to buy:</p>
  <p><img class="item" title="Image of Cover" src="https://i.imgur.com/bqvpFUM.jpg" />My Neighbour Totoro for £22.99</p>
  <p>You don't have a card saved with us, so you'll need to add one now</p>
  <!-- CREDIT CARD FORM STARTS HERE -->
	<div class="panel panel-default credit-card-box">
		<div class="panel-heading display-table" >
			<div class="row display-tr" >
			<h3 class="panel-title display-td" >Payment Details</h3>
			<div class="display-td" >                            
			<img class="img-responsive pull-right" src="images/visa.jpg" width="150px" height="50px">
			</div>
		</div>                    
	</div>
	
  <div class="card">
    <div class="front side">
      <span class="company">
        CARD
      </span>
      PAYMENT CARD
      <input type="text" placeholder="Card number"  name="cardnumber" maxlength="19" class="cc-num" />
      <div>
        Card Holder:
        <input type="text" placeholder="Card name" name="cardname" class="cc-name" />
      </div>
	  <div>
        Expires:
        <input type="text" placeholder="MM/YY" name="expdate" class="cc-exp" />
      </div>
    </div>
    <div class="back side">
      <div class="stripe"></div>
      <div class="signature">
        <span class="right">
        CVC: <input type="text" placeholder="000" name="cvc" class="cc-cvc" maxlength="4" />
        </span>
        <span class="sig">
          our lovely customer
        </span>
      </div>
    </div>
  </div>
  <div class="button flip">
    Flip over
  </div>
  <p>Now, where to send it?</p>
   <div class="addr">
   <input type="text" name="add1" placeholder="Address Line 1" />
    <input type="text" name="add2" placeholder="Address Line 2" />
    <input type="text" name="town" placeholder="Town" />
    <input type="text" name="postcode" placeholder="Postcode" />
    <input type="text" name="country" placeholder="Country" />
	<input type="text" placeholder="Verification code" name="vercode" maxlength="5" autocomplete="off" 
	required style="width: 150px; height: 25px;"/>&nbsp;<img src="captcha.php">
   </div>
   <div class="button">
    Continue
  </div>
   <div class="credit col-md-12">
	   &copy; 2020 Leyland Online Library Management System | Designed by : Adaku Inem | All rights reserved.
	</div>
 </div>

	
	
		<!-- If you're using Stripe for payments -->
	<script type="text/javascript" src="assets/js/cardcustom.js"></script>
		
</body>
</html>

<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/get_book.php');
if(strlen($_SESSION['login'])==0)
{   
	header('location:index.php');
	}
else{ 
	if(isset($_POST['update']))
	{    
	$bookid=$_SESSION['bookid'];  

	$sql="selct * from tablbooks where id=:bookid";
	$query = $dbh->prepare($sql);
	$query->bindParam(':bookid',$userid,PDO::PARAM_STR);
	$query->execute();}
	?>
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
    <title>Books | Leyland Online Library </title>
	<link rel="icon" href="images/leylandicon.jpg">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
	
	<style type="text/css">
body{
	background-color:#f24471;
	color:black;
}
	.container.fullwidth {
  width: 100%;
}

.container.no-padding {
  padding-left: 0;
  padding-right: 0;
}
.bookname{
	color: white;
	font-size: 60px;
	font-weight: 800px;
	text-transform: uppercase;
  line-height: 1.2em !important;
  margin-bottom: 0;
  margin-top: 0;
}
.auth{
	color: #d4bec4;
	font-size: 20px;
	font-weight: 150px;
	font-style: italic;
	font-family: "Poppins", sans-serif;
  line-height: 1.2em !important;
  margin-bottom: 0;
  margin-top: 0;
}
.stars{
	color: white;
}
.excerpt{
	font-size: 20px;
	font-weight: 150px;
	
}
h1, h2, h3,
h4, h5, h6 {
  font-family: "Poppins", sans-serif;
  line-height: 1.2em !important;
  margin-bottom: 0;
  margin-top: 0;
  font-weight: 600;
}

.h1, .h2, .h3,
.h4, .h5, .h6 {
  margin-bottom: 0;
  margin-top: 0;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
}

h1, .h1 {
  font-size: 36px;
}

h2, .h2 {
  font-size: 30px;
}

h3, .h3 {
  font-size: 24px;
}

h4, .h4 {
  font-size: 18px;
}

h5, .h5 {
  font-size: 16px;
}

h6, .h6 {
  font-size: 14px;
  color: #222222;
}
#header {
  padding: 14px 0;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
}

#header.header-scrolled {
  box-shadow: -21.213px 21.213px 30px 0px rgba(158, 158, 158, 0.3);
  background: rgba(34, 34, 34, 0.9);
  transition: all 0.5s;
}
.p1-gradient-bg, .primary-btn, .banner-area, .single-price:hover .price-bottom, .click-btn, {
  background-image: -moz-linear-gradient(90deg, #f45622 0%, #f53e54 100%);
  background-image: -webkit-linear-gradient(90deg, #f45622 0%, #f53e54 100%);
  background-image: -ms-linear-gradient(90deg, #f45622 0%, #f53e54 100%);
}
@media (max-width: 1199.98px) {
  .banner-area .fullscreen {
    height: 800px !important;
  }
}

.banner-content {
  text-align: center;
}

.banner-content h1 {
  color: #fff;
  font-size: 72px;
  font-weight: 700;
  line-height: 1em;
  margin-top: 20px;
}

.banner-content h1 span {
  font-weight: 700;
}

@media (max-width: 991.98px) {
  .banner-content h1 {
    font-size: 36px;
  }
}

@media (max-width: 991.98px) {
  .banner-content h1 br {
    display: none;
  }
}

@media (max-width: 1199.98px) {
  .banner-content h1 {
    font-size: 45px;
  }
}

@media (max-width: 414px) {
  .banner-content h1 {
    font-size: 40px;
  }
}

.banner-content h5 {
  font-weight: 400;
  letter-spacing: 3px;
}

@media (max-width: 1280px) {
  .banner-content br {
    display: none;
  }
}

@media (max-width: 800px) {
  .banner-content {
    margin-top: 80px;
  }
}

@media (max-width: 800px) {
  .banner-right img {
    width: 55%;
    margin-right: auto !important;
    margin-left: auto !important;
    display: block;
  }
}
.p1-gradient-bg, .primary-btn, .banner-area, .single-price:hover .price-bottom, .call-to-action-area, .single-footer-widget .click-btn, .generic-banner {
  background-image: -moz-linear-gradient(90deg, #f45622 0%, #f53e54 100%);
  background-image: -webkit-linear-gradient(90deg, #f45622 0%, #f53e54 100%);
  background-image: -ms-linear-gradient(90deg, #f45622 0%, #f53e54 100%);
}

.primary-btn {
  line-height: 42px;
  padding-left: 30px;
  padding-right: 60px;
  border-radius: 25px;
  border: none;
  color: #fff;
  display: inline-block;
  font-weight: 500;
  position: relative;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  text-transform: uppercase;
  position: relative;
}

.primary-btn:focus {
  outline: none;
}

.primary-btn span {
  color: #fff;
  position: absolute;
  top: 50%;
  transform: translateY(-60%);
  right: 30px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.primary-btn:hover {
  color: #a9c9e8;
}

.primary-btn:hover span {
  color: #a9c9e8;
  right: 20px;
}

.primary-btn.white {
  border: 1px solid #fff;
  color: #a9c9e8;
}

.primary-btn.white span {
  color: #a9c9e8;
}

.primary-btn.white:hover {
  background: #fff;
  color: #f53f51;
}

.primary-btn.white:hover span {
  color: #f53f51;
}
.primary-btn {
  background: #fff;
  border: 1px solid transparent;
  color: #222;
  padding-left: 40px;
  padding-right: 40px;
  border-radius: 50px;
}

.primary-btn:hover {
  border: 1px solid #fff;
  background: transparent;
  color: #fff;
}

.single-price .price-bottom .primary-btn {
  margin-top: 20px;
  background: #a9c9e8;
  color: #fff;
  text-transform: capitalize;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.single-price .price-bottom .primary-btn:hover {
  border: 1px solid transparent;
}

@media (max-width: 1280px) {
  .single-price .price-bottom {
    margin: 0;
  }
}

@media (max-width: 1024px) {
  .single-price .price-bottom .primary-btn {
    padding-left: 22px;
    padding-right: 22px;
  }
}
.single-price:hover .primary-btn {
  background-color: #ca4829;
}

@media (max-width: 800px) {
  .banner-right img {
    width: 55%;
    margin-right: auto !important;
    margin-left: auto !important;
    display: block;
  }
}
.block-title{color: white; font-size: 30px;}


.breadcam_bg {
  background-image: url(images/blog-banner.jpg);
}
.index #content-wrapper > .container{margin:0 -15px}
.item #content-wrapper > .container{margin:0 -20px}
#main-wrapper{float:center;overflow:hidden;box-sizing:border-box}
#sidebar-wrapper{display:none}
.index #main-wrapper{width:100%}
.item #main-wrapper{float:none;margin:0 auto;padding:0 15px 5px}
.post-image-wrap{position:relative;display:block}
.post-image-link,.about-author .avatar-container,.comments .avatar-image-container{background-color:#f9f9f9;color:transparent!important}
.post-thumb{display:block;position:relative;width:100%;height:100%;object-fit:cover;z-index:1;transition:opacity .17s ease}
#header-wrap{position:relative;width:100%;height:56px;background-color:#171717;z-index:1010;box-shadow:0 1px 4px 0 rgba(0,0,0,0.1)}
#header-wrap .container{position:relative;margin:0 auto}
.header-menu{float:center}
#main-menu .widget,#main-menu .widget > h3{display:none}
#main-menu .show-menu{display:block}
#main-menu{position:relative;height:56px;z-index:15}
.show-search,.hide-search{position:absolute;top:8px;right:0;display:block;width:40px;height:40px;line-height:40px;z-index:20;color:#ffffff;font-size:14px;font-weight:400;text-align:right;cursor:pointer;transition:color .17s ease}
.show-search:hover,.hide-search:hover{color:#ea4c89}
.show-search:before{content:"\f002";font-family:FontAwesome}
.hide-search:before{content:"\f00d";font-family:FontAwesome}
#nav-search{display:none;position:absolute;left:0;top:0;width:100%;height:56px;z-index:99;background-color:#171717;box-sizing:border-box;padding:0}
#nav-search .search-form{width:100%;height:56px;background-color:rgba(0,0,0,0);line-height:56px;overflow:hidden;padding:0}
#nav-search .search-input{width:100%;height:56px;font-family:inherit;color:#ffffff;margin:0;padding:0 50px 0 0;background-color:rgba(0,0,0,0);font-size:13px;font-weight:400;box-sizing:border-box;border:0}
#nav-search .search-input:focus{color:#ffffff;outline:none}
.mobile-menu-toggle{display:none;position:absolute;top:8px;left:0;width:40px;height:40px;line-height:40px;z-index:20;color:#ffffff;font-size:17px;font-weight:400;text-align:left;cursor:pointer;transition:color .17s ease}
.mobile-menu-toggle:hover{color:#ea4c89}
.mobile-menu-toggle:before{content:"\f0c9";font-family:FontAwesome}
.nav-active .mobile-menu-toggle:before{content:"\f00d";font-family:FontAwesome}
.overlay{display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:990;background:rgba(255,255,255,0.8)}
.mobile-menu-wrap{display:none;position:absolute;top:56px;left:0;width:100%;background-color:#171717;box-sizing:border-box;visibility:hidden;z-index:1000;opacity:0;transition:all .17s ease}
.nav-active .mobile-menu-wrap{visibility:visible;opacity:1}
.mobile-menu{position:relative;overflow:hidden;padding:20px;border-top:1px solid rgba(255,255,255,0.03)}
.mobile-menu > ul{margin:0}
.mobile-menu .m-sub{display:none;padding:0}
.blur-wrap{position:absolute;top:0;left:0;width:100%;height:380px;overflow:hidden;z-index:1;margin:0;box-shadow:0 0 5px 0 rgba(0,0,0,0.1)}
.blur-inner{position:absolute;top:0;left:0;right:0;bottom:0;background-color:#171717;background-size:cover;background-position:center;background-repeat:no-repeat;filter:blur(10px);margin:-20px}
.blur-inner:after{content:'';position:absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.2)}
#home-ad-top .widget > h3{display:none}
#home-ad-top .widget{position:relative;padding:0 20px}
#home-ad-top .widget-content{position:relative;width:728px;max-width:100%;max-height:90px;line-height:1;margin:40px auto 0}
.main .widget{position:relative}
.queryEmpty{font-size:13px;font-weight:400;padding:10px 0;margin:0 0 25px;text-align:center}
.widget iframe,.widget img{max-width:100%}
.post-snippet{position:relative;display:block;overflow:hidden;font-size:12px;color:#888;line-height:1.6em;font-weight:400;margin:10px 0 0}
 h2.post-title{font-size:25px;color:#fff;line-height:1.5em;font-weight:700;position:relative;display:block;margin:10px 0 15px}
.post-footer{position:relative;float:center;width:100%;margin:25px 0 0}
.inline-ad{position:relative;display:block;max-height:60px;margin:0 0 30px}
.inline-ad > ins{display:block!important;margin:0 auto!important}
.item .inline-ad{float:center;width:100%;margin:30px 0 0}
.thread-expanded .thread-count a,.loadmore{display:none}
.comments .footer,.comments .comment-footer{font-size:13px}
iframe.blogger-iframe-colorize,iframe.blogger-comment-from-post{height:253px!important}
.post-body h2,.post-body h2,.post-body h3,.post-body h4,.post-body h5,.post-body h6{color:#171717;margin:0 0 15px}
.post-body h2,.post-body h2{font-size:24px}
.post-body h3{font-size:21px}
.post-body h4{font-size:18px}
.post-body h5{font-size:16px}
.post-body h6{font-size:13px}
.widget .post-body ul,.widget .post-body ol{line-height:1.5;font-weight:400}
.widget .post-body li{margin:5px 0;padding:0;line-height:1.5}
.post-body ul{padding:0 0 0 20px}
.post-body ul li:before{content:"\f105";font-family:FontAwesome;font-size:13px;font-weight:900;margin:0 5px 0 0}
.post-body u{text-decoration:underline}
.post-body a{transition:color .17s ease}
.post-body strike{text-decoration:line-through}
.footer li{display:inline-block;height:34px;padding:0;margin:0 5px}
.footer li:last-child{margin:0 0 0 5px}
.footer li a{display:block;font-size:12px;color:#ffffff;font-weight:400;line-height:34px;padding:0 5px;transition:color .17s ease}
.footer li a:hover{color:#ea4c89}
.hidden-widgets{display:none;visibility:hidden}
.back-top{display:none;z-index:1010;width:32px;height:32px;position:fixed;bottom:25px;right:25px;background-color:#ea4c89;cursor:pointer;overflow:hidden;font-size:19px;color:#fff;text-align:center;line-height:32px;border-radius:3px}
.back-top:after{content:'\f106';position:relative;font-family:FontAwesome;font-weight:400}
.errorWrap{color:#171717;text-align:center;padding:180px 0}
.errorWrap h3{font-size:160px;line-height:1;margin:0 0 30px}
.errorWrap h4{font-size:25px;margin:0 0 20px}
.errorWrap p{margin:0 0 10px}
.errorWrap a{display:block;color:#ea4c89;padding:10px 0 0}
.errorWrap a i{font-size:14px}
.errorWrap a:hover{text-decoration:underline}
@media (max-width: 1100px) {
.row{width:100%}
#header-wrap,#footer-wrapper{box-sizing:border-box;padding:0 20px}
#content-wrapper{position:relative;box-sizing:border-box;padding:0 20px}
.errorWrap{padding:130px 0}
}


</style>
</head>

<body>
    
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
    <!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-4 col-lg-4">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
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

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg ">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h5 class="text-white text-uppercase">Leyland</h5>
							<h1 class="text-uppercase">
								New Adventure				
							</h1>
						</div>											
					</div>
    </div>
    <!-- bradcam_area_end -->

    
	
	</br></br></br>  
  
  

<div class="bs-region--top">
	<div class="container">
		<div class="row">
<div class="col-xs-12 col-sm-4 col-md-4 bs-region bs-region--top-left">
	<div class="block-region-top-left"><section class="block block-ctools-block block-entity-fieldnodefield-title clearfix">
		<div class="block-header"> </div>
		<div>
			<section class="block block-ctools-block block-entity-fieldnodefield-cover clearfix">
				<div class="block-header">
				
				<div class="block-content" class="post" style="margin-left: 0px;" style="color: white;">
								
<?php
$sql = "SELECT tablbooks.BookName,tblcategory.CategoryName, images.image, tblauthors.AuthorName,tablbooks.ISBNNumber,tablbooks.BookPrice, tablbooks.id as bookid from tablbooks join tblcategory on tblcategory.id=tablbooks.CatId join images on images.id=tablbooks.Image join tblauthors on tblauthors.id=tablbooks.AuthorId ";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>         
				
				<div class="field field--name-field-cover field--type-image field--label-hidden field--item" > 
				<img itemprop="image" class="intro-book" img src="<?php echo htmlentities($result->image); ?>" class="post_image" alt="" width="350" 
				 height="530" alt=" " typeof="foaf:Image" class="img-responsive">
				</div>
				</div><!--php endforeach ? -->
				
</div>	</section><?php }} ?>

			<br/>

<section class="block block-ctools-block block-entity-fieldnodefield-isbn clearfix">
				
		<?php $sql = "SELECT tablbooks.BookName,tblcategory.CategoryName,tblauthors.AuthorName,tablbooks.ISBNNumber,tablbooks.BookPrice,tablbooks.id as bookid from  tablbooks join tblcategory on tblcategory.id=tablbooks.CatId join tblauthors on tblauthors.id=tablbooks.AuthorId order by id desc limit 1";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>        
				
				<div class="block-content">
				<div itemprop="name" class="field field--name-field-title auth"> ISBN: <?php echo htmlentities($result->ISBNNumber);?></div>
			
				</div>
			</section><?php }} ?>
		</div>
	</div>
</div>

<div class="col-xs-12 col-sm-8 col-md-6 bs-region bs-region--top-center">
	<div class="block-region-top-center">
		<section class="block block-ctools-block block-entity-fieldnodefield-title clearfix">
		
			<div class="block-header">
			<div class="block-content">
			<?php $sql = "SELECT tablbooks.BookName,tblcategory.CategoryName,tblauthors.AuthorName,tablbooks.ISBNNumber,tablbooks.id as bookid from  tablbooks join tblcategory on tblcategory.id=tablbooks.CatId join tblauthors on tblauthors.id=tablbooks.AuthorId";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                    
                           
                              <div itemprop="name" class="field field--name-field-title bookname"><?php echo htmlentities($result->BookName);?></div>
			</div></div></div>
			
</section><?php }} ?>

		<section class="block block-ctools-block block-entity-fieldnodefield-author-er clearfix">
			
					
			<div class="block-header">
			<div class="block-content">
			<?php $sql = "SELECT tablbooks.BookName,tblcategory.CategoryName,tblauthors.AuthorName,tablbooks.ISBNNumber,tablbooks.BookPrice,tablbooks.id as bookid from  tablbooks join tblcategory on tblcategory.id=tablbooks.CatId join tblauthors on tblauthors.id=tablbooks.AuthorId";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{                                                
            	 ?>                
                              <div itemprop="name" class="field field--name-field-title auth"> By <?php echo htmlentities($result->AuthorName);?></div>
		</div></div>
			 
</section><?php }} ?>
		
		<br/>
		<section class="block block-mnybks-book block-book-rate clearfix">
			<div class="block-header"> </div>
			<div class="block-content">
				<div class="fivestar-default">
					<div class="fivestar-widget-static fivestar-widget-static-vote fivestar-widget-static-5 clearfix">
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half"></i>
						</div>
				</div></div>
			</div>
		</section><br/>
			


		<section class="block block-ctools-block block-entity-fieldnodefield-author-er clearfix">
			<div class="block-header">
			<div class="block-content">
			<?php $sql = "SELECT tablbooks.BookName,tblcategory.CategoryName,tblauthors.AuthorName,tablbooks.ISBNNumber,tablbooks.BookPrice,tablbooks.id as bookid from  tablbooks join tblcategory on tblcategory.id=tablbooks.CatId join tblauthors on tblauthors.id=tablbooks.AuthorId";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                    
                           
                              <div itemprop="name" class="field field--name-field-title auth"> Price: $<?php echo htmlentities($result->BookPrice);?></div>
			</div></div>
			
</section><?php }} ?>
		
		<br/>
		<section class="block block-mnybks-book block-book-file-links clearfix">
			<div class="block-header">	
			<div class="block-content">	
				<a href="card.php"  class="primary-btn text-uppercase" class="mb-read-online">Read Online</a>
			</div> </div>
		</section>
		
			<br/>
		<section class="block block-ctools-block block-entity-fieldnodefield-excerpt clearfix">
			<div class="block-header">
				<h2 class="block-title excerpt">Book Excerpt</h2>
			</div>
			<div class="block-header">
			<div class="block-content"><div class="field field--name-field-excerpt field--type-text-long field--label-hidden field--item">
			<?php $sql = "SELECT tablbooks.BookName,tblcategory.CategoryName,tblauthors.AuthorName,tablbooks.ISBNNumber,tablbooks.BookPrice, tablebook.About, tablbooks.id as bookid from  tablbooks join tblcategory on tblcategory.id=tablbooks.CatId join tblauthors on tblauthors.id=tablbooks.AuthorId";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                    
                           
                              <div itemprop="name" class="field field--name"><p> <?php echo htmlentities($result->About);?></div></p>
			</div></div></div>
			
</section><?php }} ?>
<div class="block-content">
				
					
			
	</div>
</div>
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
				
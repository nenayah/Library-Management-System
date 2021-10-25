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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Payment | Leyland Online Library </title>
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
	<!-- Mobile Menu -->
	<link href="css/mmenu.css" rel="stylesheet" type="text/css" />
	<link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
	<!-- Responsive Table -->
	<link rel="stylesheet" type="text/css" href="css/responsivetable.css" />
	<!-- Accordion Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/jquery.accordion.css">
	<!-- Stylesheet -->
	<link href="style.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
body{
	background-color:#7e9bd6;
	color:white;
}
	.container.fullwidth {
  width: 100%;
}

.container.no-padding {
  padding-left: 0;
  padding-right: 0;
}
#freecssfooter{display:block;width:100%;padding:120px 0 20px;overflow:hidden;background-color:transparent;z-index:5000;text-align:center;}
#freecssfooter div#fcssholder div{display:none;}
#freecssfooter div#fcssholder div:first-child{display:block;}
#freecssfooter div#fcssholder div:first-child a{float:none;margin:0 auto;}

h1, h2, h3,
h4, h5, h6 {
  font-family: "Poppins", sans-serif;
  color: #222222;
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
  color: #222222;
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
.block-title{color: white; font-size: 15px;}


.breadcam_bg {
  background-image: url(images/blog-banner.jpg);
}


#content-wrapper{position:relative;padding:3px;margin:5px auto;z-index:10;overflow:hidden}
#content-wrapper h1{float:center;font-size:40px;color:#f5678a;font-family:FontAwesome;font-weight:600;line-height:1.6em;padding:12px,0,0,0; margin:0 0 10px}
#content-wrapper h1 span{background-color:black;border-align:center;padding: 12px 12px; border: 1px black;}
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
.index-post-wrap{display:flex;flex-wrap:wrap}
.index-post{width:calc(100% / 3);flex-direction:column;vertical-align:top;box-sizing:border-box;padding:0 10px;margin:0 0 10px}
.index-post .post-content{position:relative;float:center;width:100%;height:220px;background-color:#fff;overflow:hidden;box-sizing:border-box;padding:10px;border-radius:3px;box-shadow:0 0 5px 0 rgba(0,0,0,0.05)}
.index-post .post-image-wrap{float:center;width:100%;height:100%;overflow:hidden;border-radius:3px}
.index-post .post-image-wrap .post-image-link{width:100%;height:100%;position:relative;display:block;z-index:1;overflow:hidden}
.post-tag{position:relative;display:inline-block;height:20px;background-color:rgba(0,0,0,0.5);color:#fff;font-size:10px;font-weight:600;line-height:20px;text-transform:uppercase;padding:0 7px;border-radius:2px}
.index-post .post-info{display:block;position:absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(255,255,255,0.95);z-index:5;padding:10px;opacity:0;transition:opacity .17s ease}
.index-post .post-image-wrap:hover .post-info{opacity:1}
.index-post .post-info-inner{position:relative;float:center;overflow:hidden;width:100%;height:100%}
.index-post .post-info h2.post-title{font-size:40px;color:#f5678a;font-family:FontAwesome;font-weight:600;line-height:1.6em;padding:12px,0,0,0; margin:0 0 10px}
.widget iframe,.widget img{max-width:100%}
.post-snippet{position:relative;display:block;overflow:hidden;font-size:12px;color:#888;line-height:1.6em;font-weight:400;margin:10px 0 0}
.item-post h2.post-title{font-size:25px;color:#fff;line-height:1.5em;font-weight:700;position:relative;display:block;margin:10px 0 15px}
.post-meta{color:#f2f2f2;font-size:13px;font-weight:400;font-style:italic;padding:0 1px}
.post-meta .post-author,.post-meta .post-date{display:inline-block;margin:0 10px 0 0}
.post-meta .post-author .meta-avatar{float:center;height:20px;width:20px;overflow:hidden;margin:0 7px 0 0;border-radius:100%;box-shadow:0 0 3px rgba(0,0,0,0.1)}
.post-meta .post-author .meta-avatar img{display:block;width:100%;height:100%;border-radius:100%}
.post-meta a{color:#f2f2f2;transition:color .17s ease}
.post-meta a:hover{color:#ea4c89}
.post-meta .post-date:before{content:'\f017';font-family:FontAwesome;font-size:12px;font-style:normal;margin:0 4px 0 0}
.item-post .post-content{display:block;overflow:hidden;background-color:#fff;margin:20px 0 0;border-radius:3px;box-shadow:0 0 5px 0 rgba(0,0,0,0.05)}
.item-post .post-body{display:block;font-size:14px;line-height:1.6em;padding:25px}
.item-post .post-outer{padding:0}
.item-post .post-body img{max-width:100%}
.post-footer{position:relative;float:center;width:100%;margin:25px 0 0}
.inline-ad{position:relative;display:block;max-height:60px;margin:0 0 30px}
.inline-ad > ins{display:block!important;margin:0 auto!important}
.item .inline-ad{float:center;width:100%;margin:30px 0 0}
.item-post-wrap > .inline-ad{margin:0 0 30px}
.post-labels{position:relative;overflow:hidden;padding:0 25px;margin:0 0 25px}
.post-labels span,.post-labels a{float:center;color:#ea4c89;font-size:13px;font-weight:600}
.post-labels span{color:#171717}
.post-labels a{margin:0 0 0 5px;transition:all .17s ease}
.post-labels .Label:after{content:','}
.post-labels .Label:last-child:after{display:none}
.post-labels a:hover{text-decoration:underline}
.post-share{position:relative;overflow:hidden;background-color:#fbfbfb;padding:15px 25px;margin:0;border-top:1px solid #f2f2f2}
ul.share-links{position:relative}
.share-links li{float:center;box-sizing:border-box;margin:0 5px 0 0}
.share-links li.whatsapp-mobile{display:none}
.is-mobile li.whatsapp-desktop{display:none}
.is-mobile li.whatsapp-mobile{display:inline-block}
.share-links li a{float:center;display:inline-block;width:30px;height:30px;line-height:30px;color:#fff;font-size:15px;text-align:center;font-weight:400;box-sizing:border-box;border-radius:3px;transition:all .17s ease}
.share-links li a:after{display:none;font-size:13px;font-weight:600;margin:0 0 0 5px}
.share-links .facebook-f a,.share-links .twitter a{width:auto;padding:0 10px}
.share-links .facebook-f a:after,.share-links .twitter a:after{display:inline-block}
.share-links li a:hover{opacity:.8}
.about-author{position:relative;display:block;overflow:hidden;background-color:#fff;padding:25px;margin:0 0 25px;border-radius:3px;box-shadow:0 0 5px 0 rgba(0,0,0,0.05)}
.about-author .avatar-container{position:relative;float:center;width:85px;height:85px;background-color:#f2f2f2;overflow:hidden;margin:0 15px 0 0;border-radius:100%}
.about-author .author-avatar{float:center;width:100%;height:100%;border-radius:100%}
.author-name{overflow:hidden;display:inline-block;font-size:16px;font-weight:600;margin:3px 0}
.author-name span{color:#171717}
.author-name a{color:#ea4c89}
.author-name a:hover{text-decoration:underline}
.author-description{display:block;overflow:hidden;font-size:13px;line-height:1.6em}
.author-description a{color:#171717;transition:color .17s ease}
.author-description a:hover{color:#ea4c89}
#related-wrap{float:center;width:100%;margin:0 0 25px}
#related-wrap .related-tag{display:none}
.related-title h3{color:#888;font-size:13px;text-transform:uppercase;font-weight:600;margin:0 0 15px}
.related-ready{float:center;width:100%}
.related-ready .loader{height:178px}
ul.related-posts{position:relative;overflow:hidden;margin:0 -10px;padding:0}
.related-posts .related-item{width:calc(100% / 3);position:relative;overflow:hidden;float:center;display:block;box-sizing:border-box;margin:0;padding:0 10px}
.related-item-inner{position:relative;float:center;width:100%;height:165px;background-color:#fff;overflow:hidden;box-sizing:border-box;padding:10px;border-radius:3px;box-shadow:0 0 5px 0 rgba(0,0,0,0.05)}
.related-posts .post-image-wrap{float:center;width:100%;height:100%;overflow:hidden;border-radius:3px}
.related-posts .post-image-wrap .post-image-link{width:100%;height:100%;position:relative;display:block;z-index:1;overflow:hidden}
.related-posts .post-info{display:block;position:absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(255,255,255,0.95);z-index:5;padding:20px;opacity:0;transition:opacity .17s ease}
.related-posts .post-image-wrap:hover .post-info{opacity:1}
.related-posts .post-info-inner{position:relative;float:center;overflow:hidden;width:100%;height:100%}
.related-posts .post-info h2.post-title{font-size:14px;color:#171717;font-weight:600;line-height:1.6em;margin:0 0 10px}
.related-posts .post-info .post-date{display:block;font-size:11px;color:#aaa;font-style:italic;padding:0 1px;margin:0 0 7px}
.related-posts .post-info .post-date:before{content:'\f017';font-family:FontAwesome;font-size:12px;font-style:normal;margin:0 4px 0 0}
ul.post-nav{position:relative;overflow:hidden;display:block;padding:0;margin:0 0 25px}
.post-nav li{display:inline-block;width:50%}
.post-nav .post-prev{float:center;text-align:left;box-sizing:border-box;padding:0 10px}
.post-nav .post-next{float:right;text-align:right;box-sizing:border-box;padding:0 10px}
.post-nav li a{color:#aaa;line-height:1.4em;display:block;overflow:hidden;transition:color .17s ease}
.post-nav li:hover a{color:#ea4c89}
.post-nav li span{display:block;font-size:11px;color:#aaa;font-weight:600;text-transform:uppercase;padding:0 0 2px}
.post-nav .post-prev span:before{content:"\f053";float:center;font-family:FontAwesome;font-size:8px;font-weight:400;text-transform:none;margin:1px 2px 0 0}
.post-nav .post-next span:after{content:"\f054";float:right;font-family:FontAwesome;font-size:8px;font-weight:400;text-transform:none;margin:1px 0 0 2px}
.post-nav p{font-size:13px;font-weight:400;line-height:1.4em;margin:0}
.post-nav .post-nav-active{opacity:.5}
.post-nav .post-nav-active p{color:#aaa}
#blog-pager{display:block;overflow:hidden;clear:both;text-align:center;padding:0 15px;margin:20px 0 10px}
.blog-pager a{display:inline-block;height:36px;background-color:#ea4c89;font-size:23px;color:#fff;font-weight:600;line-height:36px;padding:0 40px;border-radius:3px;transition:background .17s ease}
.blog-pager a:hover{background-color:#f5678a}
.blog-pager .blog-pager-newer-link{display:none}
.blog-post-comments{display:none}
.static_page .blog-post-comments{margin:10px 0 0}
h3.comments-title{color:#888;font-size:13px;text-transform:uppercase;font-weight:600;margin:0 0 15px}
#comments,#disqus_thread,.blog-post-comments .fb-comments{float:center;width:100%;background-color:#fff;box-sizing:border-box;padding:5px;margin:0;border-radius:3px;box-shadow:0 0 5px 0 rgba(0,0,0,0.05)}
#disqus_thread,.blog-post-comments .fb-comments{padding:10px 25px}
#gpluscomments{float:center!important;width:100%!important;margin:0 0 25px!important}
#gpluscomments iframe{float:center!important;width:100%}
.comments{display:block;clear:both;margin:0}
.comments > h3{float:center;width:100%;font-size:13px;font-style:italic;font-weight:600;margin:0 0 20px}
.comments > h3.no-comments{margin:0 0 15px}
.comments .comments-content{float:center;width:100%;margin:0}
#comments h4#comment-post-message{display:none}
.comments .comment-block{padding:0 0 0 55px}
.comments .comment-content{font-size:13px;line-height:1.6em;margin:10px 0}
.comment-thread .comment{position:relative;padding:15px 0 0;margin:15px 0 0;list-style:none;border-top:1px solid #f2f2f2}
.comment-thread ol{padding:0;margin:0 0 15px}
.comment-thread ol > li:first-child{padding:0;margin:0;border:0}
.comment-thread .avatar-image-container{position:absolute;top:15px;left:0;width:40px;height:40px;border-radius:100%;overflow:hidden}
.comment-thread ol > li:first-child > .avatar-image-container{top:0}
.avatar-image-container img{width:100%;height:100%}
.comments .comment-header .user{font-size:14px;color:#171717;display:inline-block;font-style:normal;font-weight:700;margin:0}
.comments .comment-header .user a{color:#171717}
.comments .comment-header .icon.user{display:none}
.comments .comment-header .icon.blog-author{display:inline-block;font-size:12px;color:#ea4c89;font-weight:400;vertical-align:top;margin:0 0 0 5px}
.comments .comment-header .icon.blog-author:before{content:'\f058';font-family:FontAwesome}
.comments .comment-header .datetime{display:inline-block;margin:0 0 0 5px}
.comment-header .datetime a{font-size:12px;color:#aaa;font-style:italic}
.comment-header .datetime a:before{content:'.';font-size:15px;line-height:15px;vertical-align:top;margin:0 5px 0 2px}
.comments .comment-actions{display:block;margin:0 0 15px}
.comments .comment-actions a{color:#aaa;font-size:11px;margin:0 15px 0 0;transition:color .17s ease}
.comments .comment-actions a:hover{color:#ea4c89}
.loadmore.loaded a{display:inline-block;border-bottom:1px solid rgba(0,0,0,0.1);text-decoration:none;margin-top:15px}
.comments .continue{display:none!important}
.comments .comment-replies{padding:0 0 0 55px}
.thread-expanded .thread-count a,.loadmore{display:none}
.comments .footer,.comments .comment-footer{font-size:13px}
iframe.blogger-iframe-colorize,iframe.blogger-comment-from-post{height:253px!important}
.post-body h2,.post-body h2,.post-body h3,.post-body h4,.post-body h5,.post-body h6{color:#171717;margin:0 0 15px}
.post-body h2,.post-body h2{font-size:24px}
.post-body h3{font-size:21px}
.post-body h4{font-size:18px}
.post-body h5{font-size:16px}
.post-body h6{font-size:13px}
blockquote{background-color:#f9f9f9;font-style:italic;padding:10px 20px;margin:0;border-left:4px solid #ea4c89}
blockquote:before,blockquote:after{display:inline-block;font-family:FontAwesome;font-weight:400;font-style:normal;line-height:1}
blockquote:before{content:'\f10d';margin:0 10px 0 0}
blockquote:after{content:'\f10e';margin:0 0 0 10px}
.widget .post-body ul,.widget .post-body ol{line-height:1.5;font-weight:400}
.widget .post-body li{margin:5px 0;padding:0;line-height:1.5}
.post-body ul{padding:0 0 0 20px}
.post-body ul li:before{content:"\f105";font-family:FontAwesome;font-size:13px;font-weight:900;margin:0 5px 0 0}
.post-body u{text-decoration:underline}
.post-body a{transition:color .17s ease}
.post-body strike{text-decoration:line-through}
#home-ad-footer .widget > h3{display:none}
#home-ad-footer .widget{position:relative;padding:0 20px}
#home-ad-footer .widget-content{position:relative;width:728px;max-width:100%;max-height:90px;line-height:1;margin:0 auto 40px}
.label-list li{display:inline-block}
.label-list li a{display:block;background-color:rgba(255,255,255,0.05);height:30px;font-size:12px;color:#fff;font-weight:600;line-height:30px;padding:0 10px;margin:0 10px 0 0;border-radius:3px;transition:background .17s ease}
.label-list li a:hover{background-color:#ea4c89}
#footer-menu{float:right}
.footer-menu li{display:inline-block;height:34px;padding:0;margin:0 5px}
.footer-menu li:last-child{margin:0 0 0 5px}
.footer-menu li a{display:block;font-size:12px;color:#ffffff;font-weight:400;line-height:34px;padding:0 5px;transition:color .17s ease}
.footer-menu li a:hover{color:#ea4c89}
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
@media (max-width: 980px) {
.header-menu{display:none}
.mobile-menu-wrap,.mobile-menu-toggle{display:block}
.show-search,.hide-search{background-color:#171717;font-size:17px;text-align:right}
#nav-search{left:-2px;width:calc(100% + 4px)}
#content-wrapper > .container,.item #content-wrapper > .container{margin:0}
#main-wrapper{width:100%;padding:0!important}
}
@media (max-width: 880px) {
.index-post{width:50%}
.label-list li a{margin:0 5px 5px 0}
.errorWrap{padding:60px 0}
}
@media (max-width: 680px) {
#footer-menu {width:100%;text-align:center}
.comment-form{margin:0}
}
@media (max-width: 540px) {
.index-post{width:100%}
.share-links li a.twitter{width:30px;padding:0}
.share-links li a.twitter:after{display:none!important}
#related-wrap,ul.related-posts{margin:0}
.related-posts .related-item{width:100%;padding:0;margin:0 0 25px}
.related-item-inner{height:180px}
.related-posts .post-title{font-size:17px}
.inline-ad,.inline-ad > ins{height:auto;min-height:1px;max-height:250px}
}
@media (max-width: 440px) {
.item-post h2.post-title{font-size:23px}
.share-links li a.facebook{width:30px;padding:0}
.share-links li a.facebook:after{display:none!important}
.about-author{text-align:center}
.about-author .avatar-container{float:none;display:table;margin:0 auto 10px}
#comments ol{padding:0}
}
@media (max-width: 360px) {
.errorWrap h3{font-size:130px}
.index-post .post-content{height:200px}
.post-share{padding:10px}
.about-author .avatar-container{width:60px;height:60px}
iframe.blogger-iframe-colorize,iframe.blogger-comment-from-post{height:263px!important}
}
.circle {
border: 1px black; 
width: 110px;
height: 110px;
border-radius: 50%;
}
</style> </head>
    <body>
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
                                        <li><a  href="menu.php">Available Books</a><span>|</span>
                                            
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
        <!-- End: Header Section -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>What are you looking for at the library?</h3>
                                            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">Search by Keyword</label>
                                                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="catalog" id="catalog" class="form-control">
                                                            <option>Search the Catalog</option>
                                                            <option>Catalog 01</option>
                                                            <option>Catalog 02</option>
                                                            <option>Catalog 03</option>
                                                            <option>Catalog 04</option>
                                                            <option>Catalog 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="category" id="category" class="form-control">
                                                            <option>All Categories</option>
                                                            <option>Category 01</option>
                                                            <option>Category 02</option>
                                                            <option>Category 03</option>
                                                            <option>Category 04</option>
                                                            <option>Category 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit" value="Search">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                                <!-- End: Search Section -->
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-md-push-3">
                                    <div class="booksmedia-detail-box">
                                        <div class="single-book-box">                                                
                                            <div class="post-thumbnail">
                                                <div class="book-list-icon yellow-icon"></div>
                                                <img alt="Book" src="images/books-media/list-view/book-media-01.jpg" />                                                    
                                            </div>
                                            <div class="post-detail">
                                                <div class="books-social-sharing">
                                                    <ul>
                                                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="optional-links">
                                                    <ul>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                <i class="fa fa-print"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <header class="entry-header">
                                                    <h2 class="entry-title">The Great Gatsby</h2>
                                                    <ul>
                                                        <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                        <li><strong>ISBN:</strong> 9781581573268</li>
                                                        <li>
                                                            <div class="rating">
                                                                <strong>Rating:</strong> 
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                            </div>
                                                        </li>
                                                        <li><strong>Edition:</strong> First edition</li>
                                                        <li><strong>Publisher:</strong> New York : Shaye Areheart Books, c2008</li>
                                                    </ul>
                                                </header>
                                                <div class="entry-content post-buttons">
                                                    <a href="#." class="btn btn-dark-gray">Place a Hold</a>
                                                    <a href="#." class="btn btn-dark-gray">View sample</a>
                                                    <a href="#." class="btn btn-dark-gray">Find Similar Titles</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p><strong>Summary:</strong> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                                        <ul class="detail-page-listing">
                                            <li><strong>Length:</strong> 518 pages.</li>
                                            <li><strong>Format:</strong> DVD</li>
                                            <li><strong>Language Note:</strong> Icelandic dialogue; English subtitles.</li>
                                            <li><strong>Genre :</strong> Feature films, Fiction films, Drama</li>
                                            <li><strong>Topics:</strong> Friendship, Bullies, Pranks, School</li>
                                            <li><strong>Time Period:</strong> 2000s -- 21st century</li>
                                        </ul>
                                        <div class="table-tabs" id="responsiveTabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Copies: 05</a></li>
                                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Reviews (12)</a></li>
                                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Table of Contents</a></li>
                                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">Novelist Recommendations</a></li> 
                                            </ul>
                                            <div class="tab-content">
                                                <div id="sectionA" class="tab-pane fade in active">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Library Name</th>
                                                                <th>Shelf Number</th>
                                                                <th>Material Type</th>
                                                                <th>Status </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Oak Park Public Library Main Branch</td>
                                                                <td>B PURMORT</td>
                                                                <td>Book</td>
                                                                <td>In Processing</td>                                                                    
                                                            </tr>
                                                            <tr>
                                                                <td>Bedford Park Public Library District</td>
                                                                <td>616.99 PUR</td>
                                                                <td>Book</td>
                                                                <td>Due 8/24/16</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Blue Island Public Library</td>
                                                                <td>BIO PUR</td>
                                                                <td>eBook</td>
                                                                <td>Due 8/24/16</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bridgeview Public Library</td>
                                                                <td>B PUR</td>
                                                                <td>DVD</td>
                                                                <td>In Processing</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Eisenhower Public Library District</td>
                                                                <td>616.994 PUR</td>
                                                                <td>Magazine</td>
                                                                <td>Checked In</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Forest Park Public Library</td>
                                                                <td>BIO PURMORT</td>
                                                                <td>Magazine</td>
                                                                <td>Checked In</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hinsdale Public Library</td>
                                                                <td>B PUR</td>
                                                                <td>Audio</td>
                                                                <td>Checked In</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oak Park Public Library Maze Branch</td>
                                                                <td>616.99 PUR</td>
                                                                <td>Audio</td>
                                                                <td>Due 9/10/16</td>
                                                            </tr>
                                                            <tr>
                                                                <td>River Grove Public Library District</td>
                                                                <td>616.994 PURMORT</td>
                                                                <td>Book</td>
                                                                <td>Due 9/10/16</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="sectionB" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>
                                                <div id="sectionC" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>
                                                <div id="sectionD" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>                                                    
                                                <div id="sectionE" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>                                                    
                                                <div id="sectionF" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="booksmedia-fullwidth booksmedia-popular-list">
                                            <h2 class="section-title text-center">Popular Items</h2>
                                            <span class="underline center"></span>
                                            <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <ul class="popular-items-detail-v1">
                                                <li>
                                                    <div class="book-list-icon blue-icon"></div>
                                                    <figure>
                                                        <img src="images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                                                        <figcaption>
                                                            <header>
                                                                <h4><a href="#.">The Great Gatsby</a></h4>
                                                                <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                                <p><strong>ISBN:</strong>  9781581573268</p>
                                                            </header>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                            <div class="actions">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                            <i class="fa fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-print"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-share-alt"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>                                                
                                                </li>
                                                <li>
                                                    <div class="book-list-icon yellow-icon"></div>
                                                    <figure>
                                                        <img src="images/books-media/layout-3/books-media-layout3-02.jpg" alt="Book">
                                                        <figcaption>
                                                            <header>
                                                                <h4><a href="#.">The Great Gatsby</a></h4>
                                                                <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                                <p><strong>ISBN:</strong>  9781581573268</p>
                                                            </header>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                            <div class="actions">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                            <i class="fa fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-print"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-share-alt"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>                                                
                                                </li>
                                                <li>
                                                    <div class="book-list-icon green-icon"></div>
                                                    <figure>
                                                        <img src="images/books-media/layout-3/books-media-layout3-03.jpg" alt="Book">
                                                        <figcaption>
                                                            <header>
                                                                <h4><a href="#.">The Great Gatsby</a></h4>
                                                                <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                                <p><strong>ISBN:</strong>  9781581573268</p>
                                                            </header>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                            <div class="actions">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                            <i class="fa fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-print"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-share-alt"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>                                                
                                                </li>
                                                <li>
                                                    <div class="book-list-icon blue-icon"></div>
                                                    <figure>
                                                        <img src="images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                                                        <figcaption>
                                                            <header>
                                                                <h4><a href="#.">The Great Gatsby</a></h4>
                                                                <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                                <p><strong>ISBN:</strong>  9781581573268</p>
                                                            </header>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                            <div class="actions">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                            <i class="fa fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-print"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-share-alt"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>                                                
                                                </li>
                                                <li>
                                                    <div class="book-list-icon yellow-icon"></div>
                                                    <figure>
                                                        <img src="images/books-media/layout-3/books-media-layout3-02.jpg" alt="Book">
                                                        <figcaption>
                                                            <header>
                                                                <h4><a href="#.">The Great Gatsby</a></h4>
                                                                <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                                <p><strong>ISBN:</strong>  9781581573268</p>
                                                            </header>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                            <div class="actions">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                            <i class="fa fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-print"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-share-alt"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>                                                
                                                </li>
                                                <li>
                                                    <div class="book-list-icon green-icon"></div>
                                                    <figure>
                                                        <img src="images/books-media/layout-3/books-media-layout3-03.jpg" alt="Book">
                                                        <figcaption>
                                                            <header>
                                                                <h4><a href="#.">The Great Gatsby</a></h4>
                                                                <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                                <p><strong>ISBN:</strong>  9781581573268</p>
                                                            </header>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                            <div class="actions">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                            <i class="fa fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-print"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                            <i class="fa fa-share-alt"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>                                                
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-pull-9">
                                    <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                        <div class="widget widget_related_search open" data-accordion>
                                            <h4 class="widget-title" data-control>Related Searches</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Subject</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Authors</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Series</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Other Searches</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_narrow_search" data-accordion>
                                            <h4 class="widget-title" data-control>Narrow your search</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Type of Material</h5>
                                                    <div class="widget_material" data-content>
                                                        <form action="#">
                                                            <label><input type="checkbox" name="material" value="books"> Books</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Publishing Date </h5>
                                                    <div class="widget widget_material" data-content>
                                                        <form action="#">
                                                            <label><input type="checkbox" name="material" value="books"> Books</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                        </form>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Popularity </h5>
                                                    <div class="widget widget_material" data-content>
                                                        <form action="#">
                                                            <label><input type="checkbox" name="material" value="books"> Books</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                        </form>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Language </h5>
                                                    <div class="widget widget_material" data-content>
                                                        <form action="#">
                                                            <label><input type="checkbox" name="material" value="books"> Books</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                        </form>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_recent_releases">
                                            <h4 class="widget-title">New Releases</h4>
                                            <ul>
                                                <li><a href="#">Books</a></li>
                                                <li><a href="#">eBooks</a></li>
                                                <li><a href="#">DVDS</a></li>
                                                <li><a href="#">Magazines</a></li>
                                                <li><a href="#">Audio</a></li>
                                                <li><a href="#">eAudio</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_recent_entries">
                                            <h4 class="widget-title">On-Order Items</h4>
                                            <ul>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-01.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-02.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-03.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->

      

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
<?php } ?>
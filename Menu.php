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
    <title>Books | Leyland Online Library </title>
	<link rel="icon" href="images/leylandicon.jpg">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
	
	<style>
	.breadcam_bg {
  background-image: url(images/ipad.jpg);
}
.breadcam_bg h3{
 color:  #f5678a;
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
</style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
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

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg ">
        <h3>Books</h3>
    </div>
    <!-- bradcam_area_end -->

    
	
	</br></br></br>
	
<!-- Content Wrapper -->
<div class='row' id='content-wrapper'>
<div class='container'>
<!-- Main Wrapper -->
<h1 align="center"><span>GENRES<span><h1>
<div id='main-wrapper'>
<div class='main section' id='main' name='Main Posts'><div class='widget Blog' data-version='2' id='Blog1'>
<div class='blog-posts hfeed index-post-wrap'>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="romance.php">
	<img alt='Sun' class='post-thumb' src="images/romance.jpg" />
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	ROMANCE</h2>
	</div>
	</div>
	</a>
</div>
</div>
</div>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="fantasy.php">
	<img alt='Sun' class='post-thumb' src="images/fantasy.jfif"/>
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	FANATASY & ADVENTURE</h2>
	</div>
	</div>
	</a>
</div>
</div>
</div>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="biography.php">
	<img alt='Cupcakes design and cuisine' class='post-thumb' src="images/biography.jpg"/>
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	BIOGRAPHY & HISTORY</h2>
	</div>
	</div>
	</a>
</div>
</div>
</div>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="children.php"/>
	<img alt='Paper and design endless possibilities' class='post-thumb' src="images/children.jpg"/>
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	CHILDREN</h2>
	</div>
	</div>
	</a>
</div>
</div>
</div>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="young.php"/>
	<img alt='Paper and design endless possibilities' class='post-thumb' src="images/young_adult.jpg"/>
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	YOUNG ADULT</h2>
	</div>
	</div>
	</a></div>
</div>
</div>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="horror.php">
	<img alt='Making beautiful paper flowers' class='post-thumb' src="images/horror.jpg"/>
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	HORROR</h2>
	</div>
	</div>
	</a>
</div>
</div>
</div>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="science.php"/>
	<img alt='Simple and innovative design' class='post-thumb' src="images/scifi.jpg"/>
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	SCIENCE FICTION</h2>
	</div>
	</div>
	</a>
</div>
</div>
</div>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="mystery.php">
	<img alt='How to make amazing designs' class='post-thumb' src="images/mystery.jpg"/>
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	MYSTERY & THRILLER</h2>
	</div>
	</div>
	</a>
</div>
</div>
</div>

<div class='blog-post hentry index-post'>
<div class='post-content'>
<div class='post-image-wrap'>
	<a class='post-image-link' href="literary.php">
	<img alt='How to make amazing designs' class='post-thumb' src="images/litfiction.jpg"/>
	<div class='post-info'>
	<div class='post-info-inner'>
	<h2 class='post-title'>
	LITERARY FICTION</h2>
	</div>
	</div>
	</a>
</div>
</div>
</div>


</div>
</div>
<div class='blog-pager' id='blog-pager'>
<a class='blog-pager-older-link' href="book.php" id='Blog1_blog-pager-older-link' title='Older Posts'>
View All Books
</a>
</div>
</div>
</div>
</div></div>
	
	
	

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
</div>
<!-- testimonial_area_ned  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="images/nyt.png" alt="nytbooks">
                    <div class="ovrelay">
                        <a target="_blank" href="https://www.instagram.com/nytbooks/?utm_source=ig_embed">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="images/zeroname.png" alt="thisgirlhas0name">
                    <div class="ovrelay">
                        <a target="_blank" href="https://www.instagram.com/thisgirlhasn0name/?utm_source=ig_embed">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="images/brave.png" alt="lifebyesther">
                    <div class="ovrelay">
                        <a target="_blank" href="https://www.instagram.com/lifebyesther/?utm_source=ig_embed">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="images/wellread.png" alt="wellreadblackgirl">
                    <div class="ovrelay">
                        <a target="_blank" href="https://www.instagram.com/wellreadblackgirl/?utm_source=ig_embed">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
					
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->
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
		<button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-round w3-red w3-opacity 
		w3-hover-opacity-off" style="padding:8px 60px">Stay Connected</button>
		</p>
	</div>
</div>

<!-- Email modal -->
<div id="id04" class="w3-modal">
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
						<button onclick="document.getElementById('id04').style.display='none'" type="submit" class="w3-button w3-block w3-blue">Sign Up</button>
					</div>
					<div class="w3-half">
						 <button onclick="document.getElementById('id04').style.display='none'" type="button" class="w3-button w3-block w3-red">No thanks</button>
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
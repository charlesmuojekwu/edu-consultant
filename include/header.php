<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designeek.com/template/schoolfun/maroon/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2017 08:55:59 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Foldam Educational Consult</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="style/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="style/stylemobile.css" />
	<!-- <link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" /> -->
	<script src="script/modernizr.js" type="text/javascript"></script>
	<script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/jquery-ui.js" type="text/javascript"></script>
	<script src="script/jquery.flexslider.js" type="text/javascript"></script>
	<script src="script/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="script/jquery.retina.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function (){
        $(window).scroll(function () {
            if ($(document).scrollTop() <= 40) {
                $('#header-full').removeClass('small');
                $('.tabs-blur').removeClass('no-blur');
                $('#main-header').removeClass('small');
            } else {
                $('#header-full').addClass('small');
                $('.tabs-blur').addClass('no-blur');
                $('#main-header').addClass('small');
            }
        });
        
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
			default_width: 600,
			default_height: 420,
			social_tools: false
		});
        $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('#tabs-content-bottom').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('.slider-tabs.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
        $('.slider-partners.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
            itemWidth: 163,
            itemMargin: 0
        });
        $('#slider-news.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
        $('#slider-event.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
        $( ".accordion" ).accordion({
	        heightStyle: "content"
        });
		$('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
		});
		$('img[data-retina]').retina({checkIfImageExists: true});
		$(".open-menu").click(function(){
		    $("body").addClass("no-move");
		});
		$(".close-menu, .close-menu-big").click(function(){
		    $("body").removeClass("no-move");
		});
	});
	</script>
</head>
<body>
	<header id="main-header" class="clearfix">
        <div id="header-full" class="clearfix">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="#" id="logo"><img src="images/logo.jpg" data-retina="images/logo-retina.png" alt="School Fun - WordPress Theme" /></a>
                <aside id="header-content">
                    <form method="post" action="#" id="searchform">
                        <div>
                            <input type="text" name="search" class="input" />
                            <input type="submit" name="submitsearch" class="button" value="Search" />
                        </div>
                    </form>
                     <ul id="list-social" >
                        <li id="icon-facebook"></li>
                        <li id="icon-facebook"><a href="https://web.facebook.com/foldamedu/?ref=br_rs">Facebook</a></li>
                        <li id="icon-twitter"><a href="#">Twitter</a></li>
                        <li id="icon-gplus"><a href="#">Google Plus</a></li>
                        <li id="icon-linkedin"><a href="#">Linkedin</a></li>
                         <!-- <li id="icon-youtube"><a href="#">Youtube</a></li>
                        <li id="icon-flickr" class="last"><a href="#">Flickr</a></li>-->
                    </ul>
                   
                </aside>
            </div>
        </div>
        <nav id="nav" class="clearfix" >
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container" >
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main" >
                            <li class="<?php if(isset($home)){ echo $home; }?>"><a href="index">Home</a></li>
                            <li class="<?php if(isset($about)){ echo $about; }?>"><a href="about">About US</a></li>
                            <li class="<?php if(isset($board)){ echo $board; }?>"><a href="#">Board of directors</a></li>
                            <li class="<?php if(isset($services)){ echo $services; }?>"><a href="services">Our Services</a></li>
                            <li class="<?php if(isset($testimonial)){ echo $testimonial; }?>"><a href="#">Testimonials</a></li>
                           <!-- <li><a href="contact.html">Our forms</a></li>-->
                            <li class="<?php if(isset($gallery)){ echo $gallery; }?>"><a href="#">Gallery</a></li>
                            <li class="<?php if(isset($partner)){ echo $partner; }?>"><a href="#">Our Partner</a></li>
                            <li class="<?php if(isset($contact)){ echo $contact; }?>"><a href="contact">Contact Us</a></li>
                        </ul>
                      
                    </div>
                </nav>
    </header>
    
  
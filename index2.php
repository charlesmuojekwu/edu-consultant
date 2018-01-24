<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designeek.com/template/schoolfun/maroon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2017 08:51:44 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Schoolfun - Study and Fun</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="style/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css' />
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
        $('.slider-tabs.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
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
<body class="home">
	<header id="main-header" class="clearfix">
        <div id="header-full" class="clearfix">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="#" id="logo"><img src="images/logo.png" data-retina="images/logo-retina.png" alt="School Fun - WordPress Theme" /></a>
                <aside id="header-content">
                    <form method="post" action="#" id="searchform">
                        <div>
                            <input type="text" name="search" class="input" />
                            <input type="submit" name="submitsearch" class="button" value="Search" />
                        </div>
                    </form>
                    <ul id="list-social" >
                        <li id="icon-facebook"><a href="#">Facebook</a></li>
                        <li id="icon-twitter"><a href="#">Twitter</a></li>
                        <li id="icon-gplus"><a href="#">Google Plus</a></li>
                        <li id="icon-linkedin"><a href="#">Linkedin</a></li>
                         <!-- <li id="icon-youtube"><a href="#">Youtube</a></li>
                        <li id="icon-flickr" class="last"><a href="#">Flickr</a></li>-->
                    </ul>
                   
                    <!--<h3 id="slogan">"Fun. Study. Research. Innovate. Play"</h3>-->
                </aside>
            </div>
        </div>
        <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
                            <li class="current-menu-item"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#">News</a>
                                <ul>
                                    <li><a href="newslist.html">News List</a></li>
                                    <li><a href="newsdetail.html">News Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="event.html">Event</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                            <li><a href="team.html">Teacher</a></li>
                            <li><a href="#">Other</a>
                                <ul>
                                    <li><a href="#">Color Variation</a>
                                        <ul>
                                            <li><a href="index-2.html">Maroon</a></li>
                                            <li><a href="http://designeek.com/template/schoolfun/blue/">Blue</a></li>
                                            <li><a href="http://designeek.com/template/schoolfun/green/">Green</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="history.html">History</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="fullpage.html">Full Page no Sidebar</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                       
                    </div>
                </nav>
    </header>
    <div id="slideshow-tabs">
      
      <!--  SLIDER -->
		<div class="ui-tabs-panel" id="panel-1" style="background:url(images/slide-1.jpg) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url(images/slide-1.jpg) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <article>
                    <h2>Reach your Next Lavel Career</h2>
                    <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique.</p>
                    <a href="#" class="button-more-slide">Learn More</a>
                </article>
            </div>
        </div>
        
         <!--  BELOW SLIDER -->
          <div id="panel-tabs" class="clearfix">
            how are you
        </div>
           
    </div>
 
<div id="main-footer">
      
        <div id="slogan-footer">
            <h4>Leading Together <span>for</span> Brighter Future</h4>
        </div>
 
        <div id="footer-content" class="clearfix">
            <div id="footer-container">
                <div id="sidebar-footer-left" class="sidebar-footer">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Ou</h3>
                            <ul>
                                <li><a href="#">Research, Library and Publication</a></li>
                                <li><a href="#">Alumni Center</a></li>
                                <li><a href="#">Academic Community</a></li>
                                <li><a href="#">Extra Curricullum and Student Event</a></li>
                                <li><a href="#">Newsroom, Article and Event</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div id="sidebar-footer-middle" class="sidebar-footer">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Campus Location</h3>		
                            <article class="text-widget ">
					           <iframe class="map-area" src="http://maps.google.com/?ie=UTF8&amp;ll=37.055177,-95.668945&amp;spn=11.79095,12.150879&amp;t=m&amp;z=6&amp;output=embed"></iframe><br />                                   </article>
                        </div>
                    </aside>
                </div>
          
                 <div id="footer-address" class="sidebar-footer">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Quick Navigation</h3>
                            <ul>
                                <li><a href="#">Research, Library and Publication</a></li>
                                <li><a href="#">Alumni Center</a></li>
                                <li><a href="#">Academic Community</a></li>
                                <li><a href="#">Extra Curricullum and Student Event</a></li>
                                <li><a href="#">Newsroom, Article and Event</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                
            </div>
        <div id="blur-top">
            <a href="#" id="link-back-top">Back to Top</a>
        </div>
        </div>
    
        <div id="footer-copyright">
            <div id="footer-copyright-content" class="clearfix">
                <a href="#" id="logo-footer"><img src="images/logo-footer.png" data-retina="images/logo-footer-retina.png" alt="School Fun - University" /></a>
                <p id="text-address">P Sherman, 42 Wallaby Way, Australia</p>
                <ul id="nav-footer" class="clearfix">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <p id="text-copyright">Copyright &copy; 2013. All rights reserved</p>
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from designeek.com/template/schoolfun/maroon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2017 08:53:28 GMT -->
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Stria | The People. Their Products. Our Stories.">
<meta name="keywords" content="Stria, artisan, video, interviews">
<meta name="author" content="Jeffrey Qua">
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link rel="stylesheet" type="text/css" href="/css/normalize.css">
<link rel="stylesheet" type="text/css" href="/css/fixed-positioning.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="icon" href="/img/favicon16.png" sizes="16x16">
<link rel="icon" href="/img/favicon32.png" sizes="32x32">
<title>Stria | The People. Their Products. Our Stories.</title>
</head>

<body id="home_body">
<div class="content_wrapper" data-600="top:0px" data-1500="opacity:1" data-1501="opacity:0">
	<div id="home_splash">
	<div class="logo" data-0="filter: progid:DXImageTransform.Microsoft.blur(pixelradius=0px);-webkit-filter: blur(0px);-moz-filter: blur(0px);filter: blur(0px);opacity: 1;" alt-data-0="opacity: 1" data-800="filter: progid:DXImageTransform.Microsoft.blur(pixelradius=20px);-webkit-filter: blur(20px);-moz-filter: blur(20px);filter: blur(20px);opacity:0" alt-data-800="opacity: 0;"><img src="/img/striaLogo.png" alt="Stria. The People. Their Products. Our Stories" />
	</div>
		<p id="striaText" class="blurrer" data-0="filter: progid:DXImageTransform.Microsoft.blur(pixelradius=10px);-webkit-filter: blur(10px);-moz-filter: blur(10px);filter: blur(10px);opacity:0" alt-data-0="opacity: 0" data-300="filter: progid:DXImageTransform.Microsoft.blur(pixelradius=0px);-webkit-filter: blur(0px);-moz-filter: blur(0px);filter: blur(0px);opacity:1" alt-data-300="opacity: 1" data-1500="opacity:1" data-1501="opacity:0">

Stria offers a service for makers <br/>
that evolves their digital persona<br/>
by sharing their stories</p>
		<div id="homeArrow"></div>
	</div>
</div>

<div id="menu_wrapper" class="content_wrapper" data-650="top: 1020px" data-1350="top: -118px">
	<div id="main_menu_container">
	<div class="logo">
		<img src="/img/striaMenuLogo.jpg" alt="Stria" />
	</div>
	<nav id="main_menu">
		<ul>
			<li><a href="#featured_list" data-menu-top="1350" data-1148="color: gray" data-1149="color: white" data-2279="color: gray">[ The Makers ]</a></li>
			<li><a href="#stria_info" data-menu-top="2400" data-2278="color: gray" data-2279="color: white" data-2679="color: gray">[ What is Stria ]</a></li>
			<li><a href="#contact" data-menu-top="2980" data-2678="color: gray" data-2679="color: white" >[ Contact Stria ]</a></li>
		</ul>
	</nav>
	</div>
</div>

<div class="content_wrapper" data-650="top:1175px" data-1375="top:20px" data-2760="top:-1500px">
	<div id="featured_container">
	<div id="featured_list">
		<a href="/makers/CrossedHeartForge" id="chf_link" alt="Crossed Heart Forge"><div class="featured" ></div></a>
		<a href="#" onclick="return false;" id="jmj_link" alt="Jeff Martin Joinery"><div class="featured" ></div></a>
		<a href="#" onclick="return false;" id="ljl_link" alt="Love Jules Leather"><div class="featured" ></div></a>
		<a href="#" onclick="return false;" id="mushboo_link" alt="Mushboo"><div class="featured" ></div></a>
		<div class="image_preload" style="display:none">
			<img src="/img/CrossedHeartOver.png" />
			<img src="/img/JeffMartinOver.png" />
			<img src="/img/JeffMartinComingSoon.png" />
			<img src="/img/LoveJulesComingSoon.png" />
			<img src="/img/MushbooComingSoon.png" />
			<img src="/img/PorchlightPressOver.png" />
			<img src="/img/contactButtonOver.jpg" />
			<img src="/img/whatIsButtonOver.jpg" />
		</div>
		
	</div>
	</div>
</div>


<div class="content_wrapper" data-0="top:2780px" data-2780="top:100px" data-3380="top:-500px">
	
	<div class="home_link">
		<a href="./whatis">
			<div id="whatIsLink"><p>Stria connects culture seekers to a community of BC artisan businesses by developing their digital persona. By illustrating their products and stories, Stria introduces the makers to an audience who is interested in learning more about them and their craft.</p></div>
		</a>
		
	</div>
	
</div>
<div class="content_wrapper" data-0="top:3080px" data-3080="top:100px" data-3380="top:-300px">
	<div class="home_link">
		<a href="./contact"><div id="contactLink"></div></a>
	</div>
	<div id="contact">
		<p>Contact Stria Productions</p>
		<p style="text-align: center">
			<a href="mailto:experiencestria@gmail.com"><img src="/img/email_icon.png" target="_blank" /></a>
			<a href="https://www.facebook.com/pages/Stria/598204923569399" target="_blank"><img src="/img/Scribble Social Icons-01.png" /></a>
			<a href="https://www.vimeo.com/stria" target="_blank"><img src="/img/Scribble Social Icons-19.png" /></a>
		</p>
		<p>ExperienceStria@gmail.com</p>
	</div>
	
	<div class="footer">
		<p>&copy; Stria Productions 2013. All rights reserved.</p>
	</div>
</div>

<script src="/js/skrollr.js"></script>
<script src="/js/skrollr.menu.min.js"></script>
<script src="/js/jquery-1.8.1.min.js"></script>

<script type="text/javascript">
// Home <splash></splash>
$('#home_splash').ready(function(){
	
	var myPlayer = this;
	var aspectRatio = 1080/1920; // Make up an aspect ratio
    
	function resizeSplash(){
	    // Get the parent element's actual width
		var width = document.getElementById("home_splash").parentElement.offsetWidth;
		
		
		if (width<1140) {
			// Set width to fill parent element, Set height
			//myPlayer.width(width).height( width * aspectRatio );
			$("#home_splash").css("width", 1140);
			$("#home_splash").css("height", 640);
		}
		else {
			$("#home_splash").css("width", width);
			$("#home_splash").css("height", width * aspectRatio);
		}
	}
    window.onresize = resizeSplash; // Call the function on resize
	resizeSplash();
});

 setTimeout(function() {
    var s = skrollr.init({
		smoothScrolling: true,
		forceHeight: false
    });

    skrollr.menu.init(s);
}, 0);
</script>
<?php include_once("analyticstracking.php") ?>
</body>
</html>
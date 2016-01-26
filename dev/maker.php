<!DOCTYPE html>
<html>
<head>
<?php
	$maker = $_GET['m'];
	$valid_makers = array("CrossedHeartForge");
	
	if ($maker == "CrossedHeartForge") {
		$title_section = "Dave J Friesen - Blacksmith at Crossed Heart Forge";
	}
?>
<meta name="description" content="<s></s>tria | The People. Their Products. Our Stories.">
<meta name="keywords" content="Stria, artisan, video, interviews">
<meta name="author" content="Jeffrey Qua">
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link rel="stylesheet" type="text/css" href="/css/normalize.css">
<link rel="stylesheet" type="text/css" href="/css/fixed-positioning.css">
<link rel="stylesheet" type="text/css" href="/css/maker.css">
<link rel="icon" href="/img/favicon16.png" sizes="16x16">
<link rel="icon" href="/img/favicon32.png" sizes="32x32">
<title>Stria | <?=$title_section?></title>
</head>

<?php
if ($maker=="CrossedHeartForge") {
?>
<script>videoToPlay = "81585710";
</script>
<body id="chf_body">
	<div id="menu_wrapper" class="content_wrapper">
		<div id="main_menu_container">
		<div class="logo">
			<img src="/img/striaMenuLogo.jpg" alt="Stria" />
		</div>
		<nav id="main_menu">
			<ul>
				<li><a href="/">[ The Makers ]</a></li>
				<li><a href="/whatis">[ What is Stria ]</a></li>
				<li><a href="/contact">[ Contact Stria ]</a></li>
			</ul>
		</nav>
		</div>
	</div>
	
	<div id="submenu" class="color-weight-light">
		<ul>
			
			<li><a href="#" data-menu-top="0"><span class="nav-title" data-0="active">Top</span></a></li>
			<li><a href="#chf_about" data-menu-top="850"><span class="nav-title">About Dave</span></a></li>
			<li><a href="#chf_machine" data-menu-top="1240"><span class="nav-title">Machine vs Handmade</span></a></li>
			<li><a href="#chf_workshop" data-menu-top="2090"><span class="nav-title">The Workshop</span></a></li>
			<li><a href="#chf_recyclingconsumerism" data-menu-top="2900"><span class="nav-title">Recycling + Consumerism</span></a></li>
			<li><a href="#chf6" data-menu-top="3600"><span class="nav-title">Chemical Avoidance</span></a></li>
			<li><a href="#chf_knife" data-menu-top="4400"><span class="nav-title">Knife Assembly</span></a></li>
			<li><a href="#contact" data-menu-top="7400"><span class="nav-title">Contact</span></a></li>
		</ul>
	</div>
		
	<div class="content_wrapper">
		<div id="maker_menu_container">
			<a href="index.php" class="home_link"></a>
		</div>
	<div id="main_video_holder">
		<div id="maker-video" class="video_box">
			<img src="/img/chf_video.jpg" class="interview-cover" />
			<div id="play"><img src="/img/play.png" /></div>
			<div id="video-container"></div>
		</div>
	</div>
	<!--<div id="maker-content-wrapper">-->
		
		<div id="chf_about" class="m_block">
		
			<div class="left">
				<img src="/img/chfNameIntro.png" alt="Dave J Friesen. Blacksmith" />
			</div>
			
			<div class="right">
				<p>How does one become a blacksmith these days? For Dave, it all started in an eighth grade social studies unit on Japan, where he was first introduced to Japanese style knives.  Starting out, Dave would do any kind of blacksmithing work, but today he has streamlined towards his individual strengths and creative interests in art knives.</p>
	
				<p>Dave experiments with fusion knives that combine Western style blades with traditional Japanese handles. These blades would be best suited for outdoor use on Vancouver Island, but utilizes the minimalist functionality of Japanese handle designs.</p>
			</div>
			
			<div class="clear"></div>
		</div>
		
		
		
		<div id="chf_machine" class="m_block">
			<h1>Machine vs Handmade</h1>
			<p>Dave is an old school blacksmith - old trade, old tools. He works entirely with hand tools through each step as he believes traditional tools and methods are just as useful, if not more reliable, than modern technology. He explained how in the past things progressed much slower - so tools and methods had more time to develop and be improved, unlike today's rapid pace.</p>

<p>Since each piece is handmade, every knife Dave creates is entirely unique - from the raw steel he chooses, to the marks and grooves left from the hammering and hardening process.</p>
		
			<div class="vidbox">
			<div class="vimeo"><iframe src="//player.vimeo.com/video/80969033" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
			<div class="vidtext">Anytime you work with real materials, they're gonna do things 
that you don't want them to do, or that you didn't think or weren't intending.</div>
			</div>
		</div>
		
		<div id="chf_workshop_interaction" class="m_block">
			<div id="chf_workshop">
				<div class="workshop_bg"></div>
				<div class="zone" id="zone_charcoal"></div>
				<div class="zone" id="zone_charcoal2"></div>
				
				<div class="zone" id="zone_forge"></div>
				<div class="zone" id="zone_tools"></div>
				
				
				<div class="zone" id="zone_anvil"></div>
				
				<div class="chfWorkshopOverlay">
					<p>To call Dave's workshop small is a gross understatement. It is miniscule, but that is exactly what he needs in order to work efficiently on a blade. Although satisfied with the current setup, future expansion could open opportunity for woodworking, and accommodate space for teaching classes on blacksmithing.</p>
				</div>
			</div>
		</div>
		
		<div id="chf_recyclingconsumerism" class="m_block">
		
			<div class="left">
				<p>What truly makes his knives unique is that each piece used to be something else - he calls this <em>creative recycling.</em> Dave derives most of his steel from old farming equipment and saw mill blades - as they are the ideal high carbon steel, with minimal alloy. The recycled metals also heavily influences the functional characteristics of each work.</p>

<p>These old objects already have a history when they reach Dave's hands. He breathes new life into each through the process of forging each into a new, functional blade. His fusion knives in particular highlight how old traditions can be adapted to modern contexts.</p>
			</div>
			
			<div class="right">
				<p>Dave is an old school blacksmith - old trade, old tools. He works entirely with hand tools through each step as he believes traditional tools and methods are just as useful, if not more reliable, than modern technology. He explained how in the past things progressed much slower - so tools and methods had more time to develop and be improved, unlike today's rapid pace. </p>
			</div>
			
			<div class="clear"></div>
		</div>
		
		<div id="chf_chemical" class="m_block">
			
			<div class="vidbox">
			<div class="vimeo"><iframe src="//player.vimeo.com/video/80968876" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
			<div class="vidtext">It began with a simple switch from using mineral coal to fuel his forge to preparing his own charcoal from scrap wood</div>
			
			</div>
			
			<h1>Chemical Avoidance</h1>
			<p>Dave gained a much stronger understanding of the knife making process by delving into traditional Japanese methods on knife handle assemblies. Each is fit together without epoxies, using only manual tools and natural pine resin glue.</p>
		</div>
	<!--</div>-->
	</div>
	
	
	<div class="content_wrapper"  id="chf_knife" data-3900="display:none" data-4000="top:100%; display:block;" data-4000="opacity:0;" data-4400="top:0%; opacity: 1" data-6000="top:0%" data-6300="opacity: 1" data-6600="opacity: 0" data-6601="display:none">
		<div id="chf_knife_container">
			<div class="knife_bg" data-4000="opacity:0" data-4200="opacity:1"></div>
			<h1 id="knifeAssemblyTitle" data-4200="opacity:0;" data-4300="opacity:1; top:0%" data-6000="top:0%" data-6300="opacity: 1" data-6600="opacity:0">Knife Assembly</h1>
			
		<div id="chf_knifeHandle" data-4400="display:none" data-4600="left: 2000px; top: 280px; display: block" data-4700="left: 0%"><img src="/img/chf/knife/Handle.png" /></div>
		
		
		<div id="chf_knifeHandleText" data-4400="display:none" data-4600="left: 50px; top: 70px; display: block; opacity:0" data-4700="opacity:1">
			<h2>Handle</h2>
			<p>Handcarved wooden handle holds the blade and provide a comfortable grip.</p>
		</div>
		
		<div id="chf_knifeHilt" data-4700="display:none" data-4900="left: 2000px; top: 280px; display: block" data-5000="left: -85px"><img src="/img/chf/knife/Hilt.png" /></div>
		
		<div id="chf_knifeHiltText" data-4700="display:none" data-4900="left: 280px; top: 70px; display: block; opacity:0" data-5000="opacity:1">
			<h2>Fittings</h2>
			<p>Copper, brass, iron and bone are forged into fittings to ensure a tighter fit between the handle, guard and blade.</p>
		</div>
		
		<div id="chf_knifeGuard" data-5000="display:none" data-5200="left: 2000px; top: 124px; display: block" data-5300="left: -95px"><img src="/img/chf/knife/Guard.png" /></div>
		
		<div id="chf_knifeGuardText" data-5000="display:none" data-5200="left: 510px; top: 70px; display: block; opacity:0" data-5300="opacity:1">
			<h2>Guard</h2>
			<p>Holds the blade in place and prevents it from coming loose from the handle.</p>
		</div>
		
		<div id="chf_knifeBlade" data-5300="display:none" data-5301="display: block" data-5500="left: 2000px; top: 280px; " data-5600="left: -410px"><img src="/img/chf/knife/Blade.png" /></div>
		
		<div id="chf_knifeBladeText" data-5300="display:none" data-5500="left: 740px; top: 70px; display: block; opacity:0" data-5600="opacity:1">
			<h2>Blade</h2>
			<p>The centerpiece of the knife. No other component can be made until the blade is finished.</p>
		</div>
		
		<div id="chf_knifePin" data-5600="display:none" data-5800="top: -120px; left:-150px; display: block" data-5900="top:30px; left: -95px"><img src="/img/chf/knife/Pin.png" /></div>
		
		<div id="chf_knifePinText" data-5600="display:none" data-5800="left: 970px; top: 70px; display: block; opacity:0" data-5900="opacity:1">
			<h2>Pin</h2>
			<p>One peg is all that is needed to hold the blade and handle together.</p>
		</div>
		</div>
			
		
	</div>
	
	<div id="contact">
		<p>Contact Crossed Heart Forge</p>
		<p style="text-align: center">
			<a href="mailto:info@islandblacksmith.ca"><img src="/img/email_icon.png" target="_blank" /></a>
			<a href="https://www.facebook.com/islandblacksmith" target="_blank"><img src="/img/Scribble Social Icons-01.png" /></a>
			<a href="http://instagram.com/islandblacksmith" target="_blank"><img src="/img/icon_instagram.png" /></a>
		</p>
		<p><a href="http://www.islandblacksmith.ca">www.islandblacksmith.ca</a></p>
	</div>
	
	<div class="footer">
		<p>&copy; Stria Productions 2013. All rights reserved.</p>
	</div>
	
<?php
}

?>
<script src="/js/skrollr.js"></script>
<script src="/js/skrollr.menu.min.js"></script>
<script src="/js/jquery-1.8.1.min.js"></script>
<script src="/js/vidPlay.js"></script>

<script type="text/javascript">
<?php
if ($maker == "CrossedHeartForge") {
?>
$("#zone_tools").hover(
function() {
	$("#chf_workshop .workshop_bg").css("background-image",'url("/img/chfWorkshopTools.jpg")');
});

$("#zone_forge").hover(
function() {
	$("#chf_workshop .workshop_bg").css("background-image",'url("/img/chfWorkshopForge.jpg")');
});

$("#zone_charcoal").hover(
function() {
	$("#chf_workshop .workshop_bg").css("background-image",'url("/img/chfWorkshopCharcoal.jpg")');
});

$("#zone_charcoal2").hover(
function() {
	$("#chf_workshop .workshop_bg").css("background-image",'url("/img/chfWorkshopCharcoal.jpg")');
});

$("#zone_anvil").hover(
function() {
	$("#chf_workshop .workshop_bg").css("background-image",'url("/img/chfWorkshopAnvil.jpg")');
});


$("#chf_workshop .zone").hover(
function() {
    $("#chf_workshop .workshop_bg").stop().animate({opacity:1},200);
},
function() {
    $("#chf_workshop .workshop_bg").stop().animate({opacity:0},200);
});

$("#chf_workshop").hover(
function() {
	$("#chf_workshop .chfWorkshopOverlay").stop().fadeOut();
},

function() {
	$("#chf_workshop .chfWorkshopOverlay").stop().fadeIn();
});
<?php
}
?>

/*
 setTimeout(function() {
    var s = skrollr.init({
		smoothScrolling: true,
		forceHeight: false
    });

    skrollr.menu.init(s);
}, 0);
*/
$(document).ready(function() {
    var s = skrollr.init({
		smoothScrolling: true,
		forceHeight: false
    });

    skrollr.menu.init(s);
});
</script>
<?php include_once("analyticstracking.php") ?>
</body>
</html>
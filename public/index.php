<!DOCTYPE html>
<html>
<title>Geek Squad Art Gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
	<div class="w3-container">
		<a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
		<i class="fa fa-remove"></i>
		</a>
		<img src="/img/creepcool.png" style="width:45%;" class="w3-round"><br><br>
		<h4><b>ART GALLERY<br>RESOURCE PACKS</b></h4>
		<p class="w3-text-grey">Textured paintings for<br>the Geek Squad server</p>
	</div>
	<div class="w3-bar-block">
		<a href="#featured" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-star fa-fw w3-margin-right"></i>FEATURED</a> 
		<a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ALL GALLERIES</a> 
		<a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-check-square fa-fw w3-margin-right"></i>SERVICES</a>
		<a href="https://logicalgeekboy.com" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>LOGICALGEEKBOY</a>
	</div>
	<!--<div class="w3-panel w3-large">
	<i class="fa fa-facebook-official w3-hover-opacity"></i>
	<i class="fa fa-youtube w3-hover-opacity"></i>
	<i class="fa fa-snapchat w3-hover-opacity"></i>
	<i class="fa fa-pinterest-p w3-hover-opacity"></i>
	<i class="fa fa-twitter w3-hover-opacity"></i>
	<i class="fa fa-linkedin w3-hover-opacity"></i>
	</div>-->
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

<!-- Header -->
<header id="featured">
	<a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
	<span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
	<div class="w3-container">
		<h1><b>Geek Squad Art Gallery</b></h1>
		<div class="w3-section w3-bottombar w3-padding-16">
			Enjoy any of these resource packs while perusing the server's art gallery and public district areas!<br>
			<a href="https://www.minecrafttexturepacks.com/installing-texture-packs/" target="_blank"><i>Not sure how to use resource packs?</i></a>
			<!--
			<span class="w3-margin-right">Filter:</span> 
			<button class="w3-button w3-black">ALL</button>
			<button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
			<button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
			<button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
			-->
		</div>
	</div>
</header>
  
<!-- Featured gallery-->
<div class="w3-padding">
	<div class="w3-row-padding w3-card w3-white">
		<h3>Featured Gallery: <b>Scenes 01</b></h3>
		<div class="w3-col m3">
			<img src="/img/Promo 1 Splash.png" alt="Serverscapes 01" style="width:100%;margin-bottom:16px">
		</div>
		<div class="w3-col m7">
			<p>
				Download this pack, then visit the Art Gallery for a grand visual experience of builds from all around the Geek Squad Server! 
				Gallery staff are always on the search for new images, so be sure to catch our next Scenes Gallery when it drops. As per usual, 
				details will always be released on <a href="https://discord.gg/gCSK7s">Discord</a>.
				<h5><a href="#" style="text-decoration:none"><span class="fa fa-download"></span> <b>Download</b></a></h5>
			</p>
		</div>
	</div>
</div>

<!-- First Photo Grid-->
<div class="w3-row-padding" id="portfolio" style="margin-top:.25in">
	<h4><b>All Galleries</b></h4>
	<div class="w3-third w3-container w3-margin-bottom">
		<img src="/img/SD 1 Splash.png" alt="Billboards 01" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<h6><a href="#" style="text-decoration:none"><span class="fa fa-download"></span> <b>Billboards 01</b></a></h6>
			<p>Shopping district advertisements for your viewing immersion. Peruse along the East Shopping District tunnel.</p>
		</div>
	</div>
	<div class="w3-third w3-container w3-margin-bottom">
		<img src="/img/SS 1 Splash.png" alt="Snapshots 01" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<h6><a href="#" style="text-decoration:none"><span class="fa fa-download"></span> <b>Snapshots 01</b></a></h6>
			<p>Quirky mayhem abounds! See these geeks take selfies while collaborating on goofy antics around the server.</p>
		</div>
	</div>
	<div class="w3-third w3-container w3-margin-bottom">
		<img src="/img/PC 1 Splash.png" alt="Topaz Citadel 01" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<h6><a href="#" style="text-decoration:none"><span class="fa fa-download"></span> <b>The Topaz Citadel 01</b></a></h6>
			<p>The Gallery's first ever commission! Be on the lookout for version 2 - the citadel has GROWN tremendously.</p>
		</div>
	</div>
</div>

<div class="w3-bottombar"></div>
<div class="w3-bottombar"></div>
  <!-- Pagination -->
  <!--<div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>-->

<div class="w3-container w3-padding-large" style="margin-bottom:32px" id="services">
	<h2><b>Art Gallery Services</b></h2>
	<!-- Pricing Tables -->
	<div class="w3-row-padding" style="margin:0 -16px">
		<div class="w3-third w3-margin-bottom">
			<ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
				<li class="w3-black w3-xlarge w3-padding-32">Paintings</li>
				<li class="w3-padding-16">Custom Photo</li>
				<li class="w3-padding-16">Sizes up to 4x4</li>
				<li class="w3-padding-16">Post Editing</li>
				<li class="w3-padding-16">Scene Staging</li>
				<li class="w3-padding-16">
					<h2>3</h2>
					<span class="w3-opacity">gold blocks</span>
				</li>
			</ul>
		</div>

		<div class="w3-third w3-margin-bottom">
			<ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
				<li class="w3-teal w3-xlarge w3-padding-32">Map Art</li>
				<li class="w3-padding-16">Materials Included</li>
				<li class="w3-padding-16">Multiple Maps*</li>
				<li class="w3-padding-16">Free Item Frame</li>
				<li class="w3-padding-16">10 Copies</li>
				<li class="w3-padding-16">
					<h2>5</h2>
					<span class="w3-opacity">diamond blocks (*per map)</span>
				</li>
			</ul>
		</div>

		<div class="w3-third">
			<ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
				<li class="w3-black w3-xlarge w3-padding-32">Membership Access</li>
				<li class="w3-padding-16">Gallery Lounge</li>
				<li class="w3-padding-16">Smart Salad Bar</li>
				<li class="w3-padding-16">Tapestry Studio</li>
				<li class="w3-padding-16">Early Viewings</li>
				<li class="w3-padding-16">
				<h2>5</h2>
					<span class="w3-opacity">diamonds monthly</span>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-dark-grey">
<div class="w3-row-padding">
<div class="w3-rest">
<h3>GALLERY by Frizzle</h3>
<p>
	This site is created for the fun and immersion of Logical Geek Boy's patreon server. Please be encouraged 
	to join us on discord if you aren't already a member! Check out Logic's site to experience the inspiration 
	for this and many other creations.
</p>
<p><i>-Frizzle, patron of <a href="https://logicalgeekboy.com" target="_blank">LogicalGeekBoy</a></i></p>
</div>

</div>
</footer>

<div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

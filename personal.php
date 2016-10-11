<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./fonts/fontello/css/letter.css">
	<link rel="stylesheet" type="text/css" href="./js/slider/responsiveslides.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="./js/menu.js"></script>
	<script src="./js/slider/responsiveslides.min.js"></script>
</head>
<body>
<script type="text/javascript">
	$(function() {
	$('#to').click(function() {
		$('html, body').animate({scrollTop: $("#learn").offset().top}, 1000);
		});
	});
</script>
<script>
	$(function() {
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 600,
			namespace: "large-btns"
		});
	});
</script>
<div class="head">
	<div class="logo"><a href="">faustinova</a></div>
	<div class="link">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="personal.php">PERSONAL</a></li>
			<li><a href="peer_stories.php">PEER STORIES</a></li>
			<li><a href="">PURPOSE</a></li>
		</ul>
	</div>

	<div class="menu_active" onclick="Menu()">More</div>
	<div class="menu" id="menu">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="personal.php">PERSONAL</a></li>
			<li><a href="peer_stories.php">PEER STORIES</a></li>
			<li><a href="">PURPOSE</a></li>
			<li><a href="">NEW HERE</a></li>
		</ul>
	</div>
</div>
<div class="clear"></div>

<div class="block">
	<div class="slider">
		<ul class="rslides">
		  <li><img src="./images/1.jpg" alt=""></li>
		  <li><img src="./images/2.jpg" alt=""></li>
		  <li><img src="./images/3.jpg" alt=""></li>
		  <li><img src="./images/4.jpg" alt=""></li>
		</ul>
	</div>
	<div class="b-right personall">
		Our work opens people up emotionally &amp; creatively. Curious what might be in store for you? 
		<div><a class="learn-more" href="">get inspired</a></div>
	</div>
</div>


<div class="footer">
	<div class="f-block">
		<!-- <a class="f-logo" href="">Faustinova</a> -->
		© 2016 Faustinova, Inc
	</div>


	<div class="f-link">
		<h3>Contact</h3>
		<span class="cont-span"><b>Email:</b> collab@faustinova.com</span>
	</div>


	<div class="f-soc">
		<ul>
			<li><a href="" class="soc-facebook"></a></li>
			<li><a href="" class="soc-linkedin"></a></li>
			<li><a href="" class="soc-twitter-bird"></a></li>
			<li><a href="" class="soc-instagram"></a></li>
		</ul>
	</div>
</div>

</body>
</html>
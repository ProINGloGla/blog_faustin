<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./fonts/fontello/css/letter.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="./js/menu.js"></script>
</head>
<body>
<script type="text/javascript">
    $(function() {
    $('#to').click(function() {
    	$('html, body').animate({scrollTop: $("#learn").offset().top}, 1000);
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



<div class="video-head">
	<div class="text-bef-video">
		Text here if it need.
	</div>
	<div class="bgvideo-head">
		<video autoplay poster="./images/5.jpg">
			<source src="https://d1zwruhgdzkb7q.cloudfront.net/intro-1280-sm.mp4" type="video/mp4">
		</video>
	</div>
	<div class="video-mobile">
		<img src="./images/5.jpg">
	</div>
	<div class="learn-page"><a href="#learn" id="to">&#8659;&#8659;&#8659;</a></div>
</div>

<div class="clear"></div>

<div class="block about image_block1" id="learn">
	<div class="hello">
		<div class="verticar-text">PURPOSE</div>
		<h1>Hi,</h1>
		<h3>I'm Antonina.</h3>
		An entrepreneur, writer, philanthropist and an unshakable optimist dedicated to helping you become the person you most want to be.
		<a class="learn-more" href="">learn more</a>
	</div>
</div>
<div class="block video">
	<div class="nav-line">
		<div class="circle"></div>
		<div class="text">PURPOSE</div>
	</div>
	<div class="text">
		<h2>LEARN HOW TO GET ANYTHING YOU WANT.</h2>
		In this fantastic (and free) audio training you'll learn three simple strategies that'll give you the courage and confidence to create a business and life you love.
		<div>
			<a class="learn-more" href="">WATCH NOW</a> | <a class="learn-more" href="">read more</a>
		</div>
	</div>
	<div class="video-yt">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/gsvfkhwapTE" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<!-- 
<hr>

<div class="block video">
	<div class="nav-line">
		<div class="circle"></div>
		<div class="text">PEER STORIES</div>
	</div>
	<div class="video-yt2">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/gsvfkhwapTE" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="text2">
		<h2>GET INSPIRED WITH OUR AWARD-WINNING SHOW Antonina.</h2>
		With hundreds of episodes, MarieTV will motivate you with wit and wisdom to build your dreams. Search our library to find the perfect one for you.
		<div>
			<a class="learn-more" href="">WATCH NOW</a> | <a class="learn-more" href="">read more</a>
		</div>
	</div>
</div> -->



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
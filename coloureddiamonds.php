<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Coloured Diamonds</title>
<link href="style/css/custom.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/type/qlassik.css" media="all" />
<link href="style/css/custom.css" rel="stylesheet" type="text/css"><!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<!--[if lt IE 9]>
<script src="style/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/selectnav.js"></script>
<script type="text/javascript" src="style/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="style/js/easing.js"></script>
<script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>

<script type="text/javascript" src="style/js/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" type="text/css" href="style/js/fancybox/jquery.fancybox.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.2" />
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" />
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script>
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script>
<script type="text/javascript">
	$(window).load(function(){
 var $container = $('#items');
	$container.imagesLoaded( function(){
		$container.isotope({
			itemSelector : '.item'
		});	
	});
			
	$('.filter li a').click(function(){
		
		$('.filter li a').removeClass('active');
		$(this).addClass('active');
		
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		
		return false;
	});
});
	
</script>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<header>
			<div id="site-title"><a href="index.php"><img src="style/images/art/butterflylogo2.gif" style="position:relative;left:0px;display: inline-block;" width="140px"/></a></div>
			<!-- Begin Menu -->
			<nav id="access">
				<div id="menu" class="menu">
					<ul id="tiny">
						<li><a href="index.php">Home</a></li>
        				<li><a href="education.php">Education</a>
        					<ul>
            					<li><a href="article1.php">Quality Factors</a></li>
            					<li><a href="article2.php">Grading Factors</a></li>
          					</ul>
        				</li>
        				<li><a href="coloureddiamonds.php" class="current">Coloured Diamonds</a>
        				<ul>
            					<li><a href="orange.php">Orange</a></li>
            					<li><a href="green.php">Green</a></li>
            					<li><a href="blue.php">Blue</a></li>
            					<li><a href="yellow.php">Yellow</a></li>
            					<li><a href="argyle.php">Argyle</a></li>
            					<li><a href="pink.php">Pink</a></li>
            					<li><a href="othercolours.php">Others</a></li>
          		</ul></li>
        				<?php if($logged== 'out'){ ?> <li><a href="login.php">Log In</a></li><?php } ?>
        				
        				<li><a href="contact.php">Contact</a></li>
        			</ul>
				</div>
			</nav>
			<!-- End Menu --><img src="style/images/art/nameplate.gif" width="300px" style="	display:inline-block;right:-90px"/>
			<div style="float:right; margin-right: 10px">
			<?php 
			if($logged=='in')
			{
			?>
				<br><a class="dark button" href="profile.php">Welcome <?php echo $_SESSION['username'] ?></a>
				<html>&nbsp;&nbsp;&nbsp;&nbsp;</html>
				<a class="dark button" href="includes/logout.php">Logout</a>
			
			<?php
			}
			?>
			</div>
			<div class="clear"></div>
		</header>
		<!-- Begin Main -->
		<div id="main">
		<!-- Begin Intro -->
			<div class="intro">
				<span class="intro-text">Fancy colours refer to diamonds with hues like pink, blue, green, yellow, and very rarely, red,which are not included in the colour scale and are considered extremely rare.</span>
			</div>
			<!-- End Intro -->
			<div id="Coloured Diamonds">
			<!-- <ul class="filter">
        <li><a class="active" href="#" data-filter="*">All</a></li>
        <li><a href="#" data-filter=".bw">Black & White</a></li>
        <li><a href="#" data-filter=".macro">Macro</a></li>
        <li><a href="#" data-filter=".people">People</a></li>
        <li><a href="#" data-filter=".video">Video</a></li>
      </ul> -->
      <div id="items">
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/orange1.jpg" class="hover fancybox-media" title="Orange Diamonds"><span class="overlay zoom"></span><img src="style/images/art/orange1.jpg" height="200px" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="orange.php">Orange Diamonds</a></h4>
          	<p>Though one of the most sought after colors by experienced collectors, many have not even seen a diamond with a pure orange grading.</p>
          </div>
        </div>
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/green2.jpg" class="hover fancybox-media" title="Green Diamonds"><span class="overlay zoom"></span><img src="style/images/art/green2.jpg" height="200px" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="green.php">Green Diamonds</a></h4>
          	<p>These diamonds are very rare indeed, few new natural green diamonds make it to market each year, taking eons for the natural green color to develop.</p>
          </div>
        </div>
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/blue3.png" class="hover fancybox-media" title="Blue Diamonds"><span class="overlay zoom"></span><img src="style/images/art/blue3.png" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="blue.php">Blue Diamonds</a></h4>
          	<p>Considered extremely rare, the shades of blue diamonds share the powerful blue of the sea, the  endless vastsky or a pale winter day.</p>
          </div>
        </div>
        
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/yellow1.jpg" class="hover fancybox-media" title="Yellow Diamonds"><span class="overlay zoom"></span><img src="style/images/art/yellow1.jpg" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="yellow.php">Yellow Diamonds</a></h4>
          	<p>Yellow diamonds provide a subtle, dramatic aura in tones ranging from intense yellow hue to rich, softer light tones, becoming more and more popular every year.</p>
          </div>
        </div>
        <div class="item people">
          <div class="thumb">
          	<a href="style/images/art/argyle1.jpg" class="hover fancybox-media" title="Argyle Diamonds"><span class="overlay zoom"></span><img src="style/images/art/argyle1.jpg" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="argyle.php">Argyle Diamonds</a></h4>
          	<p>Argyle Diamonds originate in the Argyle Mine of Kimberley, Western Australia & are globally recognized as diamonds with the strongest investment potential.</p>
          </div>
        </div>
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/pink2.jpg" class="hover fancybox-media" title="Pink Diamonds"><span class="overlay zoom"></span><img src="style/images/art/pink2.jpg" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="pink.php">Pink Diamonds</a></h4>
          	<p>The most popular diamond amongst connoisseurs, a pink diamond is the ultimate symbol of feminity, love and grace and are truly winners across the boards.</p>
          </div>
        </div>
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/red1.png" class="hover fancybox-media" title="Red Diamonds"><span class="overlay zoom"></span><img width="278px" src="style/images/art/red1.png" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="othercolours.php">Red Diamonds</a></h4>
          	<p>Considered the rarest of the fancy color diamonds, red color diamonds are not often seen by most diamond collectors or jewelers.</p>
          </div>
        </div>
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/purple1.jpg" class="hover fancybox-media" title="Purple Diamonds"><span class="overlay zoom"></span><img src="style/images/art/purple1.jpg" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="othercolours.php">Purple Diamonds</a></h4>
          	<p>Natural purple diamonds are extremely rare and expensive, so rare that most jewelers have never really experienced the joy of seeing a pure purple diamond.</p>
          </div>
        </div>
        
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/champagne1.jpg" class="hover fancybox-media" title="Champagne Diamonds"><span class="overlay zoom"></span><img src="style/images/art/champagne1.jpg" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="othercolours.php">Champagne Diamonds</a></h4>
          	<p>Champagne diamonds are light-brown diamonds with a sparkling brown hue. The color range is from light champagne color to a deep rich cognac.</p>
          </div>
        </div>
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/chamelion1.jpg" class="hover fancybox-media" title="Chamelion Diamonds"><span class="overlay zoom"></span><img src="style/images/art/chamelion1.jpg" width="278px" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="othercolours.php">Chamelion Diamonds</a></h4>
          	<p>Chameleon diamonds when viewed under different light and temperature conditions change their color, which is a unique rarity in the world of diamonds.</p>
          </div>
        </div>
        <div class="item macro">
          <div class="thumb">
          	<a href="style/images/art/white1.jpg" class="hover fancybox-media" title="Flawless White Diamonds"><span class="overlay zoom"></span><img src="style/images/art/white1.jpg" width="278px" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="othercolours.php">Flawless White Diamonds</a></h4>
          	<p>Flawless white diamonds are perfect, colorless diamonds represent only 0.001% of all diamonds ever mined, making them beyond rare.</p>
          </div>
        </div>
        
        <div class="item bw">
          <div class="thumb">
          	<a href="style/images/art/grey1.jpg" class="hover fancybox-media" title="Grey Diamonds"><span class="overlay zoom"></span><img src="style/images/art/grey1.jpg" alt=""></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"><a href="othercolours.php">Grey Diamonds</a></h4>
          	<p>Natural grey diamonds are popular due to their relatively low price and strong color and look different if viewed in the daylight or artificial light.</p>
          </div>
        </div>
      </div>
</div>

		</div>
		<!-- End Main -->
	</div>
	<!-- End Wrapper -->
	<!-- Begin Footer -->
	<footer id="colophon">
		<!-- Begin Supplementary -->
		<div class="supplementary">
			<div class="inner">
				<div class="one-fourth">
					<h2>Education</h2>
					<ul class="popular-posts icon-hover">
						<li>
							<span class="entry-title"><a href="article1.php">Coloured Diamond Quality Factors</a></span>
						</li>
						<li>
							<span class="entry-title"><a href="article2.php">Coloured Diamond Grading Factors</a></span>
						</li>
					</ul>
				</div>
				<div class="one-fourth">
					<h2></h2>
					<ul class="popular-posts">
						<li>
							<img src="style/images/ncdia.gif" />
						</li>
						<li>
							<img src="style/images/gia.JPG" style="margin-left: 30px"/>
						</li>
						<li>
							
						</li>
					</ul>
				</div>
				<div class="one-fourth">
					<h2>About Us</h2>
					<p>With more than 30 years in the industry, P. Hirani is a family business based in Mumbai, India. We are one of the top fancy diamond manufacturers in India with large inventory of diamonds spread across the color spectrum.</p> 
					<p>We manufacture with highest level of workmanship and specialize in 1ct and above sizes.</p>
				</div>
				<div class="one-fourth last">
					<h2>Contact Us</h2>
					<!-- Begin Form -->
        			<div class="form-container">
          				<div class="response"></div>
          				<form class="forms" action="contact/form-handler.php" method="post">
            				<fieldset>
              					<ol>
                					<li class="form-row text-input-row">
                						<label>Name</label>
                  						<input type="text" name="name" class="text-input" title="Name"/>
                					</li>
                					<li class="form-row text-input-row">
                						<label>Email</label>
                  						<input type="text" name="email" class="text-input required email" title="Email"/>
                					</li>
               						<li class="form-row text-area-row">
                  						<textarea name="message" class="text-area required"></textarea>
                					</li>
                					<li class="form-row hidden-row">
                  						<input type="hidden" name="hidden" value="" />
                					</li>
                					<li class="button-row">
                  						<input type="submit" value="Submit" name="submit" class="btn-submit" />
                					</li>
              					</ol>
              					<input type="hidden" name="v_error" id="v-error" value="Required" />
              					<input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
            				</fieldset>
          				</form>
        			</div>
       				<!-- End Form --> 
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<!-- End Supplementary -->
		<!-- Begin Site Generator -->
		<div class="site-generator">
			<div class="inner">
				
				<div class="social">
					<ul>
          				<li><a href="http://www.linkedin.com/company/p-hirani"><img src="style/images/icon-linkedin.png" alt="" /></a></li>
        			</ul>
				</div>
			</div>
		</div>
		<!-- End Site Generator -->
	</footer>
	<!-- End Footer -->
<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>
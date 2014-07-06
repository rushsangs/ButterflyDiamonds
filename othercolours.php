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
<title>Other Colours</title>
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
<script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>

<script type="text/javascript" src="style/js/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" type="text/css" href="style/js/fancybox/jquery.fancybox.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.2" />
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" />
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script>
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script>
<style scoped>
	img{
		
		padding: 5px;
	}
</style>
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
        				<li><a href="coloureddiamonds.php">Coloured Diamonds</a><ul>
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
				<span class="intro-text">Virtually every color, shade and hue the mind can imagine, nature has created within a marvelous natural color diamond.</span>
			</div>
			<!-- End Intro -->
			<div class="box">
				<div class="item-meta">
					<h1 class="entry-title">Red Diamonds</h1>
					<div class="item-controls">
						<span class="prev"><a href="pink.php" title="Previous"></a></span>
						<span class="up"><a href="coloureddiamonds.php" title="All Items"></a></span>
						
					</div>
				</div>
				<hr />
				
					<img class="paddingneeded" src="style/images/art/otherred.jpg" style="float:right" alt="" />
					<p>Red diamonds are extremely rare. Basically they are very strongly and deeply colored pink diamonds, with the same cause of color, crystal distortion. This combination is so rare that most jeweler and diamond dealers have never even seen a natural red diamond. They do not get large with the 5.11 carat Moussiaf Red shield being the largest known red.</p>
					
					<p>Source: NCDIA</p>
					<br>
				</div>
				<br><br>
				<div class="box">
				<div class="item-meta">
					<h1 class="entry-title">Grey Diamonds</h1>
					
				</div>
				<hr />
				
					<img class="paddingneeded" src="style/images/art/grey1.jpg" width="200px" style="float:left" alt="" />
					<p>Gray diamonds are often steely in appearance and to an untrained eye may be hard to distinguish from colorless diamonds. When viewed side-by-side the difference is obvious, a gray diamond is darker than a colorless one. Pure gray diamonds are rare and are frequently described as a masculine color diamond.</p>
					
					<p>Source: NCDIA</p>
					<br><br><br>
				</div>
				<br><br>
				<div class="box">
				<div class="item-meta">
					<h1 class="entry-title">White Diamonds</h1>
					
				</div>
				<hr />
				
					<img class="paddingneeded" src="style/images/art/otherwhite.jpg" style="float:right" alt="" />
					<p>Natural color white diamonds are not colorless, but are actually white. This can often cause confusion as the term is used loosely. A pure white diamond has a translucency or even opacity that makes the diamond white. This is often caused by sub-microscopic inclusions. They occasionally exhibit a weak play of color (similar to opals) called opalescence. These are highly prized among conniseurs.</p>
					
					<p>Source: NCDIA</p>
					
				</div>
				<br><br>
				<div class="box">
				<div class="item-meta">
					<h1 class="entry-title">Purple Diamonds</h1>
					
				</div>
				<hr />
				
					<img class="paddingneeded" src="style/images/art/otherpurple.jpg" style="float:left" alt="" />
					<p>Purple diamonds are very rare. It is believed that they have a similar cause of color as pink diamonds; crystal distortion. They are most often found in Siberia and are generally small in size. There are no historical or famous purple diamonds. This may be due to their inhospitable location. Purple diamonds larger than 5 carats are extremely rare, and their color rarely reaches the intense and vivid color grades.</p>
					
					<p>Source: NCDIA</p>
					
				</div>
				
			<br><br>
			<div class="box">
				<div class="item-meta">
					<h1 class="entry-title">Champagne Diamonds</h1>
					
				</div>
				<hr />
				
					<img class="paddingneeded" src="style/images/art/champagne1.jpg" width="200px" style="float:right" alt="" />
					<p>Even though these stones are quite beautiful, Brown Diamonds were not at the top of the popularity charts. The Argyle mine, where many of the these treasures are found, began a brilliant marketing camping of changing the name to something far more attractive. The lighter brown shade has adopted the name of Cognac Diamonds for its rich and golden appearance. As a luxury drink, the mind easily connected the two and helped to increase the desire for such a stone. The darker or deeper brownish color, known as Champagne Diamonds, is really managing to attract the attention these stones deserve. As a desirable food that any man or woman can easily relate to, the term “Champagne diamonds” immediately began to attract attention.</p>
				<br>
				</div>
				<br><br>
			<div class="box">
				<div class="item-meta">
					<h1 class="entry-title">Chamelion Diamonds</h1>
					
				</div>
				<hr />
				
					<img class="paddingneeded" src="style/images/art/chamelion1.jpg" width="200px" style="float:left; padding: 10px" alt="" />
					<p>Chameleon diamonds possess one of the most unique values in the fancy colored diamond family. As rare as all fancy colored diamonds are, these stones are so admired because of their magnificent color changing capabilities. They are the only natural diamonds that possess the ability to actually temporarily change color according to their environment.</p>
					<img class="paddingneeded" src="style/images/art/chamelion2.jpg" width="200px" style="float:right" alt="" />
					<p>There are two types of Chameleon colored diamonds.
<br>• 'Classic'
<br>• 'Reverse'
</p><p>
Classic Chameleon colored diamonds possesses two very distinct natural capabilities. Thermochromic and photochromic behavior patterns.
Its thermochromic behavior enables the stone to temporarily change to a darker color when heated from 150° Celsius to 250° Celsius, for a short period of time. As the stone cools off, its color gradually changes back to the lighter original color. Its photochromic behavior enables the stone to temporarily change to a darker color when stored in a dark place for a longer period of time. When the stone is exposed to light, the lighter color is gradually restored.
</p><p>
Reverse Chameleon colored diamonds, as the name suggests, act almost exactly opposite to Classic Chameleon stones. Reverse Chameleon colored stones have a darker stable color. Its photochromic behavior enables the stone to temporarily change to a lighter color when stored in a dark place for a longer period of time. When the stone is exposed to light, the darker color is gradually restored. Reverse Chameleon colored stones do not have any reaction to temperature changes.</p>
				<br>
				</div>

				</div>
				<div class="clear"></div>
			</div>
		<!-- End Main -->
	
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
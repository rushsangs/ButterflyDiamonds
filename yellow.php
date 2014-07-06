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
<title>Yellow Diamonds</title>
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
				<span class="intro-text">Yellow diamonds provide a subtle, dramatic aura in tones ranging from intense yellow hue to rich, softer light tones, becoming more and more popular every year.</span>
			</div>
			<!-- End Intro -->
			<div class="box">
				<div class="item-meta">
					<h1 class="entry-title">Yellow Diamonds</h1>
					<div class="item-controls">
						<span class="prev"><a href="blue.php" title="Previous"></a></span>
						<span class="up"><a href="coloureddiamonds.php" title="All Items"></a></span>
						<span class="next"><a href="argyle.php" title="Next"></a></span>
					</div>
				</div>
				<hr />
				
					<img class="paddingneeded" src="style/images/art/yellow1.jpg" width="200px" style="float:right" alt="" />
					<p>Yellow diamonds capture the suns rays like no other gemstone. The dramatic and brilliant glow of these diamonds makes them a red carpet favorite among celebrities, and as a result, they are the most widely known of colors.</p>
					
					<img class="paddingneeded" src="style/images/art/yellowstone.jpg" width="200px" style="float:left" alt="" />
					<h5>YELLOW ORIGIN</h5>
					<p>The most notably large and intense yellow diamonds have been discovered primarily in South Africa. The Allnatt, a 101ct cushion shape fancy vivid yellow diamond is perhaps the most signifi cant yellow diamond in history, named after its original owner Major Allnatt in the 1950s. One of the largest polished diamonds in the world is the Incomparable, a 407ct internally flawless brownish yellow diamond.</p>
					<h5>COLOUR FORMATION</h5>
					<p>The vast majority of all diamonds contain some nitrogen. In most yellow diamonds the nitrogen atoms have grouped themselves in very specific ways. This happens during and right after the diamond is formed. These nitrogen arrangements absorb light in the blue region of the spectrum producing a yellow color. Yellow diamonds can contain an orange, green or brown modifying color.</p>
					
					<h5>STRENGTH OF COLOUR</h5>
					<p>The vast majority of all diamonds contain some nitrogen. In most yellow diamonds the nitrogen atoms have grouped themselves in very specific ways. This happens during and right after the diamond is formed. These nitrogen arrangements absorb light in the blue region of the spectrum producing a yellow color. Yellow diamonds can contain an orange, green or brown modifying color.</p>
					<img class="paddingneeded" src="style/images/art/yellowgrid.jpg"  alt="" />
					<p>Source: NCDIA</p>
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
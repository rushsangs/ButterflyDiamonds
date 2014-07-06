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
<title>Education</title>
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
</head>
<body id="blog">
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<header>
			<div id="site-title"><a href="index.php"><img src="style/images/art/butterflylogo2.gif" style="position:relative;left:0px;display: inline-block;" width="140px"/></a></div>
			<!-- Begin Menu -->
			<nav id="access">
				<div id="menu" class="menu">
					<ul id="tiny">
						<li><a href="index.php">Home</a></li>
        				<li><a href="education.php" class="current">Education</a>
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
			
			<!-- End Intro -->
			<div class="content2">
				<div class="post">
					<h2 class="entry-title"><a href="article1.php">Fancy Color Diamond Quality Factors</a></h2>
					<div class="entry-meta">
      					
      				</div>
      				<div class="featured"><a href="article1.php" class="hover"><span class="overlay link"></span><img src="style/images/art/i2.jpg" alt="" /></a></div>
      				<div class="excerpt">
						<p>In diamonds, rarity equals value. With diamonds in the normal range, value is based on the absence of color, because colorless diamonds are the rarest. With fancy color diamonds—the ones outside the normal color range—the rarest and most valuable colors are saturated pinks, blues, and greens. In all cases, even very slight color differences can have a big impact on value.</p>
						<a href="article1.php" class="more">Continue reading &rarr;</a>
					</div>
				</div>
				<div class="post">
					<h2 class="entry-title"><a href="post.html">Fancy Colour Diamonds Grading Factors</a></h2>
					<div class="entry-meta">
      					
      				</div>
      				<div class="featured"><a href="post.html" class="hover"><span class="overlay link"></span><img src="style/images/art/big11.jpg" alt="" /></a></div>
      				<div class="excerpt">
						<p>Between the two categories of diamonds Fancy Color or White, the color of a diamond affects its price, no matter into which category the diamond falls. What is important to know is that the grading for each group is entirely different.</p>
						<a href="post.html" class="more">Continue reading &rarr;</a>
					</div>
				</div>
				
				
				<!-- Begin Page Navi -->
    			<!-- <div class="page-navi">
    				<ul>
    					<li><a href="#" class="current">1</a></li>
    					<li><a href="#">2</a></li>
    					<li><a href="#">3</a></li>
    					<li><a href="#">Next</a></li>
    					<li><a href="#">Last</a></li>
    				</ul>
    			</div> -->
    			<!-- End Page Navi -->
				
			</div>
			<!-- Begin Sidebar -->
	<!-- <div class="sidebar">
	
		<aside>
			<form class="searchform" method="get">
          		<input type="text" id="s" name="s" value="type and hit enter" onfocus="this.value=''" onblur="this.value='type and hit enter'"/>
      		</form>
		</aside>
		
		
		<aside>
			<h3>Popular Posts</h3>
			<ul class="post-list icon-hover">
					<li>
						<div class="post-image">
							<a href="#" class="hover"><span class="overlay link"></span><img src="style/images/art/b1-th.jpg" alt="" /></a>
						</div>
						<div class="post-content">
							<h5 class="entry-title"><a href="#">Risus Ornare Vulputate Purus Inceptos</a></h5>
							<div class="entry-meta"><a href="#">12 Jan 2012</a> | <a href="#">11 Comments</a></div>
						</div>
					</li>
					<li>
						<div class="post-image">
							<a href="#" class="hover"><span class="overlay link"></span><img src="style/images/art/b2-th.jpg" alt="" /></a>
						</div>
						<div class="post-content">
							<h5 class="entry-title"><a href="#">Ridiculus Nullam Sollicitudin Amet Pellentesque</a></h5>
							<div class="entry-meta"><a href="#">10 Feb 2012</a> | <a href="#">0 Comments</a></div>
						</div>
					</li>
					<li>
						<div class="post-image">
							<a href="#" class="hover"><span class="overlay link"></span><img src="style/images/art/b3-th.jpg" alt="" /></a>
						</div>
						<div class="post-content">
							<h5 class="entry-title"><a href="#">Sollicitudin Quam Fermentum Nibh Justo</a></h5>
							<div class="entry-meta"><a href="#">9 Jan 2012</a> | <a href="#">3 Comments</a></div>
						</div>
					</li>
				</ul>
		</aside>

		
		<aside>
			<h3>Tags</h3>
			<ul class="tag-list">
				<li><a href="#">Web</a></li>
				<li><a href="#">Photography</a></li>
				<li><a href="#">Illustation</a></li>
      			<li><a href="#">Fun</a></li>
      			<li><a href="#">Education</a></li>
      			<li><a href="#">Design</a></li>
      			<li><a href="#">Inspiration</a></li>
      			<li><a href="#">Tips</a></li>
				<li><a href="#">Manipulation</a></li>
      			<li><a href="#">Graphic</a></li>
      			<li><a href="#">Travel</a></li>
      			<li><a href="#">Concept</a></li>
			</ul>
		</aside>

		
		<aside>
			<h3>Categories</h3>
			<ul class="list">
				<li><a href="#">Web Design (21)</a></li>
				<li><a href="#">Photography (19)</a></li>
				<li><a href="#">Graphic Design (16)</a></li>
				<li><a href="#">Manipulation (15)</a></li>
				<li><a href="#">Motion Graphics (12)</a></li>
			</ul>
		</aside>
		
				
		
		
	</div> -->
	<!-- End Sidebar -->
			<div class="clear"></div>
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
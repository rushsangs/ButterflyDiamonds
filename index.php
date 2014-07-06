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
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"> 
	<link rel="icon" type="image/x-icon" href="/favicon.ico"> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>P. Hirani Diamonds</title>
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
<script type="text/javascript" src="style/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>

<script type="text/javascript" src="style/js/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" type="text/css" href="style/js/fancybox/jquery.fancybox.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.2" />
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" />
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script>
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script>
<link href="style/css/classic-081711.css" rel="stylesheet" type="text/css">

<style>
	
</style>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<header>
			<div id="site-title"><a href="index.php"><img src="style/images/art/butterflylogo2.gif" style="position:relative;left:0px;display: inline-block;" width="140px"/>
				
				</a></div>
			<!-- Begin Menu -->
			<nav id="access">
				<div id="menu" class="menu">
					<ul id="tiny">
						<li><a href="index.php" class="current">Home</a></li>
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
			<!-- End Menu --><img src="style/images/art/nameplate.gif" width="300px" style="display:inline-block;right:-90px"/>
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
			<!-- Begin Flex Slider -->
			<!-- <div id="flex-wrapper">
				<div class="flex-container">
					<div class="flexslider">
	    				<ul class="slides">
	    					<li><a href="coloureddiamonds.php">
	    						<img src="style/images/art/strip4.jpg"  style=" width:930px; height:390px" alt="try" />
	    						<div class="flex-caption left">
	    							<h3>Coloured Diamonds</h3>
	    							<p>Add a touch of colour to your life</p>
	    						</div></a>
	    					</li>
	    					<li>
	    						<img src="style/images/art/strip5.jpg" style=" width:930px; height:390px" alt="" />
	    					</li>
	    					<li><a href="coloureddiamonds.php">
	    						<img src="style/images/art/strip3.jpg" style=" width:930px; height:390px" alt="" />
	    						<div class="flex-caption right">
	    							<h3>Pink Diamonds</h3>
	    							<p>A woman's dream come true</p>
	    						</div></a>
	    					</li>
	    				</ul>
	  				</div>
				</div>
			</div> -->
			<!-- End Flex Slider -->
			<!-- Begin Intro -->
			<div class="intro aligncenter">
				<!-- <span class="intro-text">Passion For Colours</span> -->
			</div>
			<!-- End Intro -->
			<!-- Begin Top Columns -->
			<div class="one-fourth aligncenter">
				
				<a href="coloureddiamonds.php">
				<img src="style/images/art/pink1.png" class="icon" width="200px" height="200px" alt="" />
				</a><h2>Pink Diamonds</h2>
				<p>The most popular diamond amongst connoisseurs, a pink diamond is the ultimate symbol of feminity, love and grace.</p>
				<a href="coloureddiamonds.php" class="button">Know More</a>
			</div>
			<div class="one-fourth aligncenter">
				<a href="coloureddiamonds.php">
				<img src="style/images/art/yellow1.png" class="icon" width="200px" height="200px" alt="" />
				</a><h2>Yellow Diamonds</h2>
				<p>Yellow diamonds provide a subtle, dramatic aura in tones ranging from intense yellow hue to rich, softer light tones.</p>
				<a href="coloureddiamonds.php" class="button">Know More</a>
			</div>
			<div class="one-fourth aligncenter">
				<a href="coloureddiamonds.php">
				<img src="style/images/art/blue2.png" class="icon" width="200px" height="200px" alt="" />
				</a><h2>Blue Diamonds</h2>
				<p>Considered extremely rare, the shades of blue diamonds share the powerful blue of the sea, the sky or a pale winter day.</p>
				<a href="coloureddiamonds.php" class="button">Know More</a>
			</div>
			<div class="one-fourth last aligncenter">
				<a href="coloureddiamonds.php">
				<img src="style/images/art/green2.png" class="icon"height="200px" alt="" />
				</a>
				<h2><br>Green Diamonds</h2>
				<p>Very rare indeed, few new natural green diamonds make it to market each year, taking eons for the natural green to color to develop.</p>
				<a href="coloureddiamonds.php" class="button">Know More</a>
			</div>
			<!-- End Top Columns -->
			<div class="clear"></div>
			<br /><br />
			<!-- Begin Bottom Columns -->
			<div class="one-half">
				<h2 class="section-title">Education</h2>
				<ul class="latest-posts icon-hover">
					<li>
						<div class="post-image">
							<a href="article1.php" class="hover"><span class="overlay link"></span><img src="style/images/art/i2.jpg" alt="" /></a>
						</div>
						<div class="post-content">
							<h4 class="entry-title"><a href="article1.php">Coloured Diamond Quality Factors</a></h4>
							<p>In diamonds, rarity equals value.</p>
							
						</div>
					</li>
					<li>
						<div class="post-image">
							<a href="article2.php" class="hover"><span class="overlay link"></span><img src="style/images/art/big11.jpg" alt="" /></a>
						</div>
						<div class="post-content">
							<h4 class="entry-title"><a href="article2.php">Coloured Diamond Grading Factors</a></h4>
							<p>Fancy Color or White, the color of a diamond affects its price, no matter into which category the diamond falls.</p>
							
						</div>
					</li>
				</ul>
			</div>
			<div class="one-half last">
				<h2 class="myh2">Subscribe to our mailing list</h2>
<div id="mc_embed_signup">
<form action="http://phirani.us6.list-manage.com/subscribe/post?u=13040daf4d83d5303bd786466&amp;id=44847bae0a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-groupA">
	<label for="mce-EMAIL">  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" placeholder="Email Address" class="required email formrow" id="mce-EMAIL">
</div>
<div class="mc-field-halfgroupA">
	<label for="mce-FNAME"><span  class="asterisk" style="right:55%;display: inline-block">*</span>
</label>
	<input type="text" value="" name="FNAME" placeholder="First Name" class="required formrow" id="mce-FNAME">
	<label for="mce-LNAME"><span class="asterisk"style="right:6%">*</span> 
</label>
	<input type="text" value="" name="LNAME" placeholder="Last Name" class="required formrow" id="mce-LNAME">
</div>
<div class="mc-field-groupA">
	<label for="mce-COMPANY"><span class="asterisk">*</span>
</label>
	<input type="text" placeholder="Company" value="" name="COMPANY" class="required formrow" id="mce-COMPANY">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_13040daf4d83d5303bd786466_44847bae0a" tabindex="-1" value=""></div>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
</form>
</div>
<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='COMPANY';ftypes[3]='text';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        };    
    }
}

var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
    head.appendChild(script);
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://phirani.us6.list-manage.com/subscribe/post-json?u=13040daf4d83d5303bd786466&id=44847bae0a&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        $('.phonefield-us','#mc_embed_signup').each(
                            function(){
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
                                    		this.value = '';
									    } else {
									        this.value = 'filled';
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
			</div>
			<!-- End Bottom Columns -->
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
							<span class="entry-title"><a href="#">Coloured Diamond Quality Factors</a></span>
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
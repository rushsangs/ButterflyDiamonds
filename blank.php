
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Diamond Database</title>
<link href="style/css/custom.css" rel="stylesheet" type="text/css">
<!-- Common Kendo UI Web CSS -->
<link href="styles/kendo.common.min.css" rel="stylesheet" />
<!-- Default Kendo UI Web theme CSS -->
<link href="styles/kendo.default.min.css" rel="stylesheet" />
<!-- jQuery JavaScript -->
<script src="js/jquery.min.js"></script>
<!-- Kendo UI Web combined JavaScript -->
<script src="js/kendo.web.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/type/qlassik.css" media="all" />

<!--[if IE 7]>
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
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/jsonconvert.js"></script>

<script type="text/javascript" src="style/js/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" type="text/css" href="style/js/fancybox/jquery.fancybox.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.2" />
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" />
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script>
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script>
<link href="style/css/classic-081711.css" rel="stylesheet" type="text/css">

<script>
$.noConflict();
// Code that uses other library's $ can follow here.
</script>
</head>
<body id="page">
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
        				<li><a href="login.php" class="current">Log In</a></li>
        				
        				<li><a href="contact.php">Contact</a></li>
        			</ul>
				</div>
			</nav>
			<!-- End Menu --><img src="style/images/art/nameplate.gif" width="300px" style="	display:inline-block;right:-90px"/>
			<div style="float:right; margin-right: 10px">
			</div>
			<div class="clear"></div>
		</header>
		<!-- Begin Main -->
		<div id="main">
			<div class="container box">
				<div id="container"></div>
				<p id="new"></p>
		<p id="test"></p>
		<!-- Begin Toggle -->
          
            <h4 class="title">Search Options</h4>
            
              <div>
               <div class="searchtable">
		<form name="search" id="form">
		<table>
			<tr><th><h4>Shape</h4></th><th><h4>Size</h4></th><th><h4>Fancy colour specifications</h4></th><th><h4>Polish</h4></th><th><h4>Clarity</h4></th><th><h4>Fluorescence</h4></th><th><h4>Certifications</h4></th></tr>
			<tr><td>
				<input type="checkbox" name="shape0" value="ANY" checked=true>Any<br>
							<input type="checkbox" name="shape1" value="OVAL">Oval<br>
							<input type="checkbox" name="shape2" value="RADIANT">Radiant<br>
							<input type="checkbox" name="shape3" value="CUSHION">Cushion<br>
							<input type="checkbox" name="shape4" value="HEART">Heart<br>
							<input type="checkbox" name="shape5" value="TRILLIANT">Trilliant<br>
							<input type="checkbox" name="shape6" value="ROUND">Round<br>
							<input type="checkbox" name="shape7" value="SQUARE">Square<br>
							<input type="checkbox" name="shape8" value="PEAR">Pear<br>
							<input type="checkbox" name="shape9" value="RECTANGLE">Rectangle<br>
							<input type="checkbox" name="shape10" value="OTHER">Other<br>
				
			</td><td>
			From<br>
			<input type="text" id="fromsize" maxlength="5" size="5">
			<br>To <br>
			<input type="text"	id="tosize" maxlength="5" size="5">
			</td>
			<td>
				<table>
					<tr><th><h5>Intensity</h5></th><th><h5>Overtone</h5></th><th><h5>Colour</h5></th></tr>
					<tr>
						<td>
							
							<input type="checkbox" id="any" name="intensity0" value="ANY" checked=true>Any<br>
							<input type="checkbox" id="faint" name="intensity1" value="FAINT">Faint<br>
							<input type="checkbox" id="very light" name="intensity2" value="VERY LIGHT">Very Light<br>
							<input type="checkbox" id="light" name="intensity3" value="LIGHT">Light<br>
							<input type="checkbox" id="fancy" name="intensity4" value="FANCY">Fancy<br>
							<input type="checkbox" id="fancy light" name="intensity5" value="FANCY LIGHT">Fancy Light<br>
							<input type="checkbox" id="fancy dark" name="intensity6" value="FANCY DARK">Fancy Dark<br>
							<input type="checkbox" id="fancy intense" name="intensity7" value="FANCY INTENSE">Fancy Intense<br>
							<input type="checkbox" id="fancy vivid" name="intensity8" value="FANCY VIVID">Fancy Vivid <br>
							<input type="checkbox" id="fancy deep" name="intensity9" value="FANCY DEEP">Fancy Deep<br>
							
						</td>
						<td>
							
							<input type="checkbox" name="overtone0" value="ANY" checked=true>Any<br>
							<input type="checkbox" name="overtone10" value="NONE">None<br>
							<input type="checkbox" name="overtone1" value="YELLOWISH">Yellowish<br>
							<input type="checkbox" name="overtone2" value="PINKISH">Pinkish<br>
							<input type="checkbox" name="overtone3" value="BLUISH">Bluish<br>
							<input type="checkbox" name="overtone4" value="GRAYISH">Grayish<br>
							<input type="checkbox" name="overtone5" value="GREENISH">Greenish<br>
							<input type="checkbox" name="overtone6" value="ORANGY">Orangy<br>
							<input type="checkbox" name="overtone7" value="REDDISH">Reddish<br>
							<input type="checkbox" name="overtone8" value="BROWNISH">Brownish<br>
							<input type="checkbox" name="overtone9" value="PURPLISH">Purplish<br>
						</td>
						<td>
							
							<input type="checkbox" name="colour0" value="ANY" checked=true>Any<br>
							<input type="checkbox" name="colour1" value="YELLOW">Yellow<br>
							<input type="checkbox" name="colour2" value="PINK">Pink<br>
							<input type="checkbox" name="colour3" value="BLUE">Blue<br>
							<input type="checkbox" name="colour4" value="GREEN">Green<br>
							<input type="checkbox" name="colour5" value="ORANGE">Orange<br>
							<input type="checkbox" name="colour6" value="PURPLE">Purple<br>
							<input type="checkbox" name="colour7" value="GRAY">Gray<br>
							<input type="checkbox" name="colour8" value="BROWN">Brown<br>
							<input type="checkbox" name="colour9" value="RED">Red<br>
							<input type="checkbox" name="colour10" value="WHITE">White<br>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<select name="polish" id="polish" align="top">
				<option value="ANY" >Any</option>
				<option value="EX" >Excellent</option>
				<option value="VG">Very Good</option>
				<option value="G">Good</option>
				<option value="F">Fair</option>
				<option value="P">Poor</option>
				</select>
				<br><br><br><br><br><br>
				<table style="height: 70px"><tr><th>
				<h4 align="center">Symmetry</h4></th></tr><tr><td>
				<select name="symmetry" id="symmetry">
				<option value="ANY" >Any</option>
				<option value="EX" >Excellent</option>
				<option value="VG">Very Good</option>
				<option value="G">Good</option>
				<option value="F">Fair</option>
				<option value="P">Poor</option>
				</select>
				</td></tr>
				</table>
			</td>
			<td>
				<input type="checkbox" name="clarity0" value="ANY" checked=true>Any<br>
				<input type="checkbox" name="clarity1" value="FL">FL<br>
				<input type="checkbox" name="clarity2" value="IF">IF<br>
				<input type="checkbox" name="clarity3" value="VVS1">VVS1<br>
				<input type="checkbox" name="clarity4" value="VVS2">VVS2<br>
				<input type="checkbox" name="clarity5" value="VS1">VS1<br>
				<input type="checkbox" name="clarity6" value="VS2">VS2<br>
				<input type="checkbox" name="clarity7" value="SI1">SI1<br>
				<input type="checkbox" name="clarity8" value="SI2">SI2<br>
				<input type="checkbox" name="clarity9" value="I1">I1<br>
				<input type="checkbox" name="clarity10" value="I2">I2<br>
				<input type="checkbox" name="clarity11" value="I3">I3<br>
			</td>
			<td>
				<input type="checkbox" name="flu0" value="ANY" checked=true>Any<br>
				<input type="checkbox" name="flu1" value="NONE">None<br>
				<input type="checkbox" name="flu2" value="FAINT">Faint<br>
				<input type="checkbox" name="flu3" value="MEDIUM">Medium<br>
				<input type="checkbox" name="flu4" value="STRONG">Strong<br>
				<input type="checkbox" name="flu5" value="VERY STRONG">Very Strong<br>
			</td>
			<td>
				<input type="checkbox" name="cert0" value="ANY" checked=true>Any<br>
				<input type="checkbox" name="cert1" value="GIA">GIA<br>
				<input type="checkbox" name="cert2" value="IGI">IGI<br>
				<input type="checkbox" name="cert3" value="NONE">None<br>
			</td>
		</tr>
		

		</table>
		</form>
		</div>
		<!-- </div>
		</div> -->
		<br>
		<a class="button dark" onclick="sortData([[[document.search.shape0.value,document.search.shape0.checked],[document.search.shape1.value,document.search.shape1.checked],[document.search.shape2.value,document.search.shape2.checked],[document.search.shape3.value,document.search.shape3.checked],[document.search.shape4.value,document.search.shape4.checked],[document.search.shape5.value,document.search.shape5.checked],[document.search.shape6.value,document.search.shape6.checked],[document.search.shape7.value,document.search.shape7.checked],[document.search.shape8.value,document.search.shape8.checked],[document.search.shape9.value,document.search.shape9.checked],[document.search.shape10.value,document.search.shape10.checked]],
		document.search.fromsize.value,document.search.tosize.value,[document.search.polish.value],[[document.search.intensity0.value,document.search.intensity0.checked],[document.search.intensity1.value,document.search.intensity1.checked],[document.search.intensity2.value,document.search.intensity2.checked],[document.search.intensity3.value,document.search.intensity3.checked],[document.search.intensity4.value,document.search.intensity4.checked],[document.search.intensity5.value,document.search.intensity5.checked],[document.search.intensity6.value,document.search.intensity6.checked],[document.search.intensity7.value,document.search.intensity7.checked],[document.search.intensity8.value,document.search.intensity8.checked],[document.search.intensity9.value,document.search.intensity9.checked]],
		[[document.search.colour0.value,document.search.colour0.checked],[document.search.colour1.value,document.search.colour1.checked],[document.search.colour2.value,document.search.colour2.checked],[document.search.colour3.value,document.search.colour3.checked],[document.search.colour4.value,document.search.colour4.checked],[document.search.colour5.value,document.search.colour5.checked],[document.search.colour6.value,document.search.colour6.checked],[document.search.colour7.value,document.search.colour7.checked],[document.search.colour8.value,document.search.colour8.checked],[document.search.colour9.value,document.search.colour9.checked],[document.search.colour10.value,document.search.colour10.checked]],
		[[document.search.overtone0.value,document.search.overtone0.checked],[document.search.overtone1.value,document.search.overtone1.checked],[document.search.overtone2.value,document.search.overtone2.checked],[document.search.overtone3.value,document.search.overtone3.checked],[document.search.overtone4.value,document.search.overtone4.checked],[document.search.overtone5.value,document.search.overtone5.checked],[document.search.overtone6.value,document.search.overtone6.checked],[document.search.overtone7.value,document.search.overtone7.checked],[document.search.overtone8.value,document.search.overtone8.checked],[document.search.overtone9.value,document.search.overtone9.checked],[document.search.overtone10.value,document.search.overtone10.checked]],
		[[document.search.clarity0.value,document.search.clarity0.checked],[document.search.clarity1.value,document.search.clarity1.checked],[document.search.clarity2.value,document.search.clarity2.checked],[document.search.clarity3.value,document.search.clarity3.checked],[document.search.clarity4.value,document.search.clarity4.checked],[document.search.clarity5.value,document.search.clarity5.checked],[document.search.clarity6.value,document.search.clarity6.checked],[document.search.clarity7.value,document.search.clarity7.checked],[document.search.clarity8.value,document.search.clarity8.checked],[document.search.clarity9.value,document.search.clarity9.checked],[document.search.clarity10.value,document.search.clarity10.checked],[document.search.clarity11.value,document.search.clarity11.checked]],
		[[document.search.flu0.value,document.search.flu0.checked],[document.search.flu1.value,document.search.flu1.checked],[document.search.flu2.value,document.search.flu2.checked],[document.search.flu3.value,document.search.flu3.checked],[document.search.flu4.value,document.search.flu4.checked],[document.search.flu5.value,document.search.flu5.checked]],
		[[document.search.cert0.value,document.search.cert0.checked],[document.search.cert1.value,document.search.cert1.checked],[document.search.cert2.value,document.search.cert2.checked],[document.search.cert3.value,document.search.cert3.checked]],[document.search.symmetry.value]])">Search</a>
             <div style="float: right"> 
             	<div style="float: left"><ul class="filter">
        <li><a class="active button dark" id="gridfilter"  onclick="dogridstuff()" data-filter="*">Grid View</a></li>
        <li><a  class="dark button" id="tilefilter" onclick="dotilestuff()" data-filter=".bw">Tile View</a></li>
      </ul></div>
             	<b>Mail us your selection on this page! </b>
	<form name="sendmail" id="sendd" style=" display: inline" class="forms"  method="post">
		<input type="hidden" id="datastring" value="" name="datastring" />
	<a onclick="defaul(document.getElementById('sendmail'))" class="button dark">Send Email</a>
	</form>	</div>
              </div>
          
          <!-- End Toggle --> 
	
	<div id="database">
		<div id="items" style="display:none">
		<div id="listView" style="margin-left: 50px"></div>
        <div id="pager" class="k-pager-wrap"> </div>
	</div>
	<div id="grid"></div>
	</div>
	<p><b>Note:The column pair id represents respective pairs and prices may vary as per selection, if any.</b></p>
	
	<br>
	<script type="text/x-kendo-template" id="template2">
		
                         <div class="item">
          <div class="thumb">
          	<a href= "style/images/art/blue2.png" class="hover fancybox-media" title= #= PID # ><span class="overlay zoom"></span><img src= #= PHOTO #  style="display: inline" onerror="this.src='style/images/imgnotavailable.jpg'" width='280px'></a>
          </div>
          <div class="details">
          	<h4 class="entry-title"> #= PID # </a></h4>
          </div>
        </div>
        
                          <!-- <div class="product">   <table>
                            <tr ><td style="width:200px;">
                            <ul>
                                <li><label>Pid:</label>#= PID #</li>
                                <li><label>Pieces:</label>#= PCS #</li>
                                <li><label>Collection ID:</label>#= COLID #</li>
                                <li><label>Shape:</label>#= SHAPE #</li>
                                <li><label>Description:</label>#= DESCRIPTION #</li>
                                <li><label>Overtone:</label>#= OVERTONE #</li>
                                <li><label>Overtone 2:</label>#= OVERTONE1 #</li>
                             	<li><label>Clarity:</label>#= CLARITY #</li>
                                <li><label>Polish:</label>#= POLISH #</li>
                                <li><label>Symmetry:</label>#= SYMMETRY #</li>
                                
                            </ul>
							</td>
							<td>
								<ul>
									<li><label>L:</label>#= L #</li>
                                <li><label>W:</label>#= W #</li>
                                <li><label>D:</label>#= D #</li>
                                <li><label>TD:</label>#= TD #</li>
                                <li><label>Flu:</label>#= FLU #</li>
                                <li><label>Flu colour:</label>#= FLUCOLOR #</li>
                                <li><label>Report Lab:</label>#= REPORTLAB #</li>
                                <li><label>Report No:</label>#= REPORTNO #</li>
                                <li><label>Price:</label>#= SPRICE #</li>
								</ul>
							</td> 
							</tr>
							</table>
								<img src= #= PHOTO #  style="display: inline" onerror="this.src='style/images/imgnotavailable.jpg'" class="img1" width='280px'> 
							 </div>  -->
            </script>
	<script type="text/x-kendo-template" id="template">
                <div id="tabstrip">
                    <div>
                        <div class='employee-details'>
                            
                            <table style="">
                            <tr ><td style="width:200px;">
                            <ul>
                                <li><label>Pid:</label>#= PID #</li>
                                <li><label>Pieces:</label>#= PCS #</li>
                                <li><label>Collection ID:</label>#= COLID #</li>
                                <li><label>Shape:</label>#= SHAPE #</li>
                                <li><label>Description:</label>#= DESCRIPTION #</li>
                                <li><label>Overtone:</label>#= OVERTONE #</li>
                                <li><label>Overtone 2:</label>#= OVERTONE1 #</li>
                             	<li><label>Clarity:</label>#= CLARITY #</li>
                                <li><label>Polish:</label>#= POLISH #</li>
                                <li><label>Symmetry:</label>#= SYMMETRY #</li>
                                
                            </ul>
							</td>
							<td>
								<ul>
									<li><label>L:</label>#= L #</li>
                                <li><label>W:</label>#= W #</li>
                                <li><label>D:</label>#= D #</li>
                                <li><label>TD:</label>#= TD #</li>
                                <li><label>Flu:</label>#= FLU #</li>
                                <!-- <li><label>Flu int:</label>#= FLUINT #</li> -->
                                <li><label>Flu colour:</label>#= FLUCOLOR #</li>
                                <li><label>Report Lab:</label>#= REPORTLAB #</li>
                                <li><label>Report No:</label>#= REPORTNO #</li>
                                <li><label>Price:</label>#= SPRICE #</li>
								</ul>
							</td>
							<td>
								<img src= #= PHOTO #  style="display: inline" alt="Picture not available" class="img1" width='300px'> 
							</td> 
							</tr>
							</table> 
							                        
                        </div>
                    </div>
                </div>

            </script>
       <script>
		var data=[];
		var dataforgrid=[];
		var data2=[];
		var i=1;
		var prev="";
		var text="";
		var source;
		$(document).ready(function(){
                $.ajax({
                    url: 'https://dl.dropboxusercontent.com/u/2565723/thedata.js?callback=callback&_=1402638666911',
                    dataType: 'jsonp',
                    jsonp: 'callback'
                });
            })
		function initSource()
		{
			 
            for(var i=0;i<dataforgrid.length;++i)
            {
            	dataforgrid[i].CTS=dataforgrid[i].CTS.toFixed(2);
            }
		source=new kendo.data.DataSource({
				data:dataforgrid,
            	 // {transport:{
            		// read: {
            			// url:"https://dl.dropboxusercontent.com/u/2565723/thedata.js",
            			// dataType:"jsonp",
            			// jsonpCallback: 'callback'
            		// }}             	
            		
            
            	schema: {
                                model: {
                                    fields: {
                                        PID: { type: "string",editable: false},
                                        SELECT: {type:"boolean",editable: false},
                                        SPRICE: { type: "number",editable: false },
                                        SHAPE: { type: "string",editable: false },
                                        PCS: { type: "number",editable: false },
                                        COLID: {editable: false},
                                        CTS: {editable: false},
                                        PHOTO: {editable: false},
                                        DESCRIPTION: {editable: false},
                                        CLARITY: {editable: false},
                                        POLISH: {editable: false},
                                        SYMMETRY: {editable: false},
                                        L: {editable: false},
                                        W: {editable: false},
                                        TD: {editable: false},
                                        D: {editable: false},
                                        FLU: {editable: false},
                                    }
                                }
                           },
            	autoSync: true,
            	sort:
            	[{field:"COLID",dir:"asc"},
            	{field:"DESCRIPTION",dir:"asc"},
            	{field:"CTS",dir:"asc"}
            	],
            	pageSize: 20
            });
            
           
           // source.read();
            	// source.fetch(function()
            	// {
            		 // //var item1=source.at(0);
            // document.getElementById("test").innerHTML="<p>Are we doing fine?"+"</p>";
          // //  document.write("<p>"+item1.CTS+"</p>");
            	// });
             	
            		// );	
            	
     			initGrid();
				
           }
           function dogridstuff()
           {
           	$("#tilefilter").removeClass("active");
           	$("#gridfilter").addClass("active");
           	$("#grid").show();
           	document.getElementById("items").style.display='none';
           }
           function dotilestuff()
           {
           	$("#tilefilter").addClass("active");
           	$("#gridfilter").removeClass("active");
           	prepareDataForTile();
           	initTile();
           	$("#grid").hide();
           	document.getElementById("items").style.display='block';
           }
           function initTile()
           {
           	updateSource();
           	$("#pager").kendoPager({
                dataSource: source,
                pageSizes: [9,18,27,54],
                buttonCount: 5
            });

            $("#listView").kendoListView({
                dataSource: source,
                selectable: false,
                template: kendo.template($("#template2").html())
            });
           }
           function prepareDataForTile()
           {
           		for(var i=0;i<dataforgrid.length;++i)
           		{
           			if(dataforgrid[i].PHOTO=="")
           			dataforgrid.splice(i--,1);
           		}
           }
           function sendmail(wholedata,form)
           {
           		var selecteddata=[];
           		//document.getElementById("test").innerHTML="<p>"+wholedata[0].SELECT+"</p>"
           		for(var i=0;i<wholedata.length;++i)
           		{
           			
           			if(wholedata[i].SELECT==true)
           			{
           				selecteddata.push(wholedata[i]);
           				//document.getElementById("test").innerHTML="<p>Selected</p>";
           			}
           		}
           		var string= JSON2CSV(JSON.stringify(selecteddata));
				document.getElementById("datastring").getAttributeNode("value").value=string;
				// for(var i=0;i<selecteddata.length;++i)
				// {
					// document.write("<p>"+selecteddata[i].PID+selecteddata[i].SELECT+"</p>")
				// }
				$.ajax({
                    url: 'contact/database-handler.php',
                    type: 'POST',
                    data: {
                    	"datastring":document.getElementById('datastring').getAttributeNode("value").value,
                    },
                    dataType: "JSON",
                    complete: function(response)
                    {
                    	alert(response.responseText);
                    }
                });
           		
           }
		function callback(datafromfile)
		{
			dataforgrid=datafromfile;
			data=datafromfile;
			for(var i=0;i<dataforgrid.length;++i)
			{
				dataforgrid[i].SELECT=false;
				data[i].SELECT=false;
			}
			data[0].SELECT=true;
			initSource();
			//document.getElementById("test").innerHTML="<p>Selected</p>";
		}
		function updateSource()
		{
            source=new kendo.data.DataSource({
            	data:dataforgrid,
            	schema: {
                                model: {
                                    fields: {
                                        PID: { type: "string",editable: false},
                                        SELECT: {type: "boolean",editable: true},
                                        SPRICE: { type: "number",editable: false },
                                        SHAPE: { type: "string",editable: false },
                                        PCS: { type: "number",editable: false },
                                        COLID: {editable: false},
                                        CTS: {editable: false},
                                        PHOTO: {editable: false},
                                        DESCRIPTION: {editable: false},
                                        CLARITY: {editable: false},
                                        POLISH: {editable: false},
                                        SYMMETRY: {editable: false},
                                        L: {editable: false},
                                        W: {editable: false},
                                        TD: {editable: false},
                                        D: {editable: false},
                                        FLU: {editable: false},
                                    }
                                }
                           },
            	autoSync: true,
            	sort:
            	[{field:"COLID",dir:"asc"},
            	{field:"DESCRIPTION",dir:"asc"},
            	{field:"CTS",dir:"asc"}
            	],
            	pageSize: 20
            });
            
        }
       
       
         	// $("#tabstrip").kendoTabStrip({
         		// collapsible: true,
         		// animation: {
            // open: {
                // effects: "fadeIn"
            // }
        // }
         	// });
            
             function initGrid()
             {
                $("#grid").kendoGrid({
                	
                	 columns:[
                	 {title: "SELECT",field:"SELECT", template: "<input type='checkbox' class='checkbox1' value='select1' data-bind='checked: SELECT' #= SELECT ? checked='checked' : '' # />",width: "25px" },
                	 {title: "IMG",field:"PHOTO",width:"30px", template:'#= whichpic(PHOTO) #'},
                   	 {field: "PID",title: "ID",width: "43px"},
                	 {field: "COLID", title:"PAIR ID",width:'40px'},
                	 {field: "PCS",title: "PCS",width: '21px'},
                	 {field: "CTS", title: "CTS",width: '40px'},
                	 {field: "SHAPE", title: "SHAPE",width: "60px"},
                	 {field: "DESCRIPTION",title:"DESCRIPTION", width: "130px"},
                	 {field: "CLARITY",title:"CLA", width:'40px'},
                	 {field: "POLISH",title:"POL", width:'40px'},
                	 {field: "SYMMETRY",title:"SYM",width: '40px'},
                	 {field: "L",title:"L", width:'40px'},
                	 {field: "W",title:"W", width:'40px'},
                	 {field: "D",title:"D", width:'40px'},
                	 {field: "TD",title:"TD", width:'50px'},
                	 {field: "FLU",title:"FLU", width:'40px'},
                	 {field: "SPRICE", title: "PRICE", width:'50px'},
                	 {field: "QUOTEPRICE", title: "QUOTE"},
                	 // { command: [ {
        // name: "Image", width:"180px",
        // click: function(e) {
          // // e.target is the DOM element representing the button
          // var tr = $(e.target).closest("tr"); // get the current table row (tr)
          // // get the data bound to the current table row
          // var data1 = this.dataItem(tr);
          // if(data1.PHOTO=="")
          // document.getElementById("test").innerHTML="<p>Sorry image is not available for this item. </p>";
          // else
          // document.getElementById("test").innerHTML="<img src=" + data1.PHOTO+" align: 'right' width='300px'>";
        // }
      // } ]
   // }
                	 // {field: "PHOTO",title: "Image", template: "<img src='${ PHOTO }' width='200px' height='200px'>"
           				],
                	 dataSource: source,
                	 sortable: {
                    mode: "multiple",
                   
                    allowUnsort: true},
                     // change: onClick,
                	 pageable: {
    pageSizes: [10,20, 40, 50, 100],
    buttonCount: 5,
},

                	 editable: true,
                	 selectable:true,
                	 resizable: true,
                	 // selectable: "single cell",
                	 navigatable: true,
                	 change: function(e) {
                	 	
                	 	//grid.clearSelection();
                	 	var grid = $("#grid").data("kendoGrid");
                	 	
                	 	//if(==grid.select()==this.)
                	 	//var row=grid.select();
                	 	//$(row).removeClass("k-state-selected");
                	 	// document.getElementById("new").innerHTML="<p>Heylo"+i+"</p>";
    					
    					//var selectedRows = this.select();
    					//var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
    					grid.collapseRow(prev);
						grid.expandRow($("#grid tbody").find("tr.k-state-selected"));
						prev=$("#grid tbody").find("tr.k-state-selected");
						//grid.clearSelection();
						
						},
                	 /*
					 dataBound: function() {
												 this.expandRow(this.tbody.find("tr.employee-details").first());
											},*/
					 
                	 groupable: true,
                	 detailTemplate: kendo.template($("#template").html()),
                        detailInit: detailInit,
                        
                	  });
                	  $(".checkbox1").change(function(e) {
       						var grid=$("#grid").data("kendoGrid");
       						var row = grid.select();
       						
   							var item = grid.dataItem(row);
    						item.SELECT=toggleselect(item.SELECT);
    						
});
                	  
                	 }
                	
                	  // grid.bind("change", grid_change);
                	  // function grid_change(e)
                	  // {
                	  	// document.write("<p>Hello</p>");
                	  	// document.getElementById("new").innerHTML="<p>Heylo</p>";
                	  // }
                	  function detailInit(e) {
                    kendo.bind(e.detailRow,e.data);
                  //  var detailRow = e.detailRow;
					/*
					var grid = $("#grid").data("kendoGrid");
										grid.expandRow(".employee-details:first");*/
					
                    //detailRow.find(".tabstrip").kendoTabStrip({
                        /*
                        animation: {
                                                    open: { effects: "fadeIn" }
                                                }*/
                        
                    //});
                   }
                  
                   //document.getElementById("new").innerHTML="<p>Heylo</p>";
                  function whichpic(pic)
                  {
                  	 if(pic=="")
                     return "<img src=style/images/crossicon.jpg width=30px>";
                  	 else
                     return "<img src=style/images/imageicon.jpg width=30px>";
                  }
                  function checkboxing(val)
                  {
                  	if(!val)
                  	  return "<input type='checkbox' class='checkbox1' value='select1' data-bind='checked: fullyPaid' #= fullyPaid ? checked='checked' : '' #/>";
                  	else
                  	  return "<input type='checkbox' class='checkbox1' checked value='select1'/>";
                  }
                  function toggleselect(val)
                  {
                  	if(val)
                  		return false;
                  		else
                  		return true;
                  }
                   function defaul(form)
                  {
                  	 
                  	 
                  	 
                  	 // $(".checkbox1").change(function() {
    					// var grid = $("#grid").data("kendoGrid");
    					// var dataitem=grid.dataItem($("#grid tbody").find("tr.k-state-selected"));
    					// dataitem.set(SELECT,true);
    					// var dataitem=grid.dataItem($("#grid tbody").find("tr.k-state-selected"))
    					// alert(dataitem.get(SELECT));
//     					
    // });
     
     
                  	// document.getElementById("test").innerHTML="<p>Defaul entered</p>";
                  	var grid = $("#grid").data("kendoGrid");
                  	var data2=$("#grid").data().kendoGrid.dataSource.view();
                  	// data2[i++].SELECT=grid.table.find("tr").find("td:first input").attr("value");
					//document.getElementById("test").innerHTML="<p>Hey</p>";
					form=document.getElementById("sendd");
					sendmail(data2,form);
//form.submit();	
          // return true;     	 
          
            	   }// document.getElementById("test").innerHTML="<p>Hey</p>";
            	   function sortData(string)
					{
	//document.writeln("<table border ='1' ><tr><td>PID</td><td>Pcs</td><td>CTS</td><td>Description</td><td>Shape</td><td>Clarity</td><td>Polish</td><td>Symmetry</td><td>Photo</td></tr>");	
	
	var subdata=[];
	var sshape=[];
	var minsize=0;
	var maxsize=500;
	var spolish=["EX","VG","G","F","P",""];
	var sintensity=[];
	var scolour=[];
	var sovertone=[];
	var sclarity=[];
	var sflu=[];
	var scert=[];
	var ssymm=["EX","VG","G","F","P",""];
	
	for(var i=0;i<11;++i)
	{
		if(string[0][i][1]==true||string[0][0][1])
		{
			
			// document.write("<p>yay</p>");
			sshape.push(string[0][i][0]);
			//document.getElementById("test").innerHTML="<p>"+scolour[0]+"</p>";
		}
		if(string[0][0][1])
		{
			sshape.push("");
		}
		if(string[0][10][1])
		{
			//search all other possible shapes and add them
			var shapeString=["OVAL","RADIANT","CUSHION","HEART","TRILLIANT","ROUND","SQUARE","PEAR","RECTANGLE"];
			for(var k=0;k<data.length;++k)
			{
				if(shapeString.indexOf(data[k].SHAPE)==-1)
				{
					sshape.push(data[k].SHAPE);
				}
			}
		}
	}
	for(var i=0;i<4;++i)
	{
		if(string[9][i][1]==true||string[9][0][1])
		{
			// document.write("<p>yay</p>");
			scert.push(string[9][i][0]);
		}
		if(string[9][0][1])
		{
			scert.push("");
		}
	}
	
	for(var i=0;i<10;++i)
	{
		if(string[4][i][1]==true||string[4][0][1])
		{
			// document.write("<p>yay</p>");
			sintensity.push(string[4][i][0]);
		}
	}
	for(var i=0;i<12;++i)
	{
		if(string[7][i][1]==true)
		{
			sclarity.push(string[7][i][0]);
		}
		if(string[7][0][1])
		{
			sclarity.push("");
		}
	}
	for(var i=0;i<11;++i)
	{
		if(string[5][i][1]==true||string[5][0][1])
		{
			
			// document.write("<p>yay</p>");
			scolour.push(string[5][i][0]);
			//document.getElementById("test").innerHTML="<p>"+scolour[0]+"</p>";
		}
		if(string[5][0][1])
		{
			scolour.push("");
		}
	}
	for(var i=0;i<11;++i)
	{
		if(string[6][i][1]==true)
		{
			
			// document.write("<p>yay</p>");
			sovertone.push(string[6][i][0]);
			//document.getElementById("test").innerHTML="<p>"+sovertone[0]+"</p>";
		}
		if(string[6][0][1])
		sovertone.push("");
	}
	for(var i=0;i<6;++i)
	{
		if(string[8][i][1]==true)
		{
			
			// document.write("<p>"+string[8][i][0]+"</p>");
			sflu.push(string[8][i][0]);
			//document.getElementById("test").innerHTML="<p>vjhg</p>";
		}
		if(string[8][0][1])
		sflu.push("");
	}

	// if(string[0].indexOf("ANY")==-1)
	// {
	// // document.write("<p>Hell0ooo</p>");
		// sshape=string[0];
		// }
		if(string[1]!="")
		{
			// document.write("<p>Hellji0</p>");
			minsize=parseFloat(string[1]);
		}
		if(string[2]!="")
		{
			maxsize=parseFloat(string[2]);
		}
		var checkedValue = null; 
var inputElements = document.getElementsByTagName('input');
for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].className==="messageCheckbox" && 
         inputElements[i].checked){
           checkedValue = inputElements[i].value;
           break;
  }}
		// if(document.getElementById("light").checked)
		// {
			// document.write("<p>hey</p>");
		// }
		if(string[3].indexOf("ANY")==-1)
		{
			
			spolish=string[3];
			//document.getElementById("test").innerHTML="<p>Does this work?"+spolish[0]+"</p>";
		}
		if(string[10].indexOf("ANY")==-1)
		{
			
			ssymm=string[10];
			//document.getElementById("test").innerHTML="<p>Does this work?"+spolish[0]+"</p>";
		}
		// if(!document.getElementById(any).checked)
		// {
			// document.write("<p>almost here</p>");
		// }
		for(var i=0;i<data.length;++i)
		{
			 //document.write("<p>Hey"+sovertone.indexOf(data[i].OVERTONE)+"</p>");
			// document.write("<p>"+!sintensity.indexOf(data[i].INTENSITY)!=-1+"</p>");	// document.write("<p>almost here111111</p>");
			if((sshape.indexOf(data[i].SHAPE)!=-1||sshape.indexOf("")!=-1)
			&&(scolour.indexOf(data[i].COLOR.substring(data[i].COLOR.indexOf("-")+1))!=-1||scolour.indexOf("")!=-1)
			&&spolish.indexOf(data[i].POLISH)!=-1&&ssymm.indexOf(data[i].SYMMETRY)!=-1&&data[i].CTS>minsize-0.01&&data[i].CTS<maxsize+0.01
			&&(sintensity.indexOf(data[i].INTENSITY)!=-1)
			&&((sovertone.indexOf(data[i].OVERTONE)!=-1||sovertone.indexOf("")!=-1)||(sovertone.indexOf("NONE")!=-1&&data[i].OVERTONE=="")||(sovertone.indexOf(data[i].OVERTONE1)!=-1||sovertone.indexOf("")!=-1))
			&&(sclarity.indexOf(data[i].CLARITY)!=-1||sclarity.indexOf("")!=-1)
			&&(sflu.indexOf(data[i].FLUINT)!=-1||sflu.indexOf("")!=-1)
			&&(scert.indexOf(data[i].REPORTLAB)!=-1||scert.indexOf("")!=-1))
			{
				
				{
					if(data[i].COLID.match("C")!=-1&&data[i].COLID!="SINGLE STONE")
				{
					var j;
					//contrast pair item
					for(j=0;j<data.length;++j)
					{
						if(data[j].COLID==data[i].COLID)
						{
							if((scolour.indexOf(data[j].COLOR)!=-1||scolour.indexOf("")!=-1))
							{
								//must be shown
								continue;
							}
							else
							break;
						}
					}
					if(j==data.length)
					subdata.push(data[i]);
				} 
				else
				{
					//document.getElementById("test").innerHTML="<p>TEETY</p>";
				subdata.push(data[i]);
			}
			}}
		}
		dataforgrid=subdata;
		updateSource();
		$("#grid").data("kendoGrid").setDataSource(source);
	//for(i=0;i<subdata.length;++i)
	//{
		//if("".match(data[i].Photo)==null)
		//document.writeln("<tr><td>"+subdata[i].PID+"</td><td>"+subdata[i].PCS+"</td><td>"+subdata[i].CTS+"</td><td>"+subdata[i].DESCRIPTION+"</td><td>"+subdata[i].SHAPE+"</td><td>"+subdata[i].CLARITY+"</td><td>"+subdata[i].POLISH+"</td><td>"+subdata[i].SYMMETRY+"</td><td><img src="+subdata[i].Photo+" alt=\"Retrieving picture \" width= \"200\" height =\"200\"></td></tr>");
		//else
		//document.writeln("<tr><td>"+subdata[i].PID+"</td><td>"+subdata[i].PCS+"</td><td>"+subdata[i].CTS+"</td><td>"+subdata[i].DESCRIPTION+"</td><td>"+subdata[i].SHAPE+"</td><td>"+subdata[i].CLARITY+"</td><td>"+subdata[i].POLISH+"</td><td>"+subdata[i].SYMMETRY+"</td><td>Photo not available</td></tr>");
	//}
}

            	// document.getElementById("test").innerHTML="<p>"+na.PID+"</p>";	
            	
           
        </script>
  
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
							<img class="img1" src="style/images/ncdia.gif" />
						</li>
						<li>
							<img class="img1" src="style/images/gia.JPG" style="margin-left: 30px"/>
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
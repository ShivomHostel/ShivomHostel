<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DolleySholley</title>
<link rel="stylesheet" href="style/style.css">

<script src="https://use.fontawesome.com/3615f85e1a.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!--slider head start-->
	
	<link rel="stylesheet" href="demo/css/prism.css" />
	<link rel="stylesheet" href="dist/css/pignose.parallaxslider.min.css" />
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Raleway);
		html, body {
			position: relative;
			height: 100%;
		}

		#wrapper {
			padding-bottom: 40px;
		}

		.header {
			max-width: 1200px;
			width: 80%;
			margin: 0 auto;
			padding-top: 40px;
			padding-bottom: 40px;
			margin-bottom: 40px;
			border-bottom: 1px solid #efefef;
			text-align: center;
		}

		.header h1 {
			margin-bottom: 20px;
			font-size: 24px;
			font-weight: 400;
			font-family: 'Raleway', 'helvetica', 'sans-serif';
			color: #333333;
		}

		.article {
			max-width: 1200px;
			width: 80%;
			margin: 0 auto;
			margin-top: 40px;
			padding-top: 40px;
			border-top: 1px solid #efefef;
			font-family: 'Raleway', 'helvetica', 'sans-serif';
			text-align: center;
		}

		.article h3 {
			margin-bottom: 40px;
		}

		.article table {
			font-size: 115%;
			text-align: left;
		}

		.article pre {
			font-size: 115%;
		}
		
	</style>
	<script type="text/javascript" src="demo/js/jquery.latest.min.js"></script>
	<script type="text/javascript" src="demo/js/jquery.easing.js"></script>
	<script type="text/javascript" src="demo/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="demo/js/prism.min.js"></script>
	<script type="text/javascript" src="dist/js/pignose.parallaxslider.min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseParallaxSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>
<!-- search city of state ajax script start-->
<script>
function getCity(str)
{
 //object = keyword classname();
   xmlhttp = new XMLHttpRequest();
   
    xmlhttp.onreadystatechange = function()
		  {
            if (xmlhttp.readyState == 4)
			{
                document.getElementById("citydiv").innerHTML = xmlhttp.responseText;
            }
          }	
   
   //make request to server ('method','url',mode);
  xmlhttp.open("GET", "findcity.php?state="+str, true);
  //to send
  xmlhttp.send(null);
}
</script>

<!-- search city of state ajax script end-->
<!--slider head end-->

</head>
<body>
<!--header start-->
<?php include("header.php"); ?>
<!-- header end-->
<!--navbar start-->
<?php include("navbar.php"); ?>

<!--navbar end-->
<!--slider start-->
	<div id="visual" style="width:100%;">
			<div class="slide-visual" >
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img src="demo/img/visual_slide01.jpg" alt="slide image" class="img-responsive" /></li>
					<li><img src="demo/img/visual_slide02.jpg" alt="slide image" class="img-responsive" /></li>
					<li><img src="demo/img/visual_slide03.jpg" alt="slide image" class="img-responsive" /></li>
					<li><img src="demo/img/visual_slide04.jpg" alt="slide image" class="img-responsive" /></li>
					<li><img src="demo/img/visual_slide05.jpg" alt="slide image" class="img-responsive" /></li>
					<li><img src="demo/img/visual_slide06.jpg" alt="slide image" class="img-responsive" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap" >
					<ul class="script-group">
						<li><div class="inner-script"><img src="demo/img/visual_slide_script01.jpg" alt="thumbnail slider image" /></div></li>
						<li><div class="inner-script"><img src="demo/img/visual_slide_script02.jpg" alt="thumbnail slider image" /></div></li>
						<li><div class="inner-script"><img src="demo/img/visual_slide_script03.jpg" alt="thumbnail slider image" /></div></li>
						<li><div class="inner-script"><img src="demo/img/visual_slide_script04.jpg" alt="thumbnail slider image" /></div></li>
						<li><div class="inner-script"><img src="demo/img/visual_slide_script05.jpg" alt="thumbnail slider image" /></div></li>
						<li><div class="inner-script"><img src="demo/img/visual_slide_script06.jpg" alt="thumbnail slider image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="demo/img/btn_prev.png" alt="prev slide" /></a>
						<a href="#" class="btn-play"><img src="demo/img/btn_play.png" alt="start slide" /></a>
						<a href="#" class="btn-pause"><img src="demo/img/btn_pause.png" alt="pause slide" /></a>
						<a href="#" class="btn-next"><img src="demo/img/btn_next.png" alt="next slide" /></a>
					</div>
				</div>
			</div>
		</div>
		
		
		
	</div>
   <!--slider end-->
    <!--one step START-->
    <div class="container">
    <div class="col-md-12">
    <h1 class="text-align"><span style="color:orange;">ONE</span> STOP FITNESS SOLUTION</h1>
    <h4 class="text-align">DolleySholley.com is unique innovative for fitness freaks</h4>
    </div>
    </div>
    <!--one step END-->
    <!--two step start-->
    <div class="container-fluid">
    <div class="col-md-4"><img src="images/female.jpg" class="img-responsive">
    <div class="write-on-photo" ><h4>WINTER SEASON OFFER</h4>
    <h3>Flat 10% Discount</h3>
    <div class="my_outter"><input type="submit" class="my_button" value="FEMALE FITNESS"></div>
    </div>
    </div>
    
<div class="col-md-4 new-gd-middle">
				<div class="new-levis">
					<div class="mid-img">
						<img src="images/goldsgym.gif" class="img-responsive" alt=" ">
					</div>
					<div class="mid-text">
						<h4>up to 40% <span>off</span></h4>
						<a class="hvr-outline-out button2 btn-warning" href="product.html">Join now </a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-levis" style="margin-top:20px;">
					<div class="mid-text">
						<h4>up to 10% <span>off</span></h4>
						<a class="hvr-outline-out button2 btn-warning" href="product.html">Join now </a>
					</div>
					<div class="mid-img ">
						<img src="images/powerhouse.png" class="img-responsive" alt=" ">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
    
    <div class="col-md-4"><img src="images/male.jpg" class="img-responsive">
       <div class="write-on-photo" ><h4>WINTER SEASON OFFER</h4>
    <h3>Flat 5% Discount</h3>
     <div class="my_outter"><input type="submit" class="my_button" value="MALE FITNESS"></div>
    
    </div>
    </div>
    <!--two step end-->
    
   <!-- footer start-->
   <?php include ("footer.php"); ?>
   <!-- footer end--> 
   <div class="container">
   <div class="row">
   <div class="col-md-6">
  <a href="https://www.000webhost.com/" onClick="this.href='https://www.000webhost.com/966240.html'"  target="_blank"><img src="https://www.000webhost.com/images/banners/600x400/banner1.gif" alt="Web hosting" width="468" height="260" border="0" /></a>
   </div>
     <div class="col-md-6">
  <a href="https://www.000webhost.com/" onClick="this.href='https://www.000webhost.com/966240.html'"  target="_blank"><img src="https://www.000webhost.com/images/banners/600x400/banner1.gif" alt="Web hosting" width="468" height="260" border="0" /></a>
   </div>
   </div>
   </div>
 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>

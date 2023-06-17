<?php
session_start();
if(!isset($_SESSION['email']))
{header("location:fitness-signup1.php");}

$email=$_SESSION['email'];

?>

<?php
require("connection.php");
 $qry="select * from fitness_signup where email='$email';";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);

$concern=$row["concern_person_name"];
$address=$row["address"];
$locality=$row["locality"];
$landmark=$row["landmark"];
$city=$row["city"];
$state=$row["state"];
$email=$row["email"];
$mobile=$row["mobile"];
$landline=$row["landline"];
$website=$row["website"];
$fcn=$row["fitness_center_name"];
$floor=$row["floor_area"];
$established=$row["established"];
$nom=$row["no_of_machine"];
$filename=$row["logo"];
$description=$row["description"];

mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>fitness profile</title>
<link rel="stylesheet" href="style/style.css">

<script src="https://use.fontawesome.com/3615f85e1a.js"></script>
<script src="bootstrap-3.3.7-dist/css/jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7-dist/css/jquery-1.11.2.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="bootstrap-3.3.7-dist/css/bootstrap.css">

<link rel="stylesheet" href="style1/style1.css">


<!--gym images slider scripts  and code start><-->
<script src="bootstrap-3.3.7-dist/sliderJS/jquery-1.11.3.min.js"></script>
<script src="bootstrap-3.3.7-dist/sliderJS/jssor.slider-22.2.11.mini.js"></script>
<script>
		$(function() {
		/**
		*
		* This script will active Triple level multi drop-down menus in Bootstrap 3.*
		*/
		$('li.dropdown-submenu').on('click', function(event) {
			event.stopPropagation(); 
			if ($(this).hasClass('open')){
				$(this).removeClass('open');
			}else{
				$('li.dropdown-submenu').removeClass('open');
				$(this).addClass('open');
			}
		});
		});
	</script>
	
	<script>
		$(function() {
			$(".dropdown").hover(
				function(){ $(this).addClass('open') },
				function(){ $(this).removeClass('open') }
			);
		});
	</script>
	
	<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider loading skin oval css */

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
	<style>
		.abc{background-color: #DD4814;width: 100%;height: 100%;}
		/* Sticky Social Icons */
		.sticky-container{ padding:0px; margin:0px; position:fixed; right:-130px;top:40px	; width:210px; z-index: 1100;}
		.sticky li{list-style-type:none;background-color:#e1ebf2;color:#efefef;height:43px;padding:0px;margin:0px 0px 1px 0px; -webkit-transition:all 0.25s ease-in-out;-moz-transition:all 0.25s ease-in-out;-o-transition:all 0.25s ease-in-out; transition:all 0.25s ease-in-out; cursor:pointer;}
		.sticky li:hover{margin-left:-68px;}
		.sticky li img{float:left;margin:5px 4px;margin-right:5px;}
		.sticky li p{padding-top:5px;margin:0px;line-height:16px; font-size:11px;}
		.sticky li p a{ text-decoration:none; color:#2C3539;}
		.sticky li p a:hover{text-decoration:underline;}
		/* Sticky Social Icons */
	</style>

<!--gym images slider scripts  and code end><-->
</head>

<body>
<!-- header start-->
<div class="container-fluid border">
<div class="col-md-4 col-sm-4 col-xs-4 border text-color text-align"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; &nbsp;<a href="http://www.dolleysholley.com">Free and Fast Searching</a></div>
<div class="col-md-4 col-sm-4 col-xs-4 border text-color text-align"><i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp; &nbsp;List your Fitness Center Here
<div class="clearfix"></div>
</div>
<!-- drop down start-->
<div class="col-md-4 col-sm-4 col-xs-4  text-color text-align">
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $email; ?> <span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="change_psw.php">Change Password <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
            <li class="divider"></li>
            <li><a href="#">Favourites Snippets <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
      
</div>
<!-- dropdown end-->
</div>
<div class="container-fluid border">
<div class="col-md-4"><img src="images/logo.png" class=" img-responsive" alt="dolleysholley.com" title="dolleysholley.com"></div>
<div class="col-md-4" style=" margin-top:20px;">

	
              <form class="form-group">
              <input type="search" class="form-control" placeholder="search here" style="padding:28px;"/>
              </form>
     </div>
<div class="col-md-4">
<span style="color:orange;"><i class="fa fa-facebook-square fa-5x" aria-hidden="true"></i></span>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<span style="color:orange;"><i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span style="color:orange;"><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
</div> 
<!-- header end-->
<!--navbar start-->

 
<!--navbar end-->
<!-- profile page start-->
<div class="container">

<div class="col-md-4 border">
<div class="text-align border" > <h3 style="color:orange;">Contact Details</h3></div>
<div><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Concern Person : <label class="text-align"><?php echo $concern; ?></div></label>
<div><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Address : <label class="text-align"><?php echo $address; ?></div></label>
<div><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Locality  : <label class="text-align"><?php echo $locality; ?></div></label>
<div><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Landmark : <label class="text-align"><?php echo $landmark; ?></div></label>
<div><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;City : <label class="text-align"><?php echo $city; ?></div></label>
<div><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;State : <label class="text-align"><?php echo $state; ?></div></label>
<div><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Email : <label class="text-align"><?php echo $email; ?></div></label>
<div><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Mobile : <label class="text-align"><?php echo $mobile; ?></div></label>
<div><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Landliine NO. : <label class="text-align"><?php echo $landline; ?></div></label>
<div><i class="fa fa-link" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Website :<label class="text-align"><?php echo $website; ?></div></label>
<div class="clearfix"></div>
</div>

<div class="col-md-8 border">
<div class="text-align " style="color:orange; background:#C8C6C6;"><h3><?php echo $fcn; ?></h3></div>


<!--gym images slider start><-->
<section id="cen">
<!-- /carousel -->

<div style="border:3px solid black;">

 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:745px;height:330px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="img/oval.svg" />
			
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:745px;height:330px;overflow:hidden;">
            <div>
                <img data-u="image" src="gg2.jpg" />
				
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
            <div>
                <img data-u="image" src="gg3.jpg" />
				
            </div>
            <div>
                <img data-u="image" src="gymimg1.jpg" />
				
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->

</div>
<!-- /carousel -->

</section>

<!--gym images slider end><-->

<div class="clearfix"></div>
<div class="col-md-5 border" style="width:500px;">
<h3 style="color:orange;"><?php echo $fcn; ?></h3>
<div><?php echo $description; ?></div>
</div>

<div class="col-md-3 border" style="">
<div class="text-align " style="color:orange; background:#C8C6C6;">
<h3>Overview</h3></div>

<div><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;Rating:</div>
<div><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;NO Of Machine:<label><?php echo $nom; ?></label></div>
<div><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;Floor Area:<label><?php echo $floor; ?></label></div>
<div><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;Established:<label><?php echo $established; ?></label></div>
</div>
</div>
<div class="clearfix"></div>
</div>

<div class="container">
<div class="row">
<div class="col-md-6">
<img src="upload/<?php echo $filename; ?>" alt="logo" title="logo" class="img-responsive img-circle img-thumbnail">
</div>
<div class="col-md-6">
<img src="upload/<?php echo $filename; ?>" alt="logo" title="logo" class="img-responsive img-circle img-thumbnail">
</div>
</div>
</div>


 <!-- footer start-->
     <?php include("footer.php");?>
       <!-- footer end-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>



</body>
</html>
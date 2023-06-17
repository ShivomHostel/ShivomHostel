
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Listing</title>
<link rel="stylesheet" href="style/style.css">
<script src="https://use.fontawesome.com/3615f85e1a.js"></script>
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


</head>

<body>
<!-- header start-->
<?php include("header.php"); ?>
<!-- header end-->
<!--navbar start-->

 
<!--navbar end-->
<div class="container">
<div class="row">
<div class="col-md-3" style="border:#000000 1px solid; margin-top:10px">
<h4 style="color:#DF0509;">Sort By</h4>
<form>
<div class="form-group">
<label for="Sort By"></label>
<input type="radio"  name="gender" value="male">&nbsp;&nbsp;Name - a to z <br>
<input type="radio" name="gender"  value="female">&nbsp;&nbsp;Name - z to a <br>
<input type="radio"  name="gender" value="male">&nbsp;&nbsp;Price - low to high<br>
<input type="radio" name="gender"  value="female">&nbsp;&nbsp;Popularity <br>
</div>
<h4>Monthly Budget </h4>

<div class="form-group">
<label for="Monthly Budget"></label>
<input type="radio"  name="gender" value="male">&nbsp;&nbsp;Clear<br>
<input type="radio" name="gender"  value="female">&nbsp;&nbsp;Less than 500<br>
<input type="radio"  name="gender" value="male">&nbsp;&nbsp;500-1000 <br>
<input type="radio" name="gender"  value="female">&nbsp;&nbsp;more than 1000<br>
</div>

<h4>Location </h4>
<div class="form-group">
<label for="dob"></label>

<input type="checkbox" name="bhopal">&nbsp;&nbsp;Bhopal<br>
<input type="checkbox" name="indore">&nbsp;&nbsp;Indore<br>
<input type="checkbox" name="jabalpur">&nbsp;&nbsp;Jabalpur<br>
<input type="checkbox" name="ujjain">&nbsp;&nbsp;Ujjain<br>
</div>
</form>
</div>

<div class="col-md-5" >
<?php
require("connection.php");
$qry= "select *from fitness_signup;";
$result= mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result))
{
	$fcn=$row["fitness_center_name"];
	$mobile=$row["mobile"];
	$city=$row["city"];
	$address=$row["address"];
     $email=$row["email"];

?>


<div class=" col-md-12 col-xs-12 col-sm-3" style="border:black 1px solid; margin-top:10px">
<h3 style="color:#DF0509;text-align:center"><?php echo $fcn; ?></h3>
<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $address; ?>
<?php echo $city; ?>
<br>

<i class="fa fa-money" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $mobile; ?>
<hr>
<a href="gymprofile.php?email=<?php echo  $email; ?>">More Details</a> &nbsp; &nbsp; &nbsp;<a href="#">View Plans</a>
</div>

<?php
	
}
mysqli_close($con);
?>

</div>
<div class="col-md-4" style="border:#000000 1px solid; margin-top:10px">
<h4 style="text-align:center">PROFESSIONALS NEARBY YOU</h4>
<img src="images/adv.jpg" width="350px" height="250px">
<a href="https://www.000webhost.com/" onClick="this.href='https://www.000webhost.com/966240.html'"  target="_blank"><img src="https://www.000webhost.com/images/banners/160x600/banner1.gif" alt="Web hosting" width="468" height="800" border="0" /></a>
</div>
</div>
</div>

 <!-- footer start-->
       <?php  include("footer.php");?>
       <!--footer end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>
</html>
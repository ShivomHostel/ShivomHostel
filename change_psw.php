<?php
session_start();
if(!isset($_SESSION['email']))
{header("location:fitness-signup1.php");}

$email=$_SESSION['email'];

?>
<?php

require("connection.php");
$qry= "SELECT password from fitness_signup WHERE email='$email';";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
$dbpsw= $row["password"];
mysqli_close($con);

//psw logic
if(isset($_POST["changepsw"]))
{
$oldpsw= $_POST["oldpsw"];
$newpsw= $_POST["newpsw"];
$conpsw= $_POST["conpsw"];

if($dbpsw==$oldpsw)
{
	if($newpsw==$conpsw)
	{
		require("connection.php");
		$qry="UPDATE fitness_signup SET password='$newpsw' WHERE email='$email';";
		$result= mysqli_query($con,$qry);
		if($result==true)
		{
			header("location:fitness-signup1.php");
		}
		else
		{
			echo "password not changed..!!!!";
		}
		mysqli_close($con);
	}
	else
	{
		echo "new password and confiremed password are not match";
	}
}
else
{
echo	"old password wrong";
}
}
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change password </title>
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
<div class="container-fluid border">
<div class="col-md-4 border text-color text-align"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; &nbsp;<a href="http://www.dolleysholley.com">Free and Fast Searching</a></div>
<div class="col-md-4 border text-color text-align"><i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp; &nbsp;List your Fitness Center Here</div>
<!-- drop down start-->
<div class="col-md-4 border text-color text-align">
      
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

<div class="clearfix"></div>

<!-- navbar start-->
<?php include("navbar.php")?>

<!-- navbar close-->
<div class="clearfix"></div>
 <div class="col-md-12 border">
    <h3 style="color:orange; text-align:center";> CHANGE YOUR PASSWORD HERE..!!</h3>
    <hr>
<form class="form-horizontal" method="post" action="#">
<fieldset>
    

<!--old Password input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Old Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="oldpsw" type="password"  class="form-control input-md">
    
  </div>
</div>

<!-- new password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">New Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="newpsw" type="password"  class="form-control input-md">
    
  </div>
</div>

<!-- confoRm password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confrom Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="conpsw" type="password"  class="form-control input-md">
    
  </div>
</div>



   </fieldset>
<div align="center"><input type="submit" name="changepsw" value="Change Password" class="btn btn-warning" style="width:200px">
</div>

    
    </form>
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
<?php session_start();?>
<?php
if(isset($_POST["LOGIN"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
require("connection.php");

	$qry="SELECT * FROM fitness_signup WHERE email='$email' AND password='$password';";
	$result = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($result);
	
	if(!$row)
	{
		echo "wrong id password";
	}
	else
	{
      
	  $_SESSION["email"] = $email;
		header("location:fitness-profile.php");
	}
}
?>



<?php
     if(isset($_POST["CONTINUE"]))
    {
	$fcn=$_POST["fcn"];
    $email=$_POST["email"];
    $reciept=$_POST["reciept"];
    $password=$_POST["password"];
    $mobile=$_POST["mobile"];
    $pincode=$_POST["pincode"];
   $con= mysqli_connect("localhost","root","","dolleysholley");
  
  $qry="INSERT INTO fitness_signup(reciept_no,mobile,email,password,pincode,fitness_center_name) VALUES('$reciept','$mobile','$email','$password','$pincode','$fcn')";
if(mysqli_query($con,$qry))
{
   $lastid = mysqli_insert_id($con);
	mysqli_close($con);?>
    <script>window.location.href='fitness-signup2.php?lastid=<?php echo $lastid;?>'</script>
    <?php
}
else
{
	mysqli_close($con);
	echo "Signup Failed";
	
}
}
  ?>
    

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sign up form</title>
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
 <!--one step START-->
    <div class="container">
    <div class="col-md-12">
    <h1 class="text-align"><span style="color:orange;">ONE</span> STOP FITNESS SOLUTION</h1>
    <h4 class="text-align">DolleySholley.com is unique innovative for fitness freaks</h4>
    </div>
    </div>
    <!--one step END-->
    <div class="container-fluid border">
    <!--signup start-->
    <div class="col-md-6 border">
    <h3 style="color:orange; text-align:center";>FITNESS CENTER SIGNUP</h3>
    <form class="form-horizontal" method="post" action="#">
<fieldset>

<!-- Form Name -->
<hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-5">
  <input id="textinput" name="email" type="text" placeholder="example@gmail.com" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="password" type="password" placeholder="*********" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mobile</label>  
  <div class="col-md-5">
  <input id="textinput" name="mobile" type="text" placeholder="+91" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fitness center Name</label>  
  <div class="col-md-5">
  <input id="textinput" name="fcn" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Pin code</label>  
  <div class="col-md-5">
  <input id="textinput" name="pincode" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Receipt Number</label>  
  <div class="col-md-5">
  <input id="textinput" name="reciept" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
</fieldset>
<div><input type="submit" name="CONTINUE" value="CONTINUE" class="btn btn-warning" style="width:200px">
</div>
</form>

    </div>
    <!--signup end-->
    <!--log in start-->
    <div class="col-md-6 border">
    <h3 style="color:orange; text-align:center";>LOGIN WITH YOUR ACCOUNT</h3>
    <hr>
<form class="form-horizontal" method="post" action="#">
<fieldset>
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-5">
  <input id="textinput" name="email" type="text" placeholder="example@gmail.com" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="password" type="password" placeholder="*********" class="form-control input-md">
    
  </div>
</div>

   </fieldset>
<div><input type="submit" name="LOGIN" value="LOGIN" class="btn btn-warning" style="width:200px">
</div>

    
    </form>
    </div>
    
    
 
    <!--log in end-->
    
     </div>
     <!-- footer start-->
       <?php  include("footer.php");?>
       <!--footer end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


</body>
</html>

<?php
     if(isset($_POST["continue"]))
    {
		$dob=$_POST["dob"];
    $email=$_POST["email"];
    $name=$_POST["name"];
    $password=$_POST["password"];
    $mobile=$_POST["mobile"];
    $pincode=$_POST["pincode"];
   $con= mysqli_connect("localhost","root","","dolleysholley");
mysqli_query($con,"INSERT INTO user_signup(name,mobile,email,password,pincode,dob) VALUES('$name','$mobile','$email','$password','$pincode','$dob')");
mysqli_close($con);

    
    header("location:signup-step2.html");
	
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

</head>

<body>
<!-- header start-->
<?php include("header.php"); ?>
<!--header end-->
<!--navbar start-->
<?php include("navbar.php"); ?>

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
    <h3 style="color:orange; text-align:center"; >SIGN IN WITH YOUR ACCOUNT</h3>
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
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-5">
  <input id="textinput" name="name" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Pin code</label>  
  <div class="col-md-5">
  <input id="textinput" name="pincode" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<!--Date of birth start-->
 <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" name="dob"  class="form-control input-md">
                    </div>
                </div>

<!--date of birth end-->
<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="-0">
      <input type="radio" name="" id="-0" value="1" checked="checked">
      Male
    </label>
	</div>
  <div class="radio">
    <label for="-1">
      <input type="radio" name="" id="-1" value="2">
      Female
    </label>
	</div>
  </div>
</div>

</fieldset>
<input type="submit" name="continue" value="continue" class="btn btn-warning" style="width:200px" >
</form>

    </div>
    <!--data insert in database-->
    
    <!--data inserts top-->
    <!--signup end-->
    <!--log in start-->
    <div class="col-md-6 border">
    <h3 style="color:orange; text-align:center";>LOGIN WITH YOUR ACCOUNT</h3>
    <hr>
<form class="form-horizontal">
<fieldset>
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="example@gmail.com" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="*********" class="form-control input-md">
    
  </div>
</div>
   </fieldset>
 <div>
 <input type="submit" name="userlogin" value="Login" class="btn btn-warning" style="width:200px;">
 </div>
    
    </form>
    </div>
    
    
 
    <!--log in end-->
    
     </div>
     
     <!--footer start-->
     <?php include("footer.php"); ?>
     <!--footer end-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


</body>
</html>
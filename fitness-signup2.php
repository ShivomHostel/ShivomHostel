<?php
$lastid = $_GET["lastid"];
     if(isset($_POST["CONTINUE"]))
    {
	$cpn=$_POST["cpn"];
    $city=$_POST["city"];
    $landmark=$_POST["landmark"];
    $locality=$_POST["locality"];
    $nom=$_POST["nom"];
    $address=$_POST["address"];
    $established=$_POST["established"];
    $floor=$_POST["floor"];
    $landline=$_POST["landline"];
    $website=$_POST["website"];
	$state  = $_POST["state"];
	$sex  = $_POST["sex"];
	$lastid  = $_POST["lastid"];
	$filename=rand().$_FILES["logo"]["name"];
	$filesize=$_FILES["logo"]["size"];
	$filetmp=$_FILES["logo"]["tmp_name"];
	move_uploaded_file($filetmp,"upload/".$filename);
					
   require("connection.php");

 $qry = "UPDATE fitness_signup SET concern_person_name='$cpn',city='$city',landmark='$landmark',locality='$locality',no_of_machine='$nom',address='$address',established='$established',floor_area='$floor',landline='$landline',website='$website',state='$state',type_of_center='$sex',logo='$filename' WHERE id='$lastid'";
if(mysqli_query($con,$qry))
{
	mysqli_close($con);
	?>
   <script>window.location.href='fitness-signup3.php?lastid=<?php echo $lastid;?>'</script>
    <?php
}
else
{
	mysqli_close($con);
	echo "Profile not updated";
	
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
    <!--step second-->
   <div class="container">
   <h3><span style="color:orange;">COMPLETE YOUR FITNESS CENTER</span></h3>
   <div class="col-md-6">
   
   <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
   <input type="text" value="<?php echo $_GET["lastid"];?>" name="lastid">
<fieldset>

<!-- Form Name -->
<hr>

<!-- Text input-->
<div class="form-group">
<h4>Concern Person Name :</h4>
  <input id="textinput" name="cpn" style="width:470px;" type="text" placeholder="Concern Person Name" class="form-control input-md">
    
  </div>
    <!-- Select Multiple -->

<div class="form-group">
<h4>Type of fitness center</h4>
<label for="tofc"> </label>
<select class="form-control" name="sex">
<option value="">Type Of Fitness Center</option>
<option value="male">Male Only</option>
<option value="female">Female Only</option>
<option value="unisex">Unisex</option>
</select>
</div>

<div class="form-group">
<h4>Address :</h4>
  <input id="textinput" name="address" type="text" style="width:230px;" placeholder="Address" class="form-control input-md">
    
  </div>
  <!-- Select state -->

<div class="form-group">
<h4>State</h4>
<label for="state"> </label>
<select class="form-control" name="state">
<option value="">select your state</option>
<option value="mp">Madhyapradesh</option>
<option value="delhi">Delhi</option>
<option value="up">Uttarpradesh</option>
</select>
</div>

<div class="form-group">
<h4>City :</h4>
  <input id="textinput" name="city" type="text" style="width:230px;" placeholder="City" class="form-control input-md">
  <h4>Locality :</h4>
  <input type="text" name="locality" id="textinput" style="width:230px;" placeholder="Locality" class="form-control input-md">
  <h4>LandMark :</h4>
  <input type="text" name="landmark" id="textinput" style="width:230px;" placeholder="Locality" class="form-control input-md">
    
  </div>
    



</div>
<div class="col-md-6">
<hr>
<div class="form-group">
<h4>Established:</h4>
  <input id="textinput" name="established" type="text" style="width:230px;" placeholder="Year" class="form-control input-md">
  <h4>Floor Area (In Square feet):</h4>
  <input type="text" name="floor" id="textinput" style="width:230px;" placeholder="Floor Area" class="form-control input-md">
  <h4>Number of Machines:</h4>
  <input type="text" name="nom" id="textinput" style="width:230px;" placeholder="Number of Machines" class="form-control input-md">
   <h4>Landline :</h4>
  <input type="text" name="landline" id="textinput" style="width:230px;" placeholder="Landline" class="form-control input-md">
   <h4>Website:</h4>
  <input type="text" name="website" id="textinput" style="width:230px;" placeholder="Website" class="form-control input-md">
    
  </div>
<!--image -->
<h4>Logo :</h4>
<img width="200" class="iimg-responsive" src="images/no.png">
<input type="file" name="logo" accept="image">

 <div><input type="submit" name="CONTINUE" value="CONTINUE" class="btn btn-warning" style="width:200px">
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
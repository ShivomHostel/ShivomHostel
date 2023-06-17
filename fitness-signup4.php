<?php
$lastid = $_GET["lastid"];
if(isset($_POST["submit"])) 
{
	$lastid  = $_POST["lastid"];
	$tname= $_POST["tname"];
	$gender=$_POST["gender"];
require("connection.php");
 $qry= "INSERT INTO `dolleysholley`.`trainer` ( `gymid`, `name`, `gender`) VALUES ( '$lastid', '$tname', '$gender');";
	mysqli_query($con, $qry);
	
$sname=$_POST["sname"];
$from=$_POST["from"];
$lastid  = $_POST["lastid"];
 $qry="INSERT INTO `dolleysholley`.`timings` (`gymid`, `slot-name`, `time-from`) VALUES ('$lastid', '$sname', '$from');";
mysqli_query($con,$qry);

$sns=$_POST["sns"];
$link=$_POST["link"];
$lastid  = $_POST["lastid"];
 $qry="INSERT INTO `dolleysholley`.`social_link` (`social_name`, `social_link`, `gym_id`) VALUES ( '$sns', '$link', '$lastid');";
mysqli_query($con,$qry);

$months=$_POST["months"];
$price=$_POST["price"];
$lastid  = $_POST["lastid"];
 $qry="INSERT INTO `dolleysholley`.`fee_plan` (`gymid`, `no_of_months`, `price`) VALUES ('$lastid', '$months', '$price');";
mysqli_query($con,$qry);

$offer=$_POST["offer"];
$lastid  = $_POST["lastid"];
	$filename=rand().$_FILES["pic"]["name"];
	$filesize=$_FILES["pic"]["size"];
	$filetmp=$_FILES["pic"]["tmp_name"];
	move_uploaded_file($filetmp,"upload/".$filename);
					
    $qry="INSERT INTO `dolleysholley`.`offer` (`gymid`, `text2`, `photo`) VALUES ('$lastid', '$offer', '$filename');";
   mysqli_query($con,$qry);
   
   
$achievements=$_POST["achievements"];
$lastid  = $_POST["lastid"];
	$filename=rand().$_FILES["apic"]["name"];
	$filesize=$_FILES["apic"]["size"];
	$filetmp=$_FILES["apic"]["tmp_name"];
	move_uploaded_file($filetmp,"upload/".$filename);
					
    $qry="INSERT INTO `dolleysholley`.`achievment` (`gymid`, `text1`, `photo`) VALUES ( '$lastid', '$achievements', '$filename');";
  mysqli_query($con,$qry);
   
   mysqli_close($con);

?>
<script>window.location.href='fitness-signup1.php'</script>
<?php
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
<!--header start-->
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
      <form action="#" method="post" enctype="multipart/form-data">
   <div class="col-md-6">

   <input type="text" value="<?php echo $_GET["lastid"];?>" name="lastid">
<div style="border:#ECECEC 1px solid">
  <h4><strong>Achievments:</strong></h4>
<div class="col-md-12">
<div class="col-sm-1"></div>
<div class="col-sm-5"><span style="color:orange;">Achievements Text :</span></div>
<div class="col-sm-6"><span style="color:orange;">Photos :</span> </div>
</div>

<div class="row" id="items">
<div class="beta">
<div class="col-md-12">
<div class="col-sm-1"><input type="checkbox" name="index[]"></div>
<div class="col-sm-5"><input type="text" name="achievements"></div>
<div class="col-sm-6"><input name="apic" type="file" accept="image/*"></div>
</div>
</div></div>

<div class="col-md-12">
<button type="button" class="btn-xs btn-primary" onclick="addMore()">Add More <i class="fa fa-plus-circle"></i></button>
<button type="button" class="btn-xs btn-danger" onclick="deleteRow()">Delete <i class="fa fa-trash"></i></button>
</div>
</div>   
   
   
   <div style="border:#ECECEC 1px solid; margin-top:25px;">
  <h4><strong>Offers:</strong></h4>
<div class="col-md-12">
<div class="col-sm-1"></div>
<div class="col-sm-5"><span style="color:orange;">Offer Details :</span></div>
<div class="col-sm-6"><span style="color:orange;">Photos : </span></div>
</div>

<div class="row" id="items">
<div class="beta">
<div class="col-md-12">
<div class="col-sm-1"><input type="checkbox" name="index[]"></div>
<div class="col-sm-5"><input type="text" name="offer"></div>
<div class="col-sm-6"><input name="pic" type="file" accept="image/*"></div>
</div>
</div></div>

<div class="col-md-12">
<button type="button" class="btn-xs btn-primary" onclick="addMore()">Add More <i class="fa fa-plus-circle"></i></button>
<button type="button" class="btn-xs btn-danger" onclick="deleteRow()">Delete <i class="fa fa-trash"></i></button>
</div>
</div>
   

 <div style="border:#ECECEC 1px solid; margin-top:25px;">
  <h4><strong>Fee Plan</strong></h4>
<div class="col-md-12">
<div class="col-sm-1"></div>
<div class="col-sm-5"><span style="color:orange;">No. Of Months :</span></div>
<div class="col-sm-6"><span style="color:orange;">Price:</span> </div>

</div>
<div class="row" id="items">
<div class="beta">
<div class="col-md-12">
<div class="col-sm-1"><input type="checkbox" name="index[]"></div>
<div class="col-sm-5"><input type="text" name="months"></div>
<div class="col-sm-6"><input name="price" type="text" ></div>

</div>
</div></div>
<div class="col-md-12">
<button type="button" class="btn-xs btn-primary" onclick="addMore()">Add More <i class="fa fa-plus-circle"></i></button>
<button type="button" class="btn-xs btn-danger" onclick="deleteRow()">Delete <i class="fa fa-trash"></i></button>
</div>
</div>
<div class="clearfix"></div> 
</div> 
   
  
   
   
   <div class="col-md-6">
   
    <div style="border:#ECECEC 1px solid">
  <h4><strong>Social Networking Sites:</strong></h4>
<div class="col-md-12">
<div class="col-sm-1"></div>
<div class="col-sm-5"><span style="color:orange;">Social Networking Sites :</span></div>
<div class="col-sm-6"><span style="color:orange;">Link :</span> </div>
</div>
<div class="row" id="items">
<div class="beta">
<div class="col-md-12">
<div class="col-sm-1"><input type="checkbox" name="index[]"></div>
<div class="col-sm-5"><input type="text" name="sns"></div>
<div class="col-sm-6"><input name="link" type="text" ></div>
</div></div>
<div class="col-md-12">
<button type="button" class="btn-xs btn-primary" onclick="addMore()">Add More <i class="fa fa-plus-circle"></i></button>
<button type="button" class="btn-xs btn-danger" onclick="deleteRow()">Delete <i class="fa fa-trash"></i></button>
</div>
</div>


</div>

<div style="border:#ECECEC 1px solid; margin-top:25px;">
  <h4><strong>Timing:</strong></h4>
<div class="col-md-12">
<div class="col-sm-1"></div>
<div class="col-sm-5"><span style="color:orange;">Slot Name :</span></div>
<div class="col-sm-6"><span style="color:orange;">From: </span></div>

</div>
<div class="row" id="items">
<div class="beta">
<div class="col-md-12">
<div class="col-sm-1"><input type="checkbox" name="index[]"></div>
<div class="col-sm-5"><input type="text" name="sname"></div>
<div class="col-sm-6"><input name="from" type="text"> </div>

</div>
</div></div>
<div class="col-md-12">
<button type="button" class="btn-xs btn-primary" onclick="addMore()">Add More <i class="fa fa-plus-circle"></i></button>
<button type="button" class="btn-xs btn-danger" onclick="deleteRow()">Delete <i class="fa fa-trash"></i></button>
</div>
</div>



<div style="border:#ECECEC 1px solid; margin-top:25px;">
  <h4><strong>Trainers:</strong></h4>
<div class="col-md-12">
<div class="col-sm-1"></div>
<div class="col-sm-5"><span style="color:orange;">Trainer Name :</span></div>
<div class="col-sm-6"><span style="color:orange;">Gender:</span> </div>
</div>
<div class="row" id="items">
<div class="beta">
<div class="col-md-12">
<div class="col-sm-1"><input type="checkbox" name="index[]"></div>
<div class="col-sm-5"><input type="text" name="tname"></div>
<div class="col-sm-6"><input name="gender" type="text"> </div>
</div>
</div>
<div class="col-md-12">
<button type="button" class="btn-xs btn-primary" onclick="addMore()">Add More <i class="fa fa-plus-circle"></i></button>
<button type="button" class="btn-xs btn-danger" onclick="deleteRow()">Delete <i class="fa fa-trash"></i></button>
</div>
</div>
</div>

    <div><input type="submit" name="submit" value="COMPLETE SIGNUP" class="btn btn-block btn-lg btn-warning"  style="width:380px; "></div>

<div class="clearfix"></div>


</div>
</form>
</div>

<!--footer start-->
<?php include("footer.php"); ?>
<!-- footer end-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>
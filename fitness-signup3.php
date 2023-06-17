<?php
$lastid = $_GET["lastid"];


if(isset($_POST["CONTINUE3"])) 
{
		$lastid  = $_POST["lastid"];
	$description=$_POST["description"];
	require("connection.php");
	 $qry="UPDATE fitness_signup SET description='$description' WHERE id='$lastid';"; 
	mysqli_query($con,$qry);


	
	if(isset($_POST["ac"]))
	{$ac="Yes";}
	else{$ac ="No";}
	
if(isset($_POST["power-backup"]))
	{$powerbackup="Yes";}
	else{$powerbackup="No";}
	
if(isset($_POST["wifi"]))
	{ $wifi="Yes";}
	else{$wifi="No";}
	
if(isset($_POST["card-payment"]))
	{$cardpayment="Yes";}
	else{$cardpayment="No";}
	
if(isset($_POST["music"]))
	{$music="Yes";}
	else{$music="No";}
	
if(isset($_POST["parking"]))
	{$parking="Yes";}
	else{$parking="No";}

if(isset($_POST["security"]))
	{$security="Yes";}
	else{$security="No";}
	
if(isset($_POST["cctv"]))
	{$cctv="Yes";}
	else{$cctv="No";}

	$lastid  = $_POST["lastid"];	
require("connection.php");
	$qry="INSERT INTO `facilities` (`gymid`,`air Conditioner`, `power backup`, `wifi`, `card payment`, `music`, `parking`, `security`, `cctv`) VALUES ($lastid,'$ac', '$powerbackup', '$wifi', '$cardpayment', '$music', '$parking', '$security', '$cctv');";
	mysqli_query($con,$qry);

	
	if(isset($_POST["personal-trainer"]))
	{$personaltrainer="Yes";}
	else{$personaltrainer ="No";}

if(isset($_POST["nutritionist"]))
	{$nutritionist="Yes";}
	else{$nutritionist ="No";}
	
	if(isset($_POST["athelitic-club"]))
	{$atheliticclub="Yes";}
	else{$atheliticclub ="No";}
	
	
		if(isset($_POST["punch-bags"]))
	{$punchbags="Yes";}
	else{$punchbags ="No";}
	
	
	if(isset($_POST["boxing-ring"]))
	{$boxingring="Yes";}
	else{$boxingring ="No";}
	
	
	if(isset($_POST["doc"]))
	{$doc="Yes";}
	else{$doc ="No";}

	$lastid  = $_POST["lastid"];
require("connection.php");
	$qry="INSERT INTO `dolleysholley`.`highlights` (`gymid`,`personal-trainer`, `nutritionist`, `athelitic-club`, `punch-bags`, `boxing-ring`, `dr-on-call`) VALUES ($lastid,'$personaltrainer', '$nutritionist', '$atheliticclub', '$punchbags', '$boxingring', '$doc');";
	mysqli_query($con,$qry);

	
	if(isset($_POST["pet"]))
	{$pet="Yes";}
	else{$pet ="No";}
	
	
	if(isset($_POST["canteen"]))
	{$canteen="Yes";}
	else{$canteen ="No";}
	
		if(isset($_POST["lounge"]))
	{$lounge="Yes";}
	else{$lounge ="No";}
	
		if(isset($_POST["swimming"]))
	{$swimming="Yes";}
	else{$swimming ="No";}
	
	
		if(isset($_POST["shower"]))
	{$shower="Yes";}
	else{$shower ="No";}
	
		if(isset($_POST["locker"]))
	{$locker="Yes";}
	else{$locker ="No";}
	
		if(isset($_POST["steam-room"]))
	{$steamroom="Yes";}
	else{$steamroom ="No";}
	
		if(isset($_POST["changing-room"]))
	{$changingroom="Yes";}
	else{$changingroom ="No";}
	$lastid  = $_POST["lastid"];	
require("connection.php");
	$qry="INSERT INTO `dolleysholley`.`infrastructure` (`gymid`,`pet-friendly`, `canteen`, `lounge`, `swimming`, `shower`, `locker`, `steam-room`, `changing-room`) VALUES ($lastid,'$pet', '$canteen', '$lounge', '$swimming', '$shower', '$locker', '$steamroom', '$changingroom');";
	mysqli_query($con,$qry);
	
	mysqli_close($con);
	 ?>
   <script>window.location.href='fitness-signup4.php?lastid=<?php echo $lastid;?>'</script>
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
<!--header end-->
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
  
  <strong>Select Photos to Delete Old Photos :</strong>
  <div class="clearfix"></div>
  <h4><strong>Photos (You can select multiplile Photos in a one time) :</strong></h4>
  <div style="border:#DFDFDF 2px solid; padding:10px; width:470px;"><input type="file" name="multiple-photos" multiple accept="image/jpeg"></div>
  <h4>Description:</h4> 
  <form method="post" action="#" enctype="multipart/form-data">
<input type="text" value="<?php echo $_GET["lastid"];?>" name="lastid">
  <input type="text" name="description" placeholder="Decription" style=" width:230px height:100px;" maxlength="1000">
   </div>
   <div class="col-md-6">
   <h4>Facilities :</h4>
    <!-- Multiple Checkboxes (inline) -->
  <div class="col-sm-4"><span style="color:orange;">Air Conditioner:</span> 
  <input type="checkbox" name="ac" value="ac"></div>
   <div class="col-sm-4"><span style="color:orange;">Power Backup :</span> 
  <input type="checkbox" name="power-backup" value="power-backup"></div>
   <div class="col-sm-4"><span style="color:orange;">Wi-Fi: </span>
  <input type="checkbox" name="wifi" value="wifi"></div>
   <div class="col-sm-4"><span style="color:orange;">Card Payment :</span> 
  <input type="checkbox" name="card-payment" value="card-payment"></div>
   <div class="col-sm-4"><span style="color:orange;">Music:</span> 
  <input type="checkbox" name="music" value="music"></div>
 
   <div class="col-sm-4"><span style="color:orange;">Parking:</span> 
  <input type="checkbox" name="parking" value="parking"></div>
   <div class="col-sm-4"><span style="color:orange;">Security: </span>
  <input type="checkbox" name="security" value="security"></div>
   <div class="col-sm-4"><span style="color:orange;">CCTVV: </span>
  <input type="checkbox" name="cctv" value="cctv"></div>
  <input type="hidden" name="lastid" value="<?php echo $lastid; ?>">
 <div class="clearfix"></div>
 <h4>Highlights :</h4>
   <div class="col-sm-4"><span style="color:orange;">Personal Trainer:: </span> 
  <input type="checkbox" name="personal-trainer" value="personal-trainer"></div>
   <div class="col-sm-4"><span style="color:orange;">Nutritionist : </span>
  <input type="checkbox" name="nutritionist" value="nutritionist"></div>
   <div class="col-sm-4"><span style="color:orange;">Athelitic Club:</span> 
  <input type="checkbox" name="athelitic-club" value="athelitic-club"></div>
  <div class="col-sm-4"><span style="color:orange;">Punch Bags:</span> 
  <input type="checkbox" name="punch-bags" value="punch-bags"></div>
   <div class="col-sm-4"><span style="color:orange;">Boxing Ring: </span>
  <input type="checkbox" name="boxing-ring" value="boxing-ring"></div>
   <div class="col-sm-4"><span style="color:orange;">Doctor On Call:</span> 
  <input type="checkbox" name="doc" value="doc"></div>
    <input type="hidden" name="lastid" value="<?php echo $lastid; ?>">
 <div class="clearfix"></div>
 <h4>Infrastructure :</h4>
 <div class="col-sm-4"><span style="color:orange;">Pet friendly:</span> 
  <input type="checkbox" name="pet" value="pet"></div>
   <div class="col-sm-4"><span style="color:orange;">Canteen : </span>
  <input type="checkbox" name="canteen" value="canteen"></div>
   <div class="col-sm-4"><span style="color:orange;">Lounge :</span> 
  <input type="checkbox" name="lounge " value="lounge "></div>
   <div class="col-sm-4"><span style="color:orange;">Swimimng  : </span>
  <input type="checkbox" name="swimming " value="swimming "></div>
   <div class="col-sm-4"><span style="color:orange;">Shower:</span> 
  <input type="checkbox" name="shower" value="shower"></div>
 
   <div class="col-sm-4"><span style="color:orange;">Locker: </span>
  <input type="checkbox" name="locker" value="locker"></div>
   <div class="col-sm-4"><span style="color:orange;">Steam Room :</span> 
  <input type="checkbox" name="steam-room " value="steam-room "></div>
   <div class="col-sm-4"><span style="color:orange;">Changing Room :</span> 
  <input type="checkbox" name="changing-room " value="changing-room "></div>
    <input type="hidden" name="lastid" value="<?php echo $lastid; ?>">
   <div class="clearfix"></div>
   <br>
    <div><input type="submit" name="CONTINUE3" value="CONTINUE" class="btn btn-block btn-lg btn-warning"  style="width:380px; "></div>
   </div>
   </div>
</form>   
          <!--footer start-->
          <?php include("footer.php");?>
         
          <!-- footer end-->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>
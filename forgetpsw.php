<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
Email : <input type="text" name="email">
<input type="submit" name="psw" value="Recover password">
</form>
<?php
if(isset($_POST["psw"]))
{
	$email= $_POST["email"];
	$con= mysqli_connect("localhost","root","","dolleysholley");
	$qry= "SELECT password from fitness_signup where email='$email';";
	$result= mysqli_query($con,$qry);
	$row = mysqli_fetch_array($result);
	if(!row)
	{
		echo "email not registerd";
	}
	else
	{
		
		 mail("$email","password","$password","mandliya.ankit@gmail.com");
	}
	?>
        

</body>


</html>
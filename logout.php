<?php
session_start();
if(!isset($_SESSION['email']))
{header("location:fitness-signup1.php");}

$email=$_SESSION['email'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fitness login 1</title>
</head>

<body>

<?php

	session_destroy();
	header("location:fitness-signup1.php");

?> 
</body>
</html>
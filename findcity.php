<?php 
$state=$_REQUEST['state'];
$con = mysqli_connect('localhost','root','','dolleysholley'); //changet the
$query="select * from city where stateid='$state'";
$result=mysqli_query($con,$query);
?>
<select name='city'>
<option>Select City</option>
<?php 
while($row=mysqli_fetch_array($result)) { 
echo "<option value=".$row['id'].">".$row['city']."</option>";
 } 
?>
</select>
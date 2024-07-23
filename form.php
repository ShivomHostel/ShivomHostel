<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Require the database connection file
    require('connection.php');

    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $mobile = mysqli_real_escape_string($conn, $mobile);

    // Create an SQL query
    $sql = "INSERT INTO `user` (`name`, `email`, `mobile`) VALUES ('$name', '$email', '$mobile')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<form class="form-horizontal" action="#" method="post">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" placeholder="name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="email" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mobile</label>  
  <div class="col-md-4">
  <input id="textinput" name="mobile" type="text" placeholder="mobile" class="form-control input-md">
    
  </div>
</div>

<input type="submit" name="submit" action= "submit">

</fieldset>
</form>

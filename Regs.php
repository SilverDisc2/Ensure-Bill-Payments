
<?php
include('connection.php');

include('headerstarts.php');

if(isset($_POST['submit']))
{
 $uname=mysqli_real_escape_string($link,$_POST['uname']);
$mail=mysqli_real_escape_string($link,$_POST['email']);
$pas=mysqli_real_escape_string($link,$_POST['pass']);
$dis=mysqli_real_escape_string($link,$_POST['dis']);
$role=mysqli_real_escape_string($link,$_POST['role']);


$query1=mysqli_query($link,"INSERT INTO client VALUES ('', '$mail','$pas','$dis','$role')");
$query2= mysqli_query($link,"INSERT INTO users VALUES ('', '$uname','$mail','$pas','$role')  "); 

//$query1=mysqli_query($link,"INSERT INTO roles(stat,name)VALUES('$stat','$name')");
if($query1)
{
header("location:monitor.html");
}
else
{ 
echo("Error description: " . mysqli_error($link));}
}
?>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
<body >
   



<div class="container " id="services">    
  <div class="row">
 

<form method="post" action="login.php" class = "form-group" >
<label>Name:</label> <input type="text" name="name" class="form-control" ><br>
<label>Email:</label> <input type="text" name="email" class="form-control" ><br>
<label>Password:</label> <input type="text" name="pass" class="form-control" ><br>
<label> District: </label><br>
<select name="role" class="form-control" >
   <option value="1">Select District....</option>
  <option value="1">Dhaka</option>
  <option value="2">Sylhet</option>
  <option value="3">Rajshahi</option>
</select></br>

 <label><b>Role</b></label><br>
 <select name="role" class="form-control" >
   <option value="1">Select Role...</option>
  <option value="1">Company</option>
  <option value="2">Employee</option>
  <option value="3">Client</option>
</select></br>
    
<input type="submit"  class="btn btn-info btn-lg"name="submit"  value="Register"> 
</form>
  </div>
  
<footer class="container-fluid text-center">
  <p style="background-image:url('back.jpg'); color: #4d4d4d; ">&copy:EBS Copyright 2018</p>  
  <form class="form-inline">
   
  </form>
</footer>

</body>
</html>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
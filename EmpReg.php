<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="homepage.css">
</head>
<body >
    <?php
include('connection.php');


if(isset($_POST['submit']))
{
$name=mysqli_real_escape_string($link,$_POST['name']);
$mail=mysqli_real_escape_string($link,$_POST['email']);
$pas=mysqli_real_escape_string($link,$_POST['pass']);

$role=mysqli_real_escape_string($link,$_POST['role']);


$query1=mysqli_query($link,"INSERT INTO employee VALUES ('', '$name','$mail','$pas','$role')");
$query2= mysqli_query($link,"INSERT INTO users VALUES ('', '$mail','$pas','$role')  "); 

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

<div class="jumbotron" style="background-image:url('back.jpg'); ">

  <div class="container text-center">
  
  <h1>Ensure Bill Payment</h1>   
            
  
    <p>Store, Check & Validate</p>
  </div>
</div>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">EBS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#">Mission</a></li>
        <li><a href="cont">Contact</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
    
      </ul>
    </div>
  </div>
</nav>

<div class="container " id="services">    
  <div class="row">
 

<form method="post" action="" class = "form-group" >
<label>Name: </label>  <input type="text" name="name" class="form-control" ><br>
<label>Comapny Name: </label> 
<select name="email" class="form-control">
<option value="pick">Select Comapany </option> 
<option value="pick">Dish </option> 
<option value="pick">News Paper</option> 
<option value="pick">Telephone </option> 
<?php
include('connection.php');

$sql = mysqli_query($link, "SELECT type From company");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['type'] ."'>" .$row['type'] ."</option>" ;
}
?>
</select>
<label>Password:</label> <input type="text" name="pass" class="form-control" ><br>

 <label><b>Role</b></label><br>
 <select name="role" class="form-control" >
  <option value="1">Company</option>
  <option value="2">Employee</option>
  <option value="3">Client</option>
</select></br>
    
<input class="btn btn-info btn-lg" type="submit" value="Register" name="submit">
</form>
  </div>
  
<footer class="container-fluid text-center">
  <p style="background-image:url('back.jpg'); color: #4d4d4d; ">EBS Copyright 2018</p>  
  <form class="form-inline">
   
  </form>
</footer>

</body>
</html>

<html>
<head>
  <title>EBS Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<?php
include('connection.php');


if(isset($_POST['submit']))
{
$mail=mysqli_real_escape_string($link,$_POST['email']);
$pas=mysqli_real_escape_string($link,$_POST['pass']);

$sql="SELECT * FROM users WHERE email= '$mail' and password='$pas'"; 
 
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $role = $row['role'];
      
  $count = mysqli_num_rows($result);

   if($count == 1) {
       
        if($role==1){
       
         header("location:monitor.html");   
      }
else if($role==2)
{
  header("location:emp.php");
}
else if($role==3)
{
  header("location:cli.php");
}
      else {
         $error = "Your Login Name or Password is invalid";
      }
       
        
      
    }

else
{ 
echo("Error description: " . mysqli_error($link));}
}
?>

  <div class="col-sm-2" style="background-color:white;"></div>
    <div class="col-sm-2" style="background-color:white;"></div>

 
    <div class="col-sm-4"  style="background-color:CCCC99;">
   
  <h2>User Login</h2>

  <form align="center" class="form-horizontal " method="post" action="">
        

Email: <input class="form-control" type="text" name="email"><br>
Password: <input type="password" class="form-control"  type="text" name="pass"><br>
<br>

<input type="submit"  name="submit" value="Login"> 

</div>
</form>

</body>
</html>
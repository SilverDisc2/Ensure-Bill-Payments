<?php  
include('headerE.php')?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form class="form-group" method="post" action="">
Month: <input class="form-control" type="text" name="mon"><br>

Client ID: <input class="form-control" type="text" name="clid"><br>
Code: <input type="text" class="form-control" name="code"><br>



<br>
<input type="submit" class="btn btn-info btn-lg"value="Enter"name="submit">
</form>

</body>
</html>
<?php

include('connection.php');
 
if(isset($_POST['submit']))
{
$clid=$_POST['clid'];
$code=$_POST['code'];

$month=$_POST['mon'];

if(isset($_POST['submit'])){
$sql = "SELECT * FROM payment WHERE cl_id='$clid' and month='$month' and code='$code'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        
                      
                     header("location:payment.php");   
          
               
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
}// Close connection
mysqli_close($link);
}
?>


<?php  
include('footer.php')?>

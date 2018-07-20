<?php 
include('header.php');
 ?>
<html>

<body>
<?php
include('connection.php');


if(isset($_POST['submit']))
{
$sid=mysqli_real_escape_string($link,$_POST['sid']);
$sname=mysqli_real_escape_string($link,$_POST['sname']);
$price=mysqli_real_escape_string($link,$_POST['price']);
$cid=mysqli_real_escape_string($link,$_POST['cid']);



$query1=mysqli_query($link,"insert into service values('$sid','$sname','$price','$cid')");
if($query1)
{
$id=$_POST['cid'];

$sql = "SELECT * FROM service WHERE c_id='$id'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        echo "<table >";
            echo "<tr>";
             //  echo "<th>Precription ID:</th>";
                echo "<th>Service ID</th>";
                echo "<th>Service Name</th>";
                echo "<th>Price</th>";
                
               
                
  
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
             //echo "<td>" . $row['pres_id'] . "</td>";
                echo "<td>" . $row['S_ID'] . "</td>";
                echo "<td>" . $row['S_Name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
              
                  
                

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } 
}
else
{ 
echo("Error description: " . mysqli_error($link));}
}
}
?>

<form method="post" action="">
Service ID: <input type="text" name="sid"><br>
Service Name: <input type="text" name="sname"><br>
Price: <input type="text" name="price"><br>
Cid: <input type="text" name="cid"><br>


<br>
<input type="submit" name="submit">
</form>

</body>
</html>
<?php 
include('footer.php');
 ?>




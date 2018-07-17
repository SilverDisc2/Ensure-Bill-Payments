<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post" action="">
Month: <input type="text" name="mon"><br>

Client ID: <input type="text" name="clid"><br>


<br>
<input type="submit" value="Search"name="submit">
</form>

</body>
</html>

<?php

include('connection.php');
 
if(isset($_POST['submit']))
{
$clid=$_POST['clid'];
$month=$_POST['mon'];

if(isset($_POST['submit'])){
$sql = "SELECT * FROM payment WHERE cl_id='$clid' and month='$month'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        echo "<table >";
            echo "<tr>";
            
                echo "<th>Your Code</th>";
          
                
               
                
  
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
             //echo "<td>" . $row['pres_id'] . "</td>";
                echo "<td>" . $row['code'] . "</td>";
                
              
                  
                

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
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


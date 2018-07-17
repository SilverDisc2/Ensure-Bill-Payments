

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form method="post" action="">

Cid: <input type="text" name="cid"><br>


<br>
<input type="submit" name="submit">
</form>
</body>
</html>
<?php

include('connection.php');
 
if(isset($_POST['submit']))
{
$id=$_POST['cid'];

if(isset($_POST['submit'])){
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


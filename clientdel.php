<?php 
include('header.php');
 ?>
<?php

include('connection.php');

//if(isset($_POST['submit']))
//{
//$id=$_POST['id'];
//$sql="SELECT * FROM `prescription` WHERE u_id='$id'";
$sql = "SELECT * FROM client";
if($result = mysqli_query($link, $sql)){
    if (mysqli_num_rows($result) > 0){
 
        echo "<table >";
            echo "<tr>";
              
             echo "<th>cl_id</th>";
                
                echo "<th>email</th>";
                echo "<th>password</th>";
                echo "<th>District</th>";
                echo "<th>role</th>";
           
                 
                
  
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                            echo "<td>" . $row['cl_id'] . "</td>";

                
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['district'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
          
               
                    echo "<td><a href='editclient.php?id=".$row['cl_id']."'>Edit</a></td>";
echo "<td><a onclick=\"return confirm('Delete this record?')\"  href='deletep.php?id=".$row['cl_id']."'>x</a></td><tr>";
                    
                

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
 
// Close connection
mysqli_close($link);

?>
<?php 
include('footer.php');
 ?>
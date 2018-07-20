
<html>
<body>
<?php
include('connection.php');
if(isset($_GET['c_id']))
{
$id=$_GET['c_id'];
$query1=mysqli_query($link,"delete from company where c_id='$id'");
if($query1)
{
header('location:listcomp.php');
}
}
?>
</body>
</html>
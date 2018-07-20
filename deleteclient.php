<html>
<body>
<?php
include('connection.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysqli_query($link,"delete from client where cl_ID='$id'");
if($query1)
{
header('location:listclient.php');
}
}
?>
</body>
</html>

<html>
<body>
<?php
include('connection.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysqli_query($link,"delete from service where s_ID='$id'");
if($query1)
{
header('location:listserv.php');
}
}
?>
</body>
</html>

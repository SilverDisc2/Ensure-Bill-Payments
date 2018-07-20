
<html>
<body>
<?php
include('connection.php');
if(isset($_GET['e_id']))
{
$id=$_GET['e_id'];
$query1=mysqli_query($link,"delete from employee where e_id='$id'");
if($query1)
{
header('location:listemp.php');
}
}
?>
</body>
</html>
<?php include('headerE.php')  ?>
<html>

<body>
<?php
include('connection.php');


if(isset($_POST['submit']))
{
$amm=mysqli_real_escape_string($link,$_POST['ammount']);
$mon=mysqli_real_escape_string($link,$_POST['month']);
$cl_id=mysqli_real_escape_string($link,$_POST['clid']);

//$code=mysqli_real_escape_string($link,$_POST['code']);


$query1=mysqli_query($link,"insert into payment values('','$amm','$mon','$cl_id' ,rand())");
if($query1)
{
{ 
echo("Payment Collection Completed Successfully! ");
}
}
else
{ 
echo("Error description: " . mysqli_error($link));}
}
?>

<form  class="form-group" method="post" action="">
Ammount: <input class="form-control" type="text" name="ammount"><br>

Month:<input  class="form-control"type="text" name="month"
>

<br>
Client id: <input class="form-control" type="text" name="clid"><br>

<br>
<input class="btn btn-info btn-lg"type="submit" name="submit" value="Receive">
</form>

</body>
</html>
<br>
<br>
<br>
<br>

<?php  include('footer.php')?>
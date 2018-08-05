<?php include('headerE.php')  ?>
<html>

<body onload="SetDate();">
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
Amount: <input class="form-control" type="text" name="ammount"><br>

Month:<input  type="text" id="demo" class="form-control"type="text" name="month"
>

<br>
Client id: <input class="form-control" type="text" name="clid"><br>

<br>
<input class="btn btn-info btn-lg"type="submit" name="submit" value="Receive">
</form>
<script type="text/javascript">
function SetDate() {
    var month = new Array();

    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";

    var d = new Date();
    var n = month[d.getMonth()];
    document.getElementById("demo").value = n;
}

</script>
</body>
</html>
<br>
<br>
<br>
<br>

<?php  include('footer.php')?>
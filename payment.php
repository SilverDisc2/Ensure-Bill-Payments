<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
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
header("location:list.php");
}
else
{ 
echo("Error description: " . mysqli_error($link));}
}
?>

<form method="post" action="">
Ammount: <input type="text" name="ammount"><br>
Month: <input type="date" name="month"><br>
Client id: <input type="text" name="clid"><br>

<br>
<input type="submit" name="submit">
</form>

</body>
</html>
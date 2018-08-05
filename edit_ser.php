
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
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$c_id=$_POST['c_id'];
$price=$_POST['price'];
$S_ID=$_POST['S_ID'];
$S_Name=$_POST['S_Name'];

$query3=mysqli_query($link,"update service set c_id='c_id', price='$price' ,S_ID='$S_ID',S_Name='$S_Name' where S_ID='$id'");
if($query3)
{
header('location:servicedel.php');
}
else
{ 
echo("Error description: " . mysqli_error($link));}
}
}
$query1=mysqli_query($link,"select * from service where S_ID='$id'");
if(!$query1)
{
echo("Error description: " . mysqli_error($link));
}
$query2=mysqli_fetch_array($query1,MYSQLI_ASSOC);
?>
<form method="post" action="">
                <tr> 
    <td colspan="25" align="center"> <b></b> </td>
</tr>
 <tr> 
<td  align="right"><b>Clent ID:</b></td>   <td><input type="text" name="c_id" /></td>
            </tr>


            <tr> 
<td  align="right"><b>Price:</b></td>   <td><input type="text" name="price" /></td>
            </tr>

                    <tr> 
<td align="right"><b>Service ID:</b></td><td><input type="text" name="S_ID" /></td>
            </tr>

<tr>
<td align="right">Sercice name<b>:</b></td><td><input type="text" name="S_Name" /></td>
            </tr>

         


            <td colspan="5" align="center"><input type="submit" name="submit" value ="Upload"/></td>
</tr>

</table>

</form>
</body>
</html>
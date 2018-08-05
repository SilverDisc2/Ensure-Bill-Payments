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
$email=$_POST['email'];
$ownername=$_POST['ownername'];
$password=$_POST['password'];
$role=$_POST['role'];

$query3=mysqli_query($link,"update company set c_id='c_id', email='$email', ownername='$ownername' ,password='$password',role='$role' where c_id='$id'");
if($query3)
{
header('location:companydel.php');
}
else
{ 
echo("Error description: " . mysqli_error($link));}
}
}
$query1=mysqli_query($link,"select * from company where c_id='$id'");
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
<td  align="right"><b>Email:</b></td>   <td><input type="text" name="email" /></td>
            </tr>

                    <tr> 
<td align="right"><b>Owner Name:</b></td><td><input type="text" name="ownername" /></td>
            </tr>

<tr>
<td align="right"><b>password</b></td><td><input type="text" name="password" /></td>
            </tr>

         <tr>
<td align="right"><b>Role:</b></td><td><input type="text" name="role" /></td>
            </tr>



            <td colspan="5" align="center"><input type="submit" name="submit" value ="Upload"/></td>
</tr>

</table>

</form>
</body>
</html>
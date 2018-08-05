<?php
include('header.php');
  ?><html>
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


</style>
<body>
<?php
include('connection.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{

$email=$_POST['email'];
$e_id=$_POST['e_id'];
$e_name=$_POST['e_name'];
$pass=$_POST['pass'];
$stat=$_POST['stat'];

$query3=mysqli_query($link,"update employee set  email='$email',e_id='$e_id',e_name='$e_name',pass='$pass',stat='$stat' where e_id='$id'");
if($query3)
{
header('location:empdel.php');
}
else
{ 
echo("Error description: " . mysqli_error($link));}
}
}
$query1=mysqli_query($link,"select * from employee where e_id='$id'");
if(!$query1)
{
echo("Error description: " . mysqli_error($link));
}
$query2=mysqli_fetch_array($query1,MYSQLI_ASSOC);
?>
<form method="post" action="">
                <tr> 
    <td colspan="25" align="center"> <b></b> </td>
</tr> <tr> 
<td  align="right"><b>Employee ID:</b></td>   <td><input type="text" name="e_id" /></td>
            </tr>

                    <tr> 
<td align="right"><b>Employee Name:</b></td><td><input type="text" name="e_name" /></td>
            </tr>
 <tr> 
<td  align="right"><b>Email:</b></td>   <td><input type="text" name="email" /></td>
            </tr>


           

<tr>
<td align="right"><b>Password</b></td><td><input type="text" name="pass" /></td>
            </tr>

         <tr>
<td align="right"><b>State:</b></td><td><input type="text" name="stat" /></td>
            </tr>



            <td colspan="5" align="center"><input type="submit"   class="btn btn-info btn-lg" name="submit" value ="Upload"/></td>
</tr>

</table>

</form>
</body>
</html>
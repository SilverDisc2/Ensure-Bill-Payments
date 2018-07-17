
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<select name="to_user" class="form-control">
<option value="pick">בחר מהרשימה</option>
<?php
include('connection.php');

$sql = mysqli_query($link, "SELECT type From company");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['type'] ."'>" .$row['type'] ."</option>" ;
}
?>
</select>
</body>
</html>

<?php 
include('header.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<style>
	
</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Ensure Billing Syetem</title>
</head>
<body>
	<div class="container">
<h1>Monitor</h1>

  <div class="row">
    
       <div class="col-sm-2" >  <p>List of Employees
        <a href="empdel.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-list-alt"></span> Employees
        </a>
      </p> </div>
    <div class="col-sm-2" >  <p>List of Clients
        <a href="clientdel.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-list-alt"></span> Clients
        </a>
      </p> </div>
    <div class="col-sm-2" > 
      <p>Create Service List
        <a href="serv.php" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-list-alt"></span> Services
        </a></div>
  </div>

   
      </p> 
</div>
<div id="id01" class="modal">
	 <form class="modal-content animate" action="">
<h2 style="color: red;">To be initialized..............</h2>
    
  <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel</button>
    
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
<br><br><br><br><br><br><br><br>

<?php 
include('footer.php');
 ?>
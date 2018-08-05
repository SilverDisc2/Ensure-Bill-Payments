<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ensure Bill Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
     
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
  

</style>
<body >

<div class="jumbotron" style="background-image:url('back.jpg'); ">

  <div class="container text-center">
  
  <h1>Ensure Bill Payment</h1>   
            
  
    <p>Store, Check & Validate</p>
  </div>
</div>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">EBS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Company</a></li>
        <li><a href="EmpReg.php">Employee</a></li>
        <li><a href="cli.php">Client</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>

    
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center" id="services">    
  <div class="row">
    <dir><h2>Services</h2></dir>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Company</div>
        <div class="panel-body"><img src="stroe.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">fggf hfghgfhgf gfngf h ghj gf gf</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-warning">
        <div class="panel-heading">Employee</div>
        <div class="panel-body"><img src="note.jpg
          " class="img-responsive" style="width:87%" alt="Image"></div>
        <div class="panel-footer">gfdggrdf fghb fh fgh fhf</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Client</div>
        <div class="panel-body"><img src="handover.jpg" class="img-responsive" style="width:87%" alt="Image"></div>
        <div class="panel-footer"> fgfgh fgh gfddfh gfhjghn fghfgjg</div>
      </div>
    </div>
  </div>
</div><br>

</body>
</html>
<?php
include('footer.php');
?>
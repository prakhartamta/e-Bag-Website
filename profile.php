<?php
require('includes/common.php');
  if (!isset($_SESSION['email']))
    { header('location: login.php'); }
$email=$_SESSION['email'];
$select_query="SELECT * FROM users Where email='$email'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_result);
?>
<!DOCTYPE HTML>
<html>
    <head>
<title>PHP SYNTAX</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1.0"> 
         <link href="style.css" rel="stylesheet" type="text/css">
         <style>
            #ps{
                margin-top: 100px;
            }
             .ft{
                 margin-top: 375px;
             }
          </style>
    </head>
<body>
   
    <nav>
         <?php
           require('includes/header.php');
         ?>    
    </nav>
<div id="content">
    <div class="container">
      <div class= "col-xs-8 col-xs-offset-2">
   <?php $row=mysqli_fetch_array($select_query_result) ?>
    <div class="panel panel-primary" id="ps">
    <div class="panel-heading">
    <div class="row">
    <div class="col-lg-12"><h4>User Profile</h4></div>
    </div>
    </div>
    <div class="panel-body">
    <div class="row">
    <div class="col-xs-1">Name:</div>
    <div class="col-xs-7"><?php echo $row['name'] ?></div>
    </div>
    
    <div class="row">
    <div class="col-xs-1">Email:</div>
    <div class="col-xs-11"><?php echo $row['email'] ?></div>
    </div>
    
    <div class="row">
    <div class="col-xs-1">Phone:</div>
    <div class="col-xs-11"><?php echo $row['phone'] ?></div>
    </div>
    
    <div class="row">
    <div class="col-xs-1">City:</div>
    <div class="col-xs-11"><?php echo $row['city'] ?></div>
    </div>
          
    <div class="row">
    <div class="col-xs-1">Address:</div>
    <div class="col-xs-11"><?php echo $row['address'] ?></div>
    </div>
    </div>
    <div class="panel-footer">
    </div>
    </div>
    </div>
    
    </div>
 
</div>
</body>
 <footer id="footer" class="ft">
      <?php
        include('includes/footer.php');
      ?>
  </footer>
</html>

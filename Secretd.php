<?php
    require('includes/common.php');
    $diaryContent="";

     if (isset($_SESSION['email'])) {
      $email=$_SESSION['email'];
      $query="SELECT diary FROM `udiary` WHERE email='$email'";
      $row=mysqli_fetch_array(mysqli_query($con,$query));
      $diaryContent=$row['diary'];
        
    } else {
        
        header("Location:login.php");
        
    }

?>
<!DOCTYPE html>
<html lang="en">
    <title>Secret Diary</title>
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <style type="text/css">
       
        #containerLoggedInPage{
        margin-top:60px;
        }
     
       html { 
          
          background: url(img/secretbackg.jpg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          
          }
          
          body {
              
              background: none;
              color: #FFF;
              
          }
          
         
          
          #diary {
              
              width:100%;
              height: 100%;
              
          }

      </style>
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-faded navbar-fixed-top">
  <a class="navbar-brand" href="secret">Secret Diary</a>
    <div class="pull-xs-right">
        <a href='diary.php'><button class="btn btn-success-outline" type="submit">Save and Back</button></a>
    </div>
  
</nav>
<div class="container" id="containerLoggedInPage" >
  <textarea id="diary" rows="50" class="form-control"><?php echo $diaryContent; ?>></textarea>
</div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
      
    <script type="text/javascript">

       $('#diary').bind('input propertychange', function() {

                $.ajax({
                  method: "POST",
                  url: "updatedatabase.php",
                  data: { content: $("#diary").val() }
                });

        });
      


    </script>
      
  </body>
</html>




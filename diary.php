<?php
  require('includes/common.php');
    // Redirects the user to products page if he/she is logged in.
    if (isset($_SESSION['email']))
    { 
    $email=$_SESSION['email'];
    $query="Select name from users Where email='$email'";
    $run=mysqli_query($con,$query);
    $result=mysqli_fetch_array($run);
    
    }
        
     else
     {
         header('location:login.php');
     }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>eBag</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"><!--for linking to syle.css file-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <style type="text/css">
            #container{
                text-align: center;
                margin-top: 100px;
                color: white;
            }
            #user{
                margin-top: 150px;
            }
            html{
                 background: url("img/secretbackg.jpg") no-repeat center center fixed; 
                -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
            }
            body{
                background: none;
            }
            
        
        </style>
   </head>
   <body>
      
      <nav>
            <?php
             require('includes/header.php');
             ?>
        </nav>
<div class="content">
          
       
    <div class="content">
    
    <div class="container-fluid" id="container">
          
       <h1>Secret Diary</h1>
       <p><strong><h4>Store your thoughts permanently and securely.</h4> </strong></p>
       <p><strong><h6>Your privacy is our first concern.</h6> </strong></p>
                  
       <h2 id="user">Welcome  <?php echo $result['name']; ?>!</h2>
      <a href='Secretd.php'><button class="btn btn-primary" type="submit">Get Started</button></a>
        
       </div>
            

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script type="text/javascript">

       $('#diary').bind('input propertychange', function() {

                $.ajax({
                  method: "POST",
                  url: "updatedatabase.php",
                  data: { content: $("#diary").val() }
                });

        });
      


    </script>
      </div>
       
       

       
       
</div>       
       
</body>
  <footer id="footer">
    <?php
    include('includes/footer.php');
    ?>
  </footer>

</html>
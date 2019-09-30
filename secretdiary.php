<?php
  require('includes/common.php');
    // Redirects the user to products page if he/she is logged in.
    if (isset($_SESSION['email']))
       { header('location: #'); }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Secret Diary!</title>
    <style type="text/css">
      #container{
        text-align: center;
        width: 499px;
        margin-top: 100px;
        color: #fff;
      }
 html { 
  background: url("img/secretbackg.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  z-index:-1;
           
}
     body{
      background: none;
     }
    
     #user{
      margin-top: 150px;
     }
         #diary {
              
              width: 100%;
              height: 100%;
          }
        #navb{
            z-index: 1;
        }
    </style>
  </head>
  <body>
      
       <nav id="navb">
            <?php
             require('header.php');
             ?>
        </nav>
    <div class="content">
    <form id="signupform" method="post">
    <div class="container-fluid" id="container">
       <h1>Secret Diary</h1>
       <p><strong><h4>Store your thoughts permanently and securely.</h4> </strong></p>
       <p><strong><h6>Your privacy is our first concern.</h6> </strong></p>
     
       <h2 id="user">Welcome  Prakhar!</h2>
       <input type="Submit" name="diaryButton" value="Get Started" class="btn btn-primary">
       </div>
            
 
   
</form>
    
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
  </body>
    <footer id="footer">
    <?php
    include('includes/footer.php');
    ?>
  </footer>
</html>
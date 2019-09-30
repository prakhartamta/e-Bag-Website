<?php
require('includes/common.php');
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
        
   </head>
   <body>
        
      <nav>
            <?php
             require('includes/header.php');
             ?>
        </nav>
       
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/1.jpeg" alt="">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="img/secretbackg.jpg" alt="">
      <div class="carousel-caption">
     </div>
    </div>

    <div class="item">
      <img src="img/3.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    

  
<br><br><br>          
<div class="container">
   <row class="text-center">
            <div class="col-md-4 col-sm-6 ">
                <a href="diary.php">
                <div class="thumbnail">
                <img src="img/diary.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Secret Diary</h3>
                     <h5>Secret Diary is a eDiary in which you can write anything you want.It has a auto-saved feature in which your data will not be loss. </h5>
                    </div>
                    
                </div>
                </a>
                </div>
                 <div class="col-md-4 col-sm-6 home-feature">
                <a href="memories.php">
                  <div class="thumbnail">
                    <img src="img/memory.jpg" alt="Responsive Image">
                    <div class="caption">
                    <h3 style="font-weight: bold">Memories</h3>
                     <h5>Clip your memories in form of pics,images.</h5>
                    </div>
                </div>
                </a>
                </div>
       
                <div class="col-md-4 col-sm-6 home-feature">
                <a href="profile.php">   
                <div class="thumbnail">
                <img src="img/private1.png" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">100% Secured Profile</h3>
                     <h5>Instant support for any problems using Contact Us page.</h5> 
                    </div>
                </div>
                </a>
                </div>
                
            </row>         
           

</div>           
       

     
  </body>
  <footer id="footer">
    <?php
    include('includes/footer.php');
    ?>
  </footer>

</html>
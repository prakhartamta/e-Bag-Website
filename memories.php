<?php
  require('includes/common.php');
    // Redirects the user to products page if he/she is logged in.
    if (!isset($_SESSION['email']))
       { header('location: login.php'); }
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
             #forms{
                 margin-top: 75px;
                 text-align: center;
             }
             #bt{
             margin-top: 10px;
             }
            
        </style>
   </head>
   <body>
        
      <nav>
            <?php
             require('includes/header.php');
             ?>
        </nav>
          
          
           <div class="content" id="forms">
            <div class= "col-xs-4 col-xs-offset-4">
              
                   
               <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="img[]" multiple="multiple" class="form-control"/>
                   <input type="submit" name="submit" value="Upload" class="btn btn-primary" id="bt">
                   
               </form>
                <center><h5>**Please Upload the image having size less than 1MB!</h5></center>
              <?php if(isset($_GET['error'])){ ?>
                 <div class="alert alert-danger"><?php  echo $_GET['error']; //alert message for user of successful registering ?>
                 </div>
                <?php } ?>
                 <?php if(isset($_GET['suc'])){ ?>
                 <div class="alert alert-success"><?php  echo $_GET['suc']; //alert message for user of successful registering ?>
                 </div>
                <?php } ?>
               </div>
           
       
     <?php
   
     
      error_reporting(0);
      if(isset($_POST['submit'])){
            $filename=$_FILES['img']['name'];
            $tmpname=$_FILES['img']['tmp_name'];
            $filetype=$_FILES['img']['type'];
           
            for($i=0;$i<=count($tmpname)-1;$i++){
                $name=addslashes($filename[$i]);
                $tmp=addslashes(file_get_contents($tmpname[$i]));
               if(!$filename)
                { 
                    $error="Please Choose the image!!";
                    header('location: memories.php?error='.$error);
                }
                else{
                   $res=mysqli_query($con,"insert into imgid(name,image) values('$name','$tmp')");
                   if($res){
                    $suc="Succesfully Uploaded!";
                    header('location: memories.php?suc='.$suc);
                }
                }
           }
      }
    ?>
     <br><br>          
               
    <?php
      //display
        $email=$_SESSION['email'];
        $res=mysqli_query($con,"Select * from imgid ");
        while($row=mysqli_fetch_array($res)){
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="250" height="250">';
        }
               
    ?>
    </div>
  </body>
 
    
     <footer id="footer">
         <?php
    include('includes/footer.php');
         ?>
  </footer>

</html>
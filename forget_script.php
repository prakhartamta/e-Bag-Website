<?php
    require('includes/common.php');
    if (!isset($_SESSION['email']))
       { header('location: homepage.php'); 
       }

      $newpassword = $_POST['newpassword'];
      $newpassword = mysqli_real_escape_string($con, $newpassword);
      $newpassword=md5($newpassword);

      $repassword = $_POST['repassword'];
      $repassword = mysqli_real_escape_string($con, $repassword);
      $repassword=md5($repassword);

       $email=$_SESSION['email'];
       $que="SELECT password,id from users where email='$email'";
       $res=mysqli_query($con,$que)or die($mysqli_error($con));
       $row=mysqli_fetch_array($res);
       $orig_pass=$row['password'];
  if($newpassword==$repassword)
   { 
        $cquery="UPDATE users SET password = '$newpassword' WHERE users.email = '$email'";
        $result=mysqli_query($con,$cquery)or die($mysqli_error($con));
        if($result==true)
        {
            $updated="Your password is updated.";
            header('location:forgetpass.php?updated='.$updated);
        }
    

   }
 else{
      $error="The passwords are not Same!!";
      header('location:forgetpass.php?error='.$error); 
    }
  ?>
<?php
   require('includes/common.php');
 $error="";
   $email = $_POST['email'];
   $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";   //valitadions for email
   if (!preg_match($regex_email, $email)) {
        $email_error="Invalid email";
       header('location:login.php?email_error='.$email_error);
       }
    if(isset($_POST['email'])){
        $email=mysqli_real_escape_string($con,$_POST['email']);
    
      
        
        $sql="SELECT email from users where email='".$email."'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);    
         if($num==0){
   
          $error="You have entered incorrect Email <br><br> Or You did not registered yet!";                            
          header('location:email.php?error='.$error);
          
        }
      else{
         mysqli_fetch_array($result);
         $_SESSION['email']=$email;      //session created
         $emaiTO="amithal.lko@gmail.com";
         
         $subject="Email verification to change password.";
         $content="<a href=\'http://localhost/syntaxerror/forgetpass.php\'>Click to change your Password</a>";
         $header="From:amitsinghiitro@gmail.com\r\n";
        mail($emaiTO,$subject,$content,$header);
        
        header('location:forgetpass.php?l='.$content);
        
    }
    
 }
?>
 


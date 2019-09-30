<?php
    include("includes/common.php");

    if (array_key_exists("content",$_POST)) {
    
        $email=$_SESSION['email'];
        $query = "UPDATE `udiary` SET `diary` = '".mysqli_real_escape_string($con, $_POST['content'])."' WHERE email= '$email' ";
        
        mysqli_query($con, $query);
        
    }

?>

<?php
        $conn = include('config/config.php');

        $email = $_POST['inputEmail'];
        $password = $_POST['currentPwd'];
        $newpassword = $_POST['newPwd'];
        $confirmnewpassword = $_POST['ConfirmPwd'];
        $result = mysql_query("SELECT password FROM userData WHERE Email ='$email'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE userData SET password='$newpassword' where Email ='$email'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
?>

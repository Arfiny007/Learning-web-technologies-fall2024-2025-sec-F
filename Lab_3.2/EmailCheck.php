<?php
     if(isset($_POST['submit'])){
 
        $email  =  $_REQUEST['Email'];
        if(strlen($email) == 0){
            echo "Cannot be empty";
        }elseif (strpos($email, '@') == True && strpos($email, '.', strpos($email, '@')) == True) {
            echo "Valid email address.";
        } else {
            echo "Invalid email address.";
        }
    }
?>
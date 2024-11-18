<?php


     if(isset($_POST['submit'])){
 
         $name  =  $_REQUEST['name'];
         
 
         if(strlen($name) == 0){
             echo "Cannot be empty";
         }else{
            $firstChar=$name[0];
            if(strlen($name)<2){
                echo "Contains at least two words";
             }
            else if(!($firstChar >= 'A' && $firstChar <= 'Z') && !($firstChar >= 'a' && $firstChar <= 'z')){
             echo "Must start with letter";
            }else{
            echo "done";
            }
         }
     }else{
         echo "Invalid request!";
     }
 
?>
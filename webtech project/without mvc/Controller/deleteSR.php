<?php
    
    if (isset($_GET['id'])) 
       {
        $id = $_GET['id'];
        //echo $id;
        $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');
        $sql = "DELETE FROM emplolyee where ID ='{$id}'";

        $result = mysqli_query($con,$sql);

        if($result)
        {
           echo "Deleted";
        }
        else
        {
            echo "Not deleted";
        }
       }
    else
    {
        echo " No ID provided";
    }
     

?>
<?php 

include 'connect.php';

if(isset($_POST['coding'])){
    $code=$_POST['codez'];
        $insertQuery="INSERT INTO code(code)
                       VALUES ('$code')";
            if($conn->query($insertQuery)==TRUE){
                header("location: dashboard.html");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
?>
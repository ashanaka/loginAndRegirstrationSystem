<?php

    include("./config.php");

    $token = $_REQUEST['token'];

    $query2 = "UPDATE registration SET activated = '1' WHERE token = '".$token."'";

    if(mysqli_query($conn, $query2)){
        echo "succesfully verified!";
        exit;
    }

?>
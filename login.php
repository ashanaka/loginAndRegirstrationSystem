<?php

    include("./config.php");

    
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pwd'];
    
    $query = "SELECT * FROM registration WHERE email = '$email'";

    $check = mysqli_query($conn, $query);
    
    $retreivedData = mysqli_fetch_array($check);

    session_start();

    $_SESSION['logedUser'] = "Login";

    if(mysqli_num_rows($check)>0){
        if($retreivedData['email'] == $email && $retreivedData['pwd'] == $password){
            if($retreivedData['activated'] == 1){
                header("Location: ./welcome.php");
                $_SESSION['logedUser'] = $retreivedData['email'];
            }else{
                
                echo '<script type="text/javascript"> alert("varify email"); </script>';
                echo("<script>window.location = './welcome.php';</script>");
            }
        }else{
            echo '<script type="text/javascript"> alert("Check email or password is correct!"); </script>';
            echo("<script>window.location = './loginhtml.php';</script>");
        }
    }else{
        echo '<script type="text/javascript"> alert("You haven\'t registered yet!"); </script>';
        echo("<script>window.location = './signup.php';</script>");
    }


?>
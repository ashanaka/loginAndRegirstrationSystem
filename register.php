
<?php

    include("./config.php");

   

    // $conn = mysqli_connect('localhost', 'root', '', 'boarding');

    $firstname = filter_input(INPUT_POST, "fname");
    $lastname = filter_input(INPUT_POST, "lname");
    $dob = filter_input(INPUT_POST, "dob");
    $gender = filter_input(INPUT_POST, "optradio");
    $mobileno = filter_input(INPUT_POST, "mobileno");
    $email = filter_input(INPUT_POST, "email");
    $pwd = filter_input(INPUT_POST, "pwd");
    $confirmpwd = filter_input(INPUT_POST, "confirmpwd");

    $token = md5($firstname);

    $query = "INSERT INTO registration (firstname, lastname, dob, gender, mobileno, email, pwd, token) VALUES ('$firstname','$lastname','$dob','$gender','$mobileno','$email','$pwd', '$token')";

    if( $conn){
        mysqli_query($conn, $query);

        $to = $email;
        $subject = 'Please varify your email';
        $message = "Please click link to verify your account";

        $message .= '<a href="http://localhost/boarding/active.php?token='.$token.'"> click here </a>';

        $headers = "From: test@gmail.com\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";

        mail($to, $subject, $message, $headers);

        header("Location: ./welcome.php");
    }else{
        echo "error";
    }
?>

</html>
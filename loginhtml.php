<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./commonstyles.css">
    <link rel="stylesheet" href="./loginstyle.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login!</title>
</head>
<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-target="#mainNavbar" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="mainNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="./welcome.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
                    <li><a href="./about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./loginhtml.php" class="active"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['logedUser'] ?></a></li>
                    <li><a href="./signup.php" ><span class="glyphicon glyphicon-plus"></span> Sign up</a></li>
                </ul>
               
            </div>
        </div>  
    </nav>

    <!-- login form -->
    <div class="container">
        <div class="jumbotron">
            <h1>Login Here!</h1>
            <form class="form-horizontal" action="./login.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10"> 
                        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default btn-lg">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
    
</body>
</html>
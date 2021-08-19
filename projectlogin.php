
<!DOCTYPE html>
<html lang="eng">

<head>
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="signupcss.css">
    <link rel="stylesheet" type="text/css" href="allcss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
        rel="stylesheet">
    <title>Healthifyyoursnack</title>

<body>
    <header>
        <nav>
            <div class="row">
                <img src="images/logo.png" alt="Healthifyyoursnack logo" class="logo">
                <ul class="main-navi">
                    <li>
                        <a href="project1.php">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
        </nav>
        <div class="textbox">
            <h1> A guide to healthy snacks with easily available ingredients. </h1>
            <h2>Login</h2>
            <form action="" method="post">
               
                <input type="text" name="username" id="name" placeholder="Enter username" required>
                <br>
                
                <input type="password" name="password" id="password" placeholder="Enter password" minlength="8" required>
                <br>

                <button class="butn">Submit</button>
            </form>
            </div>
    </header>

</body>
</head>

</html>
<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: project.php");
    exit;
}
$_SERVER="localhost";
$_username="root";
$_password="";
$dbname="login";

$con=mysqli_connect($_SERVER, $_username, $_password,$dbname);

if(!$con)
{
     die("failed connection with database due to" . mysqli_connect_error());
}

$username = $password = "";
$err = "";

// if request method is post
if (extract($_POST)){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT sno, username, password FROM login WHERE username = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $sno, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["sno"] = $sno;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: project.php");
                            
                        }
                    }

                }

    }
}    


}


?>



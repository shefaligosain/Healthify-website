<?php
$_SERVER="localhost";
$_username="root";
$_password="";
$dbname="login";

$con=mysqli_connect($_SERVER, $_username, $_password,$dbname);

if(!$con)
{
     die("failed connection with database due to" . mysqli_connect_error());
}
//echo "success";
extract($_POST);
$name= $_POST['name'];
$email= $_POST['email'];
$recipe= $_POST['recipe'];
$suggestion= $_POST['suggestion'];

$sql="INSERT INTO `contactform` (`name`, `email`, `recipe`, `suggestion`, `date`) VALUES ('$name', '$email', '$recipe', '$suggestion', current_timestamp())";
//echo $sql;
if($con->query($sql) == true){
     echo "Thank you for your response!!";}
     else{
          echo "ERROR $sql <br> $con->error";
     }

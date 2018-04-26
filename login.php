<?php

error_reporting( E_ALL );
 ini_set( "display_errors", 1 );
session_start();
//echo'hello';


$username=$_POST['email'];
$password=$_POST['psw'];

$conn=mysqli_connect("localhost","root","","blog");
if(!$conn){
    die("Connection failed".mysql_error());
}

/*echo $first."<br>";
echo $last."<br>";
echo $username."<br>";
echo $password."<br>";*/
$query="SELECT * FROM user WHERE username='$username' and password='$password'";
$result = mysqli_query($conn,$query);

if(!$row=mysqli_fetch_assoc($result)){
    echo 'your username or password is incorrect';
}
else{
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['username'];
     //echo $_SESSION['name'];
    //echo"your session is ".$_SESSION['id']."";
    header("location: ./blogs.php");
}
?>

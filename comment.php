<?php
$conn = mysqli_connect("localhost","root","","blog") or die(mysql_error());
session_start();
    //echo "Started Session"."<br>";

      $user_name=$_POST['name'];
      $comm=$_POST["comment"];
      echo $user_name;
    $query = "INSERT INTO COMMENT (`username`,`comment`) VALUES ('$user_name','$comm');";
     //echo "Stored Query"."<br>";
     $dummy = mysqli_query($conn, $query) or die(mysql_error());
     echo "Success";
 ?>

<?php
  //config your database
  $host = "localhost";
  $user = "root";
  $password = "";
  $db= "soa";
  $conn = mysqli_connect($host, $user, $password, $db);

  if (mysqli_connect_errno()){

    	die("Disconnect. ".mysqli_connect_error());
  
  } 
?>
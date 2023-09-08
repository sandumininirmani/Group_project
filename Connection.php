<?php 
  $dbServer="localhost";
  $dbUser="root";
  $dbPass="";
  $database="group";

  //SQL Connection eka
  $conn=mysqli_connect($dbServer,$dbUser,$dbPass,$database);

  if($conn){
      echo "Database Connection Success";
  }else{
      echo "Database Connection Not Success";
  }

?>
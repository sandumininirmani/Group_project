<?php 
include "Connection.php";
  //delete e valu alla gannawa 
if(isset($_GET['deleteid'])){
    $CourseNumber=$_GET['deleteid'];

    // delete query
    
    $sql="DELETE FROM `details` WHERE `CourseNumber`= '$CourseNumber'";

    $Result=mysqli_query($conn,$sql);
    //aye display page ekata yanna
    if($Result){
        header('location:Display.php');
    }
}


?>
<?php 
include "Connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
    <style>
       img{
        width:90%;
        margin:10px;
       } 
       td{
        width:10%;
       }
       table{
        background-color: #191c29;
        color:white;
       }
       th{
        font-size:25px;
       }
       td{
        font-size:25px;
       }
       .delete{
        background-color:#F70745;
        padding:20px 40px;
        margin:30px;
        border-radius:8px;
       }
       .delete:hover{
        background-color:#F15771;
       }
       .delete a:hover{
        color:black;
       }
       .delete a{
        color:white;
        text-decoration:none;
        font-size:20px;
       } 

       .update{
        background-color:#048418 ;
        padding:20px 40px;
        margin:30px;
        border-radius:8px;
       }
       .update a{
        color:white;
        text-decoration:none;
        font-size:20px;
       }
       .update:hover{
        background-color:#23C00D ;
       }
       .update a:hover{
        color:black;
       }
       /* .Add{
           width:6%;
           Height:6%;
        color:white;
        padding:2px;
        background:#979A9A;
        margin:5px;      
        border-radius:7px;
        border:none;
        font-size:18px;
       }
       .Add:hover{
        background-color:#C4BCC1;
       } */

 button {
  margin: 20px;
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}

/* ADD Button */
 .btn-5 {
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  border: none;
  background: rgb(255,27,0);
background: black;
}
.btn-5:hover {
  color:black;
  background: transparent;
   box-shadow:none;
}
.btn-5:before,
.btn-5:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: white;
  box-shadow:
   -1px -1px 5px 0px #fff,
   7px 7px 20px 0px #0003,
   4px 4px 5px 0px #0002;
  transition:400ms ease all;
}
.btn-5:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.btn-5:hover:before,
.btn-5:hover:after{
  width:100%;
  transition:800ms ease all;
}


/* Update Button */
/* 2 */
.btn-2 {
  background: rgb(96,9,240);
  background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);
  border: none;
  
}
.btn-2:before {
  height: 0%;
  width: 2px;
}
.btn-2:hover {
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .5), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
}


/* 11 */
/* Delete */
.btn-11 {
  border: none;
  background: rgb(251,33,117);
    background: linear-gradient(0deg, rgba(251,33,117,1) 0%, rgba(234,76,137,1) 100%);
    color: #fff;
    overflow: hidden;
}
.btn-11:hover {
    text-decoration: none;
    color: #fff;
}
.btn-11:before {
    position: absolute;
    content: '';
    display: inline-block;
    top: -180px;
    left: 0;
    width: 30px;
    height: 100%;
    background-color: #fff;
    animation: shiny-btn1 3s ease-in-out infinite;
}
.btn-11:hover{
  opacity: .7;
}
.btn-11:active{
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
}


@-webkit-keyframes shiny-btn1 {
    0% { -webkit-transform: scale(0) rotate(45deg); opacity: 0; }
    80% { -webkit-transform: scale(0) rotate(45deg); opacity: 0.5; }
    81% { -webkit-transform: scale(4) rotate(45deg); opacity: 1; }
    100% { -webkit-transform: scale(50) rotate(45deg); opacity: 0; }
}
   
body{
        background-color:#7B7D7D;
       }


 .btn-8 {
  background-color: #F385BC;
  background-image: linear-gradient(315deg, #F385BC 0%, #980816 74%);
  line-height: 42px;
  padding: 0;
  border: none;
  margin-left:1190px;
}
.btn-8 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-8:before,
.btn-8:after {
  position: absolute;
  content: "";
  right: 0;
  bottom: 0;
  background: #9C0720;
  /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
  transition: all 0.3s ease;
}
.btn-8:before{
   height: 0%;
   width: 4px;
}
.btn-8:after {
  width: 0%;
  height: 4px;
}
.btn-8:hover:before {
  height: 100%;
}
.btn-8:hover:after {
  width: 100%;
}
.btn-8:hover{
  background: transparent;
}
.btn-8 span:hover{
  color: #600615;
  font-size:18px;
}
.btn-8 span:before,
.btn-8 span:after {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  background: #9C0720;
  /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
  transition: all 0.3s ease;
}
.btn-8 span:before {
  width: 4px;
  height: 0%;
}
.btn-8 span:after {
  height: 4px;
  width: 0%;
}
.btn-8 span:hover:before {
  height: 100%;
}
.btn-8 span:hover:after {
  width: 100%;
}  
    </style>
</head>
<body>
    <a href="Navbar.php"><button class="custom-btn btn-5"><span><b>Display All Record</b></span></button></a>
   
    
<table border=2>
    
    <tr>
        <!--table heder -->
    <th>CourseNumber</th>
    <th>CourseName</th>
    <th>Level</th>
    <th>Duration</th>
    <th>Instroctoret</th>
    <th>CourseFee</th>
     <th>Image </th> 
    <th colspan=2>Operater</th>
         
    </tr>

    <?php 
        $sql="SELECT * FROM `details`";
        $Result=mysqli_query($conn,$sql);


    if($Result){

        while($Row=mysqli_fetch_assoc($Result)){

            //input data variable walata gaththa
            $CourseNumber=$Row['CourseNumber'];
            $CourseName=$Row['CourseName'];
            $Level=$Row['Level'];
            $Duration=$Row['Duration'];
            $Instroctoret=$Row['Instroctoret'];
            $CourseFree=$Row['CourseFree'];
            $Image=$Row['Image'];

           //e variable table eke td walata set kara
            echo '<tr>
            <td>'.$CourseNumber.'</td>
            <td>'.$CourseName.'</td>
            <td>'.$Level.'</td>
            <td>'.$Duration.'</td>
            <td>'.$Instroctoret.'</td>
            <td>'.$CourseFree.'</td>

            
            <td><img src="./images/'.$Image.'"></td>
           
           

            <td><button class="delete custom-btn btn-11 dot"><a href="Delete.php? deleteid='.$CourseNumber.'">Delete</a></button></td>
            <td><button class="update custom-btn btn-2"><a href="Update.php? updateid='.$CourseNumber.'">Update</a></button></td>
            </tr>';
            

        }
      //  echo "Select Query Ok";


       
    }
    ?>
  </table>

  <a href="Home.php"><button class="custom-btn btn-8"><span><b>Logout</b></span></button></a>
</body>
</html>
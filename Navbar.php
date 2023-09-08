<?php 
    include "Connection.php";

    $query="SELECT * FROM `details`";
    $Result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown Navbar</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="neeraj.ico">

  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <style>

* {
  padding: 0;
  margin:0;
}
body { 
  height: 1000px;
}
div.navbar > div {
  float: left;
  padding : 25px 40px;
}
div.navbar::after {
  content: "";
  clear: both;
  display: table;
}
div.navbar  {
  background-color: black;
  color:white;
  font-family: "poppins";
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  font-size:25px;
}
div.dropdown-content {
  display: none;
  position: absolute;
  top: 70px;
  left: 285px;
  z-index: 1;
}
div.dropdown-content>ul {
  width: 160px;
  overflow: hidden;
  background-color: grey;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
div.dropdown-content>ul>li {
  list-style: none;
  padding: 10px 20px;
}
div.dropdown-content>ul>li:hover {
  background-color: rgb(184, 184, 184);
}
div.more:hover {
  background-color: #424949;
  transition: 0.3s ease-in-out;
}
.more:hover .dropdown-content {
  transition: 0.5s ease;
  display: block;
}

a{
    text-decoration:none;
    color:#ffffff;
    font-size:25px;
}
iframe{
  width:100%;
  height:920px;
}
/* .fot{
  width:100%;
  height:100px;
  padding:20px;
  background-color:black;
} */

.footer{
     background-color: black;
     font-size: 20px;
     padding: 20px;
     color: white;
     text-align: center;  
     margin-top: 1400px;
     margin-left: 10px;
     margin-right: 10px;
      
        }
 .icondown{
       background-color: white;
   }




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
.btn-11 {
  border: none;
  background: rgb(251,33,117);
    background: linear-gradient(0deg, rgba(251,33,117,1) 0%, rgba(234,76,137,1) 100%);
    color: #fff;
    overflow: hidden;
    margin: 20px;
    margin-Left:200px;
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

/* .navbar:hover,div.navbar.expanded {
width:250px;
overflow:visible;
} */
    </style>

</head>

<body>
  <div class="navbar">
  <div class="home more"><a href="Register.php"><span>Home</span></a></div>

    <div class="about more">About</div> 

    <div class="more">
      <div>Courses</div>
      <div class="dropdown-content">
        <ul Value="<?php echo $CourseName;?>">
          <li>
          <?php 
               while ($row=mysqli_fetch_assoc($Result)) {

                $CourseName=$row['CourseName'];
                $CourseNumber=$row['CourseNumber'];

                echo "<li><a class='dropdown-content' target='course_frame' href='Card1.php? Selectid=".$CourseNumber."'>$CourseName</a></li>";
                
                } ?>   

              <li><hr></li>
              <li><a class='dropdown-item' target='course_frame' href='AllCourses1.php'>All Courses</a></li>

          </li>
          
        </ul>
      </div>
          

    </div>

     <div class="home more"><a href="AllCourses1.php"><span>All Courses</span></a></div>
   
    <div class="home more">Programes</div>  
    <div class="home more">Staf</div> 

    <a href="Home.php"><button class="custom-btn btn-11"><b><span>Logout</b></span></button></a>
  </div>




<iframe name="course_frame"></iframe>
<div class="fot">

<div class="footer">
        <h3>Find me on social media</h3>
<!-- 
                <img src="D/practical cv/icons/facebook.png" class="icondown">
                <img src="icons/instagram.png" class="icondown">
                <img src="icons/tiktok.png" class="icondown">
                <img src="icons/twitter.png" class="icondown">
                <img src="icons/youtube.png" class="icondown"> -->

        <p>Powered by <i><u>Sandumini</u></i></p>
    </div>

</div>

</body>
</html>










             
 
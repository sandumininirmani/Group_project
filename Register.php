<?php 
    include "Connection.php";

    if(isset($_POST['submit'])){
        $CourseNumber=$_POST['CourseNumber'];
        $CourseName=$_POST['CourseName'];
        $Level=$_POST['Level'];
        $Duration=$_POST['Duration'];
        $Instroctoret=$_POST['Instroctoret'];
        $CourseFree=$_POST['CourseFree'];
      // $Image=$_POST['Image'];


      //image eka database ekata ganna
      $filename=$_FILES["Image"]["name"];      
      $tempname=$_FILES["Image"]["tmp_name"];       
      $folder="./images/".$filename;   

      if(move_uploaded_file($tempname,$folder)){
         echo "<h1>Upload Success</h1>";
     }else{
         echo "<h1>Upload Not Success</h1>";
     }




        $sql="INSERT INTO `details`(`CourseNumber`, `CourseName`, `Level`, `Duration`, `Instroctoret`, `CourseFree`,`Image`) VALUES('$CourseNumber','$CourseName','$Level','$Duration','$Instroctoret','$CourseFree','$filename')";
   
        if(mysqli_query($conn,$sql)){
         
           header('location:Display.php');
          }else{
            echo "Data Insert Not Success";
        }

    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <style>
html, body * { box-sizing: border-box; font-family: 'Open Sans', sans-serif; }

body {
  background:
    linear-gradient(
    rgba(246,247,249,0.8),
    rgba(246,247,249,0.8)),
    url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/sky-clouds-cloudy-mountain.jpg) no-repeat center center fixed;
  background-size: cover;
}

.container {
  width: 100%;
  height:80%;
  padding:50px 10px;
  padding-bottom: 150px;
  margin:50px 20px;
} 



.frame {
  /* height: 100%; */
  width: 35%;
  background: #191c29;
  background-size: cover;
  margin-left: auto;
  margin-right: auto;
  border-top: solid 1px rgba(255,255,255,.5);
  border-radius: 5px;
  box-shadow: 0px 2px 7px rgba(0,0,0,0.2);
  overflow: hidden;
  transition: all .5s ease;
}

.frame-long {
  height:70%;
}

.frame-short {
  /* height: 80%; */
  margin-top: 50px;
  box-shadow: 0px 2px 7px rgba(0,0,0,0.1);
}



.nav{
  background: #191c29;
  width: var(--card-width);
  height: var(--card-height);
  padding: 3px;
  position: relative;
  border-radius: 6px;
  justify-content: center;
  align-items: center;
  text-align: center;
  display: flex;
  font-size: 1.5em;
  color: rgb(88 199 250 / 0%);
  cursor: pointer;
  font-family: cursive;
}

.nav:hover {
  color: rgb(88 199 250 / 100%);
  transition: color 1s;
}
.nav:hover:before, .nav:hover:after {
  animation: none;
  opacity: 0;
}


.nav::before {
  content: "";
  width: 104%;
  height: 102%;
  border-radius: 8px;
  background-image: linear-gradient(
    var(--rotate)
    , #5ddcff, #3c67e3 43%, #4e00c2);
    position: absolute;
    z-index: -1;
    top: -1%;
    left: -2%;
    animation: spin 2.5s linear infinite;
}

.nav::after {
  position: absolute;
  content: "";
  top: calc(var(--card-height) / 6);
  left: 0;
  right: 0;
  z-index: -1;
  height: 100%;
  width: 100%;
  margin: 0 auto;
  transform: scale(0.8);
  filter: blur(calc(var(--card-height) / 6));
  background-image: linear-gradient(
    var(--rotate)
    , #5ddcff, #3c67e3 43%, #4e00c2);
    opacity: 1;
  transition: opacity .5s;
  animation: spin 2.5s linear infinite;
}



 .nav {
  width: 100%;
  height: 50px;
  padding-top: 20px;
  opacity: 1;
  transition: all .5s ease;
}
/*
.nav-up {
  transform: translateY(-150px);
  opacity: 0;
} */

/* heder eka */
li {
  padding-left: 10px;
  font-size: 25px;
  display: inline;
  text-align: left;
  text-transform: uppercase;
  padding-right: 10px;
  color: #ffffff;
}

/* .signin-active a {
  padding-bottom: 5px;
  color: #ffffff;
  text-decoration: none;
  border-bottom: solid 2px #1059FF;
   transition: all .25s ease; 
  cursor: pointer;
} */

/* .signin-inactive a {
  padding-bottom: 0;
  color: rgba(255,255,255,.3);
  text-decoration: none;
  border-bottom: none;
  cursor: pointer;
} */



.form-signin {
  width: 430px;
  height: 375px;
  font-size: 16px;
  font-weight: 300;
  padding-left: 37px;
  padding-right: 37px;
  padding-top: 55px;
  padding-bottom:550px;
  transition: opacity .5s ease, transform .5s ease;
 
}

.form-signin-left {
  transform: translateX(-400px);
  opacity: .0;
}





.form-signin input{
  color: #ffffff;
  font-size: 15px;
 
}

/* bt input design */
.form-styling {
  width: 100%;
  height: 35px;
	padding-left: 15px;
	border: none;
	border-radius: 20px;
  margin-bottom: 20px;
  background: rgba(255,255,255,.2);
}

label {
  font-weight: 400;
  text-transform: uppercase;
  font-size: 13px;
  padding-left: 15px;
  padding-bottom: 10px;
  color: rgba(255,255,255,.7);
  display: block;
}

:focus {outline: none;
}

.form-signin input:focus, textarea:focus {
    background: rgba(255,255,255,.3);
    border: none; 
    padding-right: 40px;
    transition: background .5s ease;
 }

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  display: none;
}

[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 85px;
  padding-top: 2px;
  cursor: pointer;
  margin-top: 8px;
}

[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
}

[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  width: 65px; 
  height: 30px;
  background: rgba(255,255,255,.2);
  border-radius: 15px;
  left: 0; 
  top: -3px;
  transition: all .2s ease;
}

[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  width: 10px; 
  height: 10px;
  background: rgba(255,255,255,.7);
  border-radius: 50%;
  top: 7px; 
  left: 10px;
  transition: all .2s ease;
}

/* on checked */
[type="checkbox"]:checked + label:before {
  background: #0F4FE6; 
}

[type="checkbox"]:checked + label:after {
  background: #ffffff;
  top: 7px; 
  left: 45px;
}

[type="checkbox"]:checked + label .ui,
[type="checkbox"]:not(:checked) + label .ui:before,
[type="checkbox"]:checked + label .ui:after {
  position: absolute;
  left: 6px;
  width: 65px;
  border-radius: 15px;
  font-size: 14px;
  font-weight: bold;
  line-height: 22px;
  transition: all .2s ease;
}

[type="checkbox"]:not(:checked) + label .ui:before {
  content: "no";
  left: 32px;
  color: rgba(255,255,255,.7);
}

[type="checkbox"]:checked + label .ui:after {
  content: "yes";
  color: #ffffff;
}

[type="checkbox"]:focus + label:before {
  box-sizing: border-box;
  margin-top: -1px;
}



.btn-signin {
  
  float: left;
  padding-top: 8px;
  width: 70%;
  height: 35px;
  border: none;
  border-radius: 50px;
  margin: 5px 50px;
  background-color: #663dff;
  border-radius: 5px;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  transition: all 0.3s ease;
}

/* .btn-animate {
  float: left;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  text-align: center;
  color: rgba(255,255,255, 1);
  padding-top: 8px;
  width: 100%;
  height: 35px;
	border: none;
	border-radius: 20px;
  margin-top: 23px;
  background: rgba(250,250,250,1);
  left: 0px;
  top: 0px;

} */



h1 {
  color: #ffffff;
  font-size: 35px;
	font-weight: 300;
  text-align: center;
}



/* refresh button styling */

.refreshicon:hover {
  /* transform: rotate(2deg); */
 
  background: #b621fe;
 

}

.bbt{
    margin:20px 50px;
   
}     
.Image{
width:100%;
}  
input[type="file"]::file-selector-button:hover{
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


    </style>
</head>
<body>

<div class="container">
  <div class="frame">
    <div class="nav">
      <ul>
        <li class="signin-active">Register Form</li>
        <!-- <li class="signup-inactive"><a class="btn">Sign up </a></li> -->
      </ul>
        </div>
        <div ng-app ng-init="checked = false">

          <form class="form-signin" action="" method="post" name="form" enctype="multipart/form-data">

             <label for="CourseNumber">Course Number</label>
             <input class="form-styling" type="text" name="CourseNumber" placeholder="" required onkeyup="this.setAttribute('value', this.value);"/>

             <label for="CourseName">Course Name</label>
             <input class="form-styling" type="text" name="CourseName" placeholder="" required onkeyup="this.setAttribute('value', this.value);"/>

             <label for="Level">Level</label>
             <input class="form-styling" type="text" name="Level" placeholder="" required onkeyup="this.setAttribute('value', this.value);"/>

             <label for="Duration">Duration</label>
             <input class="form-styling" type="text" name="Duration" placeholder=""/>

             <label for="Instroctoret">Instroctoret</label>
             <input class="form-styling" type="text" name="Instroctoret" placeholder=""/>

             <label for="CourseFree">Course Free</label>
              <input class="form-styling" type="text" name="CourseFree" placeholder="" required onkeyup="this.setAttribute('value', this.value);"/>
            
              <label for="Image">Upload Image</label>
              <input type="file" name="Image" id="formFile" placeholder="" required onkeyup="this.setAttribute('value', this.value);"/>

              

                <input type="submit" name="submit" class="btn-signin bbt refreshicon">




  <!-- ghhhhh -->



                <!-- <a class="btn-signin">Sign in</a> -->
            </div>
				        </form>
        
				    
    </div>
</div>

</body>
</html>
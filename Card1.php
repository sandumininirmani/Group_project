<?php
  include "Connection.php";
  $_GET['Selectid'];
    $slectId=$_GET['Selectid'];
    $sqlselectQuery="SELECT * FROM `details` WHERE `CourseNumber`='$slectId'";
    $row=mysqli_fetch_assoc(mysqli_query($conn,$sqlselectQuery));
    $CourseName=$row['CourseName'];
    $Level=$row['Level'];
    $Duration=$row['Duration'];
    $Instroctoret=$row['Instroctoret'];
    $CourseFree=$row['CourseFree'];
    $Image=$row['Image'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-color: #ecf9ff;
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
  margin: 0 20px;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 80%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 6rem;
  background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}

    </style>
</head>
<body>
<div class="main">
  <h1></h1>
  <ul class="cards">
   
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="./images/<?php echo $Image ;?>"></div>
        <div class="card_content">
          <h2 class="card_title"><?php echo $CourseName ;?></h2>
          <p class="card_text"><?php echo $Duration ;?></p>
          <h3><?php echo $Level ;?></h3>
          <P><?php echo $Instroctoret ;?></P>
          <P><?php echo $CourseFree ;?></P>
          <button class="btn card_btn"><a href="nav.php">Next</a></button>
        </div>
      </div>
    </li>
   
  </ul>
</div>

<h3 class="made_by">♡ Courses ♡</h3>
</body>
</html>
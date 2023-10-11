<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="navbar">
    <img src="images/logo.png" style="height:40px;float:left;margin-left:1%;margin-top:5px">
    <a href="index.html" class="navbar-font" style="font-weight:600;font-size:22px">Team P1G5</a>
    <a class="navbar-font" style="float:right">CONTACT</a>
    <div class="dropdown navbar-font" style="float:right">
      <button class="dropbtn">TEAM</button>
      <div class="dropdown-content">
        <a href="team_adrian.html">Adrian</a>
        <a href="team_kallie.html">Kallie</a>
        <a href="team_daniel.html">Daniel</a>
        <a href="team_jeffrey.html">Jeffrey</a>
        <a href="team_pranav.html">Pranav</a>
        <a href="team_david.html">David</a>
      </div>
    </div>
    <div class="dropdown navbar-font" style="float:right">
      <button class="dropbtn">PROJECTS</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
  </div>
  
  <img src="images/home-image.png" style="max-width:100%;height:auto;margin-bottom:20px;">
';
  
include "dbTeam.php";

echo '
</body>
</html>
';

?>
<?php include "includes/big-config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/big-nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/lightbox.css" />

    <!-- ADDED GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> <?=$title?></a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php">Home</a></li>
      <li><a href="siteapp.php">Site Vs App</a></li>
      <li><a href="galleries.php">Galleries</a></li>
      <li><a href="flexbox.php">Flexbox</a></li>
      <li><a href="shoppingcarts.php">Shopping Carts</a></li>
      <li><div class="dropdown">
            <a href="javascript:void(0);" class="dropbtn" onclick="googleDropdown()">Google 
              <i class="fa fa-caret-down"></i>
            </a>
              <div class="dropdown-content" id= "dropdownMenu">
                <a href="map.php">Map</a>
                <a href="calendar.php">Calendar</a>
                <a href="youtube.php">YouTube</a>
              </div>
          </div></li>
      <li><a href="webcam.php">WebCam</a></li>
      <li><a href="../index.php">WEB120 Portal</a></li>
      <!-- Toggle menu when viewport is changed. -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
<h2 class="pageID"><?=$PageID?></h2>

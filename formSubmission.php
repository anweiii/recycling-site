<?php
  //cookies
  $subName =  $_POST['subName'];
  $subEmail = $_POST['subEmail'];

  setcookie( "subName", $subName, time() + 36000 );
  setcookie( "subEmail", $subEmail, time() + 36000 );
	//get fields
	$name = $_POST["subName"];
	$email = $_POST["subEmail"];
	$title = $_POST["subTitle"];
	$content = $_POST["subContent"];

	//open file and append to new post to end
	$file = fopen("submissions.txt", "a");
	fwrite($file, "Title: $title \n");
	fwrite($file, "Email: $email \n");
	fwrite($file, "Name: $name \n");
	fwrite($file, "Content: $content \n\n");

	fclose($file);
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<title>Local Advocacy</title>
	<meta charset="UTF-8">
	<meta name="description" content="ENTER DESCRIPTION HERE">
	<meta name="author" content="Jaclyn Ngo">
  <link rel="stylesheet" href="index.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
</head> 

<body>
<!-- BODY GOES HERE -->
  <div class="logo">
    <a href="index.html">
    <img src="logo.png" alt="Logo" width="100" height="100">
    </a>
  </div> <!-- END logo -->

  <div class="header">
      <ul>
        <li><a href="sustainability.html">Sustainability</a></li>
        <li><a href="recyclables.html">Local Recycling</a></li>
        <li><a href="othercities.html">Other Cities</a></li>
        <li class="dropdown"><a href="advocacy.html" class="dropbtn">Advocacy</a>
          <div class="dropdown-content">
          <a href="advocacy-global.html">Global</a>
          <a href="advocacy-economic.html">Economic</a>
          <a href="advocacy-local.html">Local + Submissions</a>
          </div>
        </li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
  </div> <!-- END header -->
  <div class="innerContent">

  <br>
  <h1 class="pageTitle">Direct Action + Submissions  </h1>
  <ul>
      <li>Local austin recycling protests + movements</li>
      <li>Campus + texas zero waste initiatives, artists working w recycling, challenges faced in TX </li>
  </ul>

  <h3> Thank you for submitting! </h3>
  <p> <a href="advocacy-local.php"> Submit another post. </a></p>
  <p><a href="community-posts.php">Read Community Posts. </a></p>
	</div>

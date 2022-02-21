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
          <a href="advocacy-local.php">Local + Submissions</a>
          </div>
        </li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
  </div> <!-- END header -->
  <div class="innerContent">

  <br>
  <h1 class="pageTitle">Community Posts</h1>
	<p> Want to contribute? <a href="advocacy-local.php">Submit a post.</a></p>
	<br> 
	<?php
		$fn = fopen("submissions.txt","r");
  
		while(!feof($fn))  
		{
			$line = fgets($fn);
			$info = explode(":", $line);
			if ($info[0] == "Title")
			{
				echo "<div>";
				echo "<h2> " . $info[1] . "</h2>";
			}
			elseif ($info[0] == "Content")
			{
				echo "<p>";
				echo $info[1];
				echo "</p>";
				echo "</div>";
				echo "<br>";
			}
			else
			{
				echo "<p>";
				echo $info[1];
				echo "</p>";
			}
		}

		fclose($fn);
	?>

  </body></html>
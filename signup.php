<html lang="en">

<head>
	<title>Local Advocacy</title>
	<meta charset="UTF-8">
	<meta name="description" content="ENTER DESCRIPTION HERE">
	<meta name="author" content="Anna Crawford">
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

<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	$file = fopen ("record.txt", "r");
   	$userId = $_POST["userId"];
   	$password = $_POST["password"];

	while (!feof($file)){
   		// Verify correct info
		$line = fgets($file);
		$line = str_replace("\n", "", $line);
		$UserPass = explode(":", $line);
		$checkUser[$UserPass[0]] = $UserPass[1];
		}
	fclose($file);
	$file = fopen ("record.txt", "a");


	if (array_key_exists($userId, $checkUser)){
		echo "<p>Username taken. Try again.</p>";
	}


	else{
		fwrite($file, "\n". $userId. ":". $password);
		fclose($file);
    	setcookie("Id", $userId, time()+120);
    	setcookie("password", $password, time()+120);
		$path = "Location: ". $_SESSION['currentPath'];
      	header($path);

      	die;

	}
	fclose($file);
}
?>
	<form method="POST" action="signup.php">
	<br>
	<div class="signup"><a href = "login.php">Log in here</a></div>
	<br>
    	<div class="signup">Username: 
      	<input type="text" name="userId" autofocus></div>
    	<div class="signup">Password: 
      	<input type="password" name="password">
    	</div><br>
    	<div class="signup"><input type="submit" value="Sign Up"></div>
  	</form>
	<style>.signup{margin-left: 155px}</style>
</html>
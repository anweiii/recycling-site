<?php

$insertHTML = <<<INSERT
<html lang="en">

<head>
	<title>Register Account</title>
	<meta charset="UTF-8">
	<meta name="description" content="SQL">
	<meta name="author" content="Jaclyn Ngo">
	<link rel="stylesheet" href="index.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
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
    </div>

	<h1>Register Account</h1>
	<br><br>
        <form id="insert" action="registerAccount.php" method="post">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="USERNAME"/></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="PASSWORD"/></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Register" name="insert"/>
        </form>

	<br>
		<div>Or <a href="loginAccount.php">log in here</a></div>

        <br>
</body>
</html>
INSERT;


function formComplete() {
	if ( trim($_POST['PASSWORD']) == "" || trim($_POST['USERNAME']) == "") {
		echo "Please fill in all fields.";
		return false;
	} else {
		return true;
	}
}


function insertRecord() {
	$server = "spring-2021.cs.utexas.edu";
        $user = "cs329e_bulko_jngo";
        $pwd = "alive+money!lamp";
        $dbName = "cs329e_bulko_jngo";

	$mysqli = new mysqli ($server, $user, $pwd, $dbName);

	$username = $_POST['USERNAME'];
	$password = $_POST['PASSWORD'];

	$command = "INSERT INTO login VALUES ('$username', '$password');";
	$result = $mysqli->query($command);

	$command = "SELECT * FROM login;";
	$result = $mysqli->query($command);

	while ($row = $result->fetch_row()) {
		echo "USERNAME: $row[0], PASSWORD: $row[1]<br><br>";
	}
}

if (isset($_POST['insert'])) {
	if (!formComplete()) {
		echo $insertHTML;
	} else {
		insertRecord();
		header("Location: advocacy-local.php");
	}
} else {
	echo $insertHTML;
}


?>

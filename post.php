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
  <div class="innerContent">

  <br>
  <h1 class="pageTitle">Direct Action + Submissions  </h1>
  <ul>
      <li>Local austin recycling protests + movements</li>
      <li>Campus + texas zero waste initiatives, artists working with recycling, challenges faced in TX </li>
  </ul>
	<p><a href="community-posts.php">Read Community Posts</a></p>

<body>
<form id="subForm" action="formSubmission.php" method="post">
        <h2> Post Submission Form </h2>
        <br>
        Name: <input type = "text"  id = "subName" name = "subName" class= "input" placeholder = "Display Name">
        <?php 
            if(isset($_COOKIE['subName']))
            {
		$val = $_COOKIE['subName'];
                echo $_COOKIE['subName'];
            } 
            else 
            {
                echo "";
            }
        ?>
        <br>
        Email: <input type = "email"  id = "subEmail" name = "subEmail" class= "input" placeholder = "Email">
        <?php 
        if(isset($_COOKIE['subEmail']))
        {
            echo $_COOKIE['subEmail'];
        } 
        else 
        {
            echo "";
        }
        ?>
        <br>
        Display email in public submission?
        <input type="radio" id="subEmailPublic" class= "radio" name="q1" value="true"> <label>Yes</label>
        <input type="radio" id="subEmailPrivate" class= "radio" name="q1" value="true"> <label>No</label>
        <br>
        <br>
        Post Title: <input type = "text"  id = "subTitle" name = "subTitle" class= "input" placeholder = "Post Title">
        <br>
        Post Content:
        <br>
        <textarea id="subContent" name="subContent" rows="4" cols="50" placeholder="Type post content here"></textarea>


        <p>
        <input type = "reset" value = "Clear" class = "button">
        <input type = "button"  value = "Preview" class = "button" onclick = "verifySubmission()" />
        <input type = "submit" value = "Submit" class = "button">
        </p> 
    </form>
    <div id="prevSub">
      
      <h2> Post Preview Appears Here </h2> <br>
      <h3> author </h3>
      <p> content goes here </p>

    </div>


  </div> <!-- END innerContent -->

  <script>


    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
        
    function verifySubmission() {
      if ( document.getElementById("subName").value == "" || document.getElementById("subEmail").value == "" || (document.getElementById("subEmailPublic").checked == false && document.getElementById("subEmailPrivate").checked == false ) || document.getElementById("subTitle").value == "" ||  document.getElementById("subContent").value == "" ){
        //if empty 
        alert("please complete all ")
      } else if (document.getElementById("subEmailPrivate").checked) {
        console.log("gg")
        document.getElementById("prevSub").innerHTML = "<h2>"+ document.getElementById("subTitle").value + "</h2> <br> <h3>"+ document.getElementById("subName").value +"</h3> <p> "+ document.getElementById("subContent").value +"</p> <input type = 'button'  value = 'Submit Post' class = 'button' onclick = 'uploadToServer()' >"    
      } else if (document.getElementById("subEmailPublic").checked) {
        console.log("gg")
        document.getElementById("prevSub").innerHTML = "<h2>"+ document.getElementById("subTitle").value + "</h2> <a href='malito:" + document.getElementById("subEmail").value + "?subject=Your ATX Recycles Post'>"+ document.getElementById("subName").value + "</a> <p> " + document.getElementById("subContent").value;    
      }
  
  
    }
    </script>


</body>
</html>
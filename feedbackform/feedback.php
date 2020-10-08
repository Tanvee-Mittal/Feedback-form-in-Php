<!DOCTYPEhtml>
<html>
<head> 
<title> user feedback </title>
<link rel="stylesheet" href="styles.css">
</head>
<body> 
<h1> FEEDBACK FORM </h1>

<form id= "feed" action= "database.php" method="POST">
<b>NAME:</b><input name="name" type="text" placeholder="your name" />
<br>
EMAIL: <input name="email" type="text" placeholder="email" />
<br>
CONTACT NUMBER: <input name="contact" type="text" placeholder="+91" />
<br>
Comments:
<br>
<textarea cols="32" name="message" rows="5" > Your message
  </textarea>

  <br><br>
  
  <input type ="submit" value="Submit" style="font-family:Cambria font-size:50px" />
  <br><br>
  <input type ="reset" value="Reset"  style="font-family:Cambria font-size:50px" />

</form>
</body>
</html>
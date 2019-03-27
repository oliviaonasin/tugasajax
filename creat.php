<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<body>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		nama_buah	: 
		<input type="text" name="nama_buah" placeholder="nama_buah">
		<br>
		<br>
		vitamin	:
		<textarea name="vitamin" placeholder="Text vitamin"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>
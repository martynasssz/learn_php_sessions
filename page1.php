<?php
	if(isset($_POST['submit'])) { 
		session_start(); // Star the session (tam, kad pradeti sesija) //Naudoti visur kur bus sesija

		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);

		header('Location: page2.php');//redirect to new page using header function

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Sesions</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="Enter name">
		<br>
		<input type="email" name="email" placeholder="Enter Email">
		<br>
		<input type="submit" name="submit" value="Submit">		
	</form>
</body>
</html>
<?php
   session_start(); //Naudoti visur kur bus sesija

   //We session update any time
   $_SESSION['name'] = 'Andrius Paulauskas'; //atsinaujis vardas is page3.php ir cia. 

   $name = $_SESSION['name'];
   $email= $_SESSION['email'];

   
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	<h5>Thank you <?php echo $name; ?>, You have subsribed with the email <?php echo $email; ?></h5>
	<a href="page3.php">Go to page 3</a>
</body>
</html>
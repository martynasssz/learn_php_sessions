<?php
	session_start(); //Naudoti visur kur bus sesija

	print_r($_SESSION);//gausime reiksmes esancias masyvo viduje

	//$name = $_SESSION['name'];
	//papildomai, galime parasyti, jei nera sisijos vardo, tada rodys 'Guest' ir nemes pastabos
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';

    //$email = $_SESSION['email'];
    //papildomai, galime parasyti, jei nera sisijos vardo, tada rodys 'Not Subscribed' ir nemes pastabos
    $name = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';


	//kai sukureme page4.php padareme unset name. Per nasykle paleidome page4.php, pasirode tuscias langas, tada uzkrovem page3.php ir gavome uzrasa Hello, bei pranesima: Notice: Undefined index: name in C:\xampp\htdocs\Naujas_etapas\website4\page3.php on line 6, nes name jau unsetintas
?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	<h1>Hello <?php echo $name; ?></h1>

</body>
</html>
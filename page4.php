<?php
//If we want unset we use session unset
	session_start(); //Naudoti visur kur bus sesija

	//kad atjungti pirmiau paleidziame si puslapi
	unset($_SESSION['name']); //reiksmes atjungimas nuo sesijos kitamojo

	//kad atjungti pirmiau paleidziame si puslapi
	session_destroy(); //sesijos sunaikinimui

?>
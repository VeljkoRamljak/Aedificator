<?php

session_start();

if (!(isset($_SESSION['ime']))){
	header("Location: index.php?greska=3"); 
	exit();
}

unset($_SESSION['ime']);
session_destroy();

header("Location: index.php?greska=4"); 
exit();

?>
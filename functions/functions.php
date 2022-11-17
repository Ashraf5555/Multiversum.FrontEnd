<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'multiversum';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
 echo'<!DOCTYPE html>';
  echo'<html>';
    echo'<head>';
	  echo'<meta charset="utf-8">';
	  echo'	<title>dashboard</title>';
	  echo'	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">';
	  echo'	<link rel="stylesheet" href="../css/Stylesheet.css">';
	echo'</head>';
	echo'<body>';
	   echo'<nav class="navtop">';
	      echo'<div>';
		  echo'<h1>Multiversum</h1>';
          echo'  <a href="../loginfile/dashboard.php"><i class="fas fa-home"></i>Home</a>';
		  echo'<a href="../contactfile/read.php"><i class="fas fa-address-book"></i>Contacts</a>';
		  echo'<a href="..//read.php"><i class="fas fa-address-book"></i>product</a>';
		  echo'<a href="..//read.php"><i class="fas fa-address-book"></i>User</a>';
		  echo'<a href="../loginfile/logout.php"><i class="fas fa-address-book"></i>Afmelden</a>';
		  echo'</div>';
		  echo' </nav>';

}
function template_footer() {
	echo' </body>';
	echo' </html>';

}
?>
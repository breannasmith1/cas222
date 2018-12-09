<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=breannas_aceinthehole', 'breannas_breannas', 'Bagheer@1');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.inc.html.php';
  exit();
}

if  (isset($_POST['myname']) and ($_POST['honeypot'] == '')){
	
	$honeypot = $_POST['honeypot'];
	$myname = $_POST['myname'];
	$myemail = $_POST['myemail'];
    $mymessage = $_POST['mymessage'];
	

try { $sql = 'INSERT INTO contact SET
	name = :myname,
	email = :myemail,
    message = :mymessage';
	 
	$s = $pdo->prepare($sql);
	 $s->bindValue(':myname', $_POST['myname']);
	 $s->bindValue(':myemail', $_POST['myemail']);
     $s->bindValue(':mymessage', $_POST['mymessage']);
     $s->execute();
   }

catch (PDOException $e) {
  $error = 'Error in the hole: ' . $e->getMessage();
  include '../includes/error.inc.html.php';
  exit();
}
	include 'success.html.php';
}

else {
	include 'contact.php';
}
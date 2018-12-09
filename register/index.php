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

if  (isset($_POST['myfname']) and ($_POST['honeypot'] == '')){
	
	$honeypot = $_POST['honeypot'];
    $saturdayEvent = $_POST['saturdayEvent'];
    $sundayEvent = $_POST['sundayEvent'];
    $myvolunteer = $_POST['myvolunteer'];
	$myfname = $_POST['myfname'];
	$mylname = $_POST['mylname'];
	$myemail = $_POST['myemail'];
	$mygender = $_POST['mygender'];
	$myage = $_POST['myage'];
	$myemergencyname = $_POST['myemergencyname'];
    $myemergencyphone = $_POST['myemergencyphone'];
    $mycomments = $_POST['mycomments'];
	

try { $sql = 'INSERT INTO register SET
	saturdayEvent = :saturdayEvent,
    sundayEvent = :sundayEvent,
    myvolunteer = :myvolunteer,
	first_name = :myfname,
	last_name = :mylname,
	email = :myemail,
	gender = :mygender,
	age = :myage,
	emergency_name = :myemergencyname,
    emergency_phone = :myemergencyphone,
    comments = :mycomments';
	 
	$s = $pdo->prepare($sql);
     $s->bindValue(':saturdayEvent', $_POST['saturdayEvent']);
     $s->bindValue(':sundayEvent', $_POST['sundayEvent']);
     $s->bindValue(':myvolunteer', $_POST['myvolunteer']);
	 $s->bindValue(':myfname', $_POST['myfname']);
	 $s->bindValue(':mylname', $_POST['mylname']);
	 $s->bindValue(':myemail', $_POST['myemail']);
	 $s->bindValue(':mygender', $_POST['mygender']);
	 $s->bindValue(':myage', $_POST['myage']);
	 $s->bindValue(':myemergencyname', $_POST['myemergencyname']);
     $s->bindValue(':myemergencyphone', $_POST['myemergencyphone']);
     $s->bindValue(':mycomments', $_POST['mycomments']);
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
	include 'register.html.php';
}
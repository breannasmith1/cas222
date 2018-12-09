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
  include 'includes/error.html.php';
  exit();
}

set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );

include 'home/home.html.php';
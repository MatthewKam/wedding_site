<?php 

	error_reporting(-1);
	ini_set('display_errors', 1);
	
	header('Content-Type: text/plain');

	include 'config.php';
    $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);

	if (!isset($_POST['first_name']))
		die('error');
	
	if (!isset($_POST['last_name']))
		die('error');

    $sql = 'select allowed_guest from invite where first_name = ? and last_name = ?';
    $stmt = $connection->prepare($sql);
    $stmt->execute(array($_POST['first_name'], $_POST['last_name']));
    $allowed_guest = $stmt->fetch(PDO::FETCH_COLUMN, 0);
	
	if ($allowed_guest === '0')
		die('no_guest');
	
	if ($allowed_guest === '1')
		die('allowed_guest');
	
	
	die('not_found');
	
?>
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

	if (!isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) 
		die('error');

	if (!isset($_GET['step']))
		die('error');
	
    $sql = 'select allowed_guest from invite where first_name = ? and last_name = ?';
    $stmt = $connection->prepare($sql);
    $stmt->execute(array($_POST['first_name'], $_POST['last_name']));
    $allowed_guest = $stmt->fetch(PDO::FETCH_COLUMN, 0);
    $is_going = isset($_POST['is_going']);
	$step = $_GET['step'];
	
	if ($allowed_guest === '0')
		die('thanks');
	
	if ($allowed_guest === '1' && !$is_going)
		die('thanks');
	
	if ($allowed_guest === '1' && $step === '1'){
		die('guest_input');
	} else if ( $allowed_guest === '1' && $step === '2'){
		die('thanks');
	}

	die('not_found');
	
?>
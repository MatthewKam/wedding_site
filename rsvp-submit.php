<?php 

	error_reporting(-1);
	ini_set('display_errors', 1);
	
	header('Content-Type: text/plain');

	include 'config.php';

	function submitInvite($conn, $first_name, $last_name, $email, $is_going, $has_guest = null, $guest_first = null, $guest_last = null){

		$sql = '
			INSERT INTO rsvp (first_name, last_name, email, is_going, has_guest, guest_first, guest_last)
			VALUES (?,?,?,?,?,?,?)
		';
	    $stmt = $conn->prepare($sql);
	    $stmt->execute(array(
	    	$first_name, 
	    	$last_name, 
	    	$email, 
	    	$is_going, 
	    	$has_guest, 
	    	$guest_first,
	    	$guest_last
	    ));
	}

    $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);

	if (!isset($_POST['first_name']))
		die('error');
	
	if (!isset($_POST['last_name']))
		die('error');

	if (!isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) 
		die('error');

	if (!isset($_GET['step']))
		die('error');
	
    $sql = '
	    SELECT allowed_guest 
	    FROM invite 
	    WHERE first_name = ? 
	    AND last_name = ?
    ';
    $stmt = $connection->prepare($sql);
    $stmt->execute(array(
    	$_POST['first_name'], 
    	$_POST['last_name']
    ));
    $allowed_guest = $stmt->fetch(PDO::FETCH_COLUMN, 0);
    $is_going = isset($_POST['is_going']);
	$step = $_GET['step'];
	
	
	if ( $allowed_guest === '0' || ($allowed_guest === '1' && !$is_going) ){
		submitInvite(
			$connection,
			$_POST['first_name'], 
	    	$_POST['last_name'], 
	    	$_POST['email'],  
	    	$is_going ? 1 : 0
	    );

		die('thanks');
	}
	
	if ( $allowed_guest === '1' && $step === '1' )
		die('guest_input'); 

	if ( $allowed_guest === '1' && $step === '2' ){

		if (!isset($_POST['guest_first']))
			die('error');
	
		if (!isset($_POST['guest_last']))
			die('error');

		$going_solo = isset($_POST['going_solo']);

		submitInvite(
			$connection,
			$_POST['first_name'], 
	    	$_POST['last_name'], 
	    	$_POST['email'],  
	    	$is_going ? 1 : 0, 
	    	$going_solo ? 0 : 1,
	    	$_POST['guest_first'], 
	    	$_POST['guest_last']
	    );

    	die('thanks');
	}

	die('not_found');
	
?>
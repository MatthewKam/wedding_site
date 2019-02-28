<?php 
	error_reporting(-1);
	ini_set('display_errors', 1);

	include '../config.php';

	$connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);

	// $stmt = $connection->prepare('TRUNCATE rsvp');
	// $stmt->execute();

	$sql = '
	    SELECT 
	    	r.*, 
	    	DATE_FORMAT(CONVERT_TZ( created_at, "UTC", "US/Pacific" ), "%m/%d/%y") AS created_at_pst,
    		LOWER(CONCAT(r.first_name, " ", r.last_name)) AS name,
    		LOWER(TRIM(CONCAT(r.guest_first, " ", r.guest_last))) AS guest_name
	    FROM rsvp r
	    -- ORDER BY 
	    -- 	r.last_name DESC,
	    -- 	r.first_name DESC
    ';

    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
?>
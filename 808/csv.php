<?php 

	date_default_timezone_set('America/Los_Angeles');

	$rows = include 'pulling-teeth.php';

	$headers = array('#', 'Going', 'First Name', 'Last Name', 'Email', 'Guest', 'First Name', 'Last Name', 'RSVP Date');

	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=rsvp-list-' . date('Ymd-His') . '.csv');

	$output = fopen('php://output', 'w');
	fputcsv($output, $headers);
	
	foreach ($rows as $row) {

		$line = array(
			$row['id'],
			$row['is_going'] === '1' ? 'Yes' : 'No',
			ucwords(strtolower($row['first_name'])),
			ucwords(strtolower($row['last_name'])),
			$row['email'],
			$row['has_guest'] === '1' ? 'Yes' : 'No',
			ucwords(strtolower($row['guest_first'])),
			ucwords(strtolower($row['guest_last'])),
			$row['created_at_pst']
		);

		fputcsv($output, $line);

	}

	fclose($output);
?>
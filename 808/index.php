<?php 
	$rows = include 'pulling-teeth.php';
?>

<html>
<head>
	<title>Susan & Matt Are Getting Married!</title>
	<link rel="icon" type="image/png" href="../favicon.png" />
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/eight-oh-eight.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans|Open+Sans+Condensed:300,700|Rouge+Script" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/header.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="pg-wrp rsvpd-pg inner-pg">
		<div class="sctn sctn-hdr">
			<div class="cntnt-wrp">
				<div class="cntnt">
					<?php include '../includes/header.php' ?>
				</div>
			</div>	
		</div>
		<div class="sctn sctn-1">
			<div class="bar-bg">
				<div class="cover-bg">
					<h1>RSVP'D</h1>
				</div>
			</div>
			<div class="cntnt-wrp">
				<div class="cntnt">
					<a href="/808/csv.php" class="download-csv">Download CSV</a>
					<div class="tble-wrp">
						<div class="title">
							<div class="guest_number">&nbsp;</div
							><div class="is_going">Going</div
							><div class="name">Name</div
							><div class="email">Email</div
							><div class="has_guest">Guest</div
							><div class="guest_name">Name</div
							><div class="date-rsvpd">Date</div>
						</div>
						<div class="table">
							<?php foreach ($rows as $row): ?>
								<div class="more-money">
									<div class="guest_number"><?php echo $row['id'] ?></div
									><div class="is_going"><?php echo $row['is_going'] === '1' ? '<img src="../images/check-green.png" class="check">' : '' ?></div
									><div class="name"><?php echo ucwords($row['name']) ?></div
									><div class="email"><?php echo $row['email'] ?></div
									><div class="has_guest"><?php echo $row['has_guest'] === '1' ? '<img src="../images/check-green.png" class="check">' : ''?></div
									><div class="name"><?php echo ucwords($row['guest_name']) ?></div
									><div class="date-rsvpd"><?php echo $row['created_at_pst'] ?></div>
								</div>
							<?php endforeach?>
						</div>
					</div>			
				</div>
			</div>
		</div>
		<div class="sctn sctn-ftr">
			<div class="cntnt-wrp">
				<div class="cntnt">
					<?php include '../includes/footer.php' ?>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>
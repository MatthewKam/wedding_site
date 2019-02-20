<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/head.php' ?>
</head>
<body>
	<div class="pg-wrp rsvp-pg">
		<div class="sctn sctn-hdr">
			<div class="cntnt-wrp">
				<div class="cntnt">
					<?php include 'includes/header.php' ?>
				</div>
			</div>	
		</div>
		<div class="sctn sctn-1">
			<div class="bar-bg">
				<div class="cover-bg">
					<h1>RSVP</h1>
				</div>
			</div>
			<div class="cntnt-wrp">
				<div class="cntnt">

				</div>
			</div>
		</div>
		<div class="sctn sctn-2">
			<div class="cntnt-wrp">
				<div class="cntnt">
					<div class="frm-wrp">
						<form id="frm">
							<div id="invitee">
								<div class="frm col-l splt-2">
									<label>First Name</label>
									<input type="text" name="first_name">
								</div
								><div class="frm col-r splt-2">
									<label>Last Name</label>
									<input type="text" name="last_name">
								</div>
								<div class="frm">
									<label>Email</label>
									<input type="email" name="email">
								</div>
								<div class="frm">
									<input type="checkbox" name="is_going">
									<p>Are you attending?</p>
								</div>
								<div class="frm" id="has-guest">
									<input type="checkbox" name="has_guest">
									<p>Have a guest?</p>
								</div>
							</div>
							<div id="guest">
								<div class="frm col-l splt-2">
									<label>First Name</label>
									<input type="text" name="guest_first">
								</div
								><div class="frm col-r splt-2">
									<label>Last Name</label>
									<input type="text" name="guest_last">
								</div>
							</div>
							<button type="submit" name="">Submit</button>
							<div id="thanks">
								<h1>Thank you for your RSVP!</h1>
								<p>An email will be sent shortly.</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="sctn sctn-ftr">
			<div class="cntnt-wrp">
				<div class="cntnt">
					<?php include 'includes/footer.php' ?>
				</div>
			</div>	
		</div>
		<script type="text/javascript" src="js/rsvp.js"></script>
	</div>
</body>
</html>
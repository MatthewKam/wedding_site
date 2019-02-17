<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="pg-wrp">
		<div class="sctn sctn-hdr">
			
		</div>
		<div class="sctn sctn-1">
			<?php include '/includes/head.php' ?>
		</div>
		<div class="sctn sctn-2">
			<div class="cntn-wrp">
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
									<input type="text" name="first_name">
								</div>
								<div class="frm">
									<label>Email</label>
									<input type="email" name="email">
								</div>
								<div class="frm">
									<input type="checkbox" name="is_going">
									<p>Are you attending?</p>
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
			<?php include '/includes/footer.php' ?>
		</div>
	</div>
</body>
</html>
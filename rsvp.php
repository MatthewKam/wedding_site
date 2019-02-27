<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/head.php' ?>
	<link rel="stylesheet" type="text/css" href="./css/rsvp.css">
</head>
<body>
	<div class="pg-wrp rsvp-pg inner-pg">
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
						<form id="frm-guest" method="post">
							<div id="invite">
								<h1>Please fill in your info.</h1>
								<div class="frm col-l splt-2">
									<label>First Name</label>
									<input type="text" 
									data-validation="required"
                                	data-validation-error-msg="First name is required." 
                                	name="first_name">
								</div
								><div class="frm col-r splt-2">
									<label>Last Name</label>
									<input type="text" 
									name="last_name"
									data-validation="required"
                                	data-validation-error-msg="Last name is required.">
								</div>
								<div class="frm">
									<label>Email</label>
									<input type="email" 
									name="email"
									data-validation="required"
                                	data-validation-error-msg="Email is required.">

								</div>
								<div class="frm chkbx">
									<label class="checkbox-wrap checkbox-control checkbox">
				                        <input type="checkbox" 
				                        name="is_going" checked/>
				                        <div class="checkbox-indicator"></div>
				                    </label>
									<p>Are you attending?</p>
								</div>
								<button type="submit" name="">RSVP</button>
							</div>
						</form>	
						<form id="frm-has-guest" method="post">
							<div id="guest">
								<h1>Please fill in the name of your guest.</h1>
								<div class="frm chkbx">
									<label class="checkbox-wrap checkbox-control checkbox">
				                        <input type="checkbox" 
				                        name="going_solo" class="solo"/>
				                        <div class="checkbox-indicator"></div>
				                    </label>
									<p>I am not bringing a guest</p>
								</div>
								<div id="guest-first-last">
									<div class="frm col-l splt-2">
										<label>First Name</label>
										<input type="text" 
										name="guest_first"
										data-validation="required"
										data-validation-error-msg="First name is required.">
									</div
									><div class="frm col-r splt-2">
										<label>Last Name</label>
										<input type="text" 
										name="guest_last"
										data-validation="required"
										data-validation-error-msg="Last name is required.">
									</div>
								</div>
							</div>
							<button type="submit" name="">Submit</button>
						</form>
						<div class="thankyou-wrp">
							<div class="thankyou">
								<img src="images/ping-pong.gif" class="ping-pong">
								<div id="thanks">
									<img src="images/rsvp-ty.png">
									<h1>Thank you for your RSVP!</h1>
									<p>An email will be sent shortly.</p>
									<a href="./index.php">
										<div class="line-1"></div>
										<div class="line-2"></div>
									</a>
								</div>
								<div id="guest-again">
									<img src="images/rsvp-ty.png">
									<h1>Please try again!</h1>
									<p>Your name was not found. If the problem persists, please contact the groom/bride.</p>
									<a class="close-modal">
										<div class="line-1"></div>
										<div class="line-2"></div>
									</a>
								</div>
							</div>
							
						</div>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		<script type="text/javascript" src="js/rsvp.js"></script>
		<script>
		    $.validate({
		        validateHiddenInputs: true,
		        onSuccess : function() {
		            $('.thankyou-wrp').fadeIn(300);
		            return true;
		        }
		    });
		</script>
	</div>
</body>
</html>
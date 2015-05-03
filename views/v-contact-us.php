<div class="jumbotron smaller">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="slideDown">Contact Us</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-9 col-md-offset-2">
				<h2 style="text-transform: capitalize !important">Get in touch</h2>
				<p style="margin-bottom: 50px;">
					Have a message for us that isn't already answered on our <a href="info">info</a> page? Then feel free to send us your message and we will reply back to you within 24 hours.
				</p>

				<h2 style="text-transform: capitalize !important">Accessible</h2>
				<p style="margin-bottom: 50px;">
					With a well established customer base around Essex, Norfolk and Suffolk. We are able to get to you in the south east of England quickly and have our services ready at your disposal within hours.
				</p>
			</div>			
		</div>

		<div class="col-md-5">
				<h2 style="text-transform: capitalize !important">Our Address</h2>
				<p style="margin-bottom: 45px;">
					Our business is registered in England and Wales as AK Services Ltd at this address. Company number: #08382310.
				</p>
				<h3 style="text-transform: capitalize !important">
					Andrew Knock<br>
					AK Services Ltd<br>
					11 Ramsey Road<br>
					Hadleigh<br>
					Ipswich<br>
					IP7 6AN
				</h3>
		</div>
	</div>

</div>
<div class="row spikebg">
	<div class="container">
		<div class="row">

			<div class="col-md-12 contact-bg on-contact-page slideUp tab-spacing">
				<form class="form-horizontal" id="contact_form">
					<fieldset>
						<!-- Text input-->
						<div class="col-md-6">
							<div class="col-md-12">
								<input id="name" name="name" type="text" placeholder="Enter your full name here" class="form-control input-md" required="">
							</div>
							<div class="col-md-12">
								<input id="email" name="email" type="text" placeholder="Enter your email address here" class="form-control input-md" required="">
							</div>
							<div class="col-md-12">
								<input id="phone" name="phone" type="text" placeholder="Enter your phone number here" class="form-control input-md" required="">
							</div>
						</div>

						<!-- Textarea -->
						<div class="col-md-6">
							<div class="col-md-12">                     
								<textarea class="form-control"  id="msg" placeholder="What services do you require?" name="msg" cols="6" rows="6"></textarea>
							</div>
							<div class="col-md-12">
								<button id="submit" style="width:100%" name="submit" class="btn btn-primary">Send Message</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>

		</div>
	</div>
</div>
<div class="container">
	<h1 class="center-title">Find us through social media:</h1>

	<div class="row">

		<a href="https://twitter.com/AKServices_Ltd" target="_blank">
			<div class="col-md-6">
				<div class="whitebg social tab-spacing animate twitter">					
					<div class="tab-logo animate">
						<i class="fa fa-twitter animate fa-2x pull-left"></i> <h1>Twitter<span>@AKServices_Ltd</span><br><?php echo $tw['followers']; ?> followers</h1>
					</div>
				</div>
			</div>
		</a>


		<a href="<?php echo $fb['link']; ?>" target="_blank">
			<div class="col-md-6">
				<div class="whitebg social tab-spacing animate facebook">					
					<div class="tab-logo animate">
						<i class="fa fa-facebook animate fa-2x pull-left"></i> <h1>Facebook<span>AKServicesLtd</span><br><?php echo $fb['likes']; ?> likes</h1>
					</div>
				</div>		
			</div>
		</a>

	</div>
</div>

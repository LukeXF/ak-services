<div class="jumbotron smaller">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="slideDown">Testimonals</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

		<h1 style="margin-bottom: 50px;" class="center-title">Coming Soon</h1>

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
								<input id="phone" name="phone" type="text" placeholder="Out of 5, how would you rate us?" class="form-control input-md" required="">
							</div>
						</div>

						<!-- Textarea -->
						<div class="col-md-6">
							<div class="col-md-12">                     
								<textarea class="form-control"  id="msg" placeholder="Anything specific you would like to add?" name="msg" cols="6" rows="6"></textarea>
							</div>
							<div class="col-md-12">
								<button id="submit" style="width:100%" name="submit" class="btn btn-primary">Send Review</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>

		</div>
	</div>
</div>

<div class="container" style="margin-top: 50px;" >

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

<?php 
	/*
		Template Name: Contact Form 
	*/

		if(isset($_POST["name"])) {
			header("Location: /thank-you/");
			exit;
		}
?>


<?php get_header(); ?>
	<div class="container">
		<h3 class="text-form">Please fill this form to request a free quote. We will get in touch with you shortly.</h3>
		<form method="POST" class="form">
			<div class="contact-details">
				<div class="form-group">
			    	<label class="label-form" for="name">Name</label>
			    	<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
			  	</div>
			  	<div class="form-group">
			  		<label class="label-form" for="name">Contact Number</label>
					<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number" required>
				</div>
				<div class="form-group">
				    <label class="label-form" for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
			    	<label class="label-form" for="name">Subject</label>
			    	<input type="text" class="form-control" id="name" placeholder="Enter your name">
			  	</div>	
			</div>
			
		  	<div class="form-group">
		  		<label class="label-form" for="name">Message</label>
                <textarea class="form-control" type="textarea" id="message" placeholder="Message" rows="7"></textarea>                 
			</div>
		  	<button type="submit" class="btn btn-primary btn-wearefiesta">Send</button>
		</form>	
	</div>


		
				
	
<?php get_footer(); ?>
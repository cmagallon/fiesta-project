<?php 
	/*
		Template Name: Contact Form 
	*/
?>


<?php get_header(); ?>
	<div class="container">
		<form>
			<div class="form-group">
		    	<label for="name">Name</label>
		    	<input type="text" class="form-control" id="name" placeholder="Enter your name">
		  	</div>
		  	<div class="form-group">
		  		<label for="name">Contact Number</label>
				<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number" required>
			</div>
			<div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
		    	<label for="name">Subject</label>
		    	<input type="text" class="form-control" id="name" placeholder="Enter your name">
		  	</div>
		  	<div class="form-group">
		  		<label for="name">Message</label>
                <textarea class="form-control" type="textarea" id="message" placeholder="Message" rows="7"></textarea>                 
			</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>	
	</div>

		
				
	
<?php get_footer(); ?>
<?php include "includes/db.php" ?>



<!-- HEADER
================================================== -->
<?php include "includes/header.php" ?>


  <body id="contact__page">

  <!-- PRELOADER
================================================== -->
<?php include "includes/loader.php" ?>

<!-- Navbar
================================================== -->
<?php include "includes/navigation.php" ?>    

<!-- SIGNIN MODAL
================================================== -->
<?php include "includes/sign-in.php" ?>

<!-- SIGNUP MODAL
================================================== -->
<?php include "includes/sign-up.php" ?>
		
		<!-- section home -->
   	<section class="section__home">
      <div class="container home__body">
        <div class="row">
          <div class="col-sm-12">
            <div class="home__content">

              <!-- Heading -->
              <h1 class="home__heading">
                Apply now
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.html">Home</a></li>
							  <li class="active">Contact</li>
							</ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section> 


    <section class="section__get-in-touch">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
						<div class="section_title__body">
							<!-- <h2 class="section__title dark__title">
	    					Apply now
	    				</h2>	    					 -->
    	    		<div class="section__subtitle dark__subtitle">
	    					Registration <span>form</span>
	    				</div>
	    			
    	    	</div> <!-- / .section_title__body  -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">

    	  	<?php

			// if (isset($_POST['submit'])) {
			// echo $_POST['submit']; 					

			// $contact_name = $_POST['contact_name']; 
			// $contact_mobile = $_POST['contact_mobile']; 
			// $contact_email = $_POST['contact_email']; 
			// $contact_message = $_POST['contact_message']; 			
			// $contact_date = date('d-m-y');					

			// $query = "INSERT INTO contact(contact_name, contact_mobile, contact_email, contact_message, contact_date) "; 
			// $query .= " VALUE('{$contact_name}', '{$contact_mobile}', '{$contact_email}', '{$contact_message}', now()) ";

			// $new_contact = mysqli_query($connection, $query);					

			// if (!$new_contact) {
			//     die('QUERY FAILED' . mysqli_error($connection));
			// }
			// }				
			

			?>   		
    	    <div class="col-sm-12">
    	  
    	  		<!-- Alert message -->
						<div class="alert" id="form_message" role="alert"></div>

						<!-- Form -->
						<form  action="" method="post" style="margin-top: 5%;">


						  <div class="form-group">
	                        <label for="student_image"><h4>Affix Photo of Father</h4> </label><br>                        
	                        <input type="file" class="dropify" data-max-file-size="1mb" name="image"  ><br><br><br>
	                      </div>

	                      <div class="form-group">
	                        <label for="student_image"><h4>Affix Photo of Father</h4> </label><br>                        
	                        <input type="file" class="dropify" data-max-file-size="1mb" name="image"  ><br><br><br>
	                      </div>


	                      <div class="form-group">
	                        <label for="student_image"><h4>Affix Photo of Student</h4> </label><br>                        
	                        <input type="file" class="dropify" data-max-file-size="1mb" name="image"  ><br><br><br>
	                      </div>


	                      <div class="section__subtitle dark__subtitle">
	                      	<h4>Instructions</h4>
	                      		<p>Registration form duly filled in and signed along with requisite documents should be Submitted latest by ______________ in the school with registration fee of 1000/- only. </p>

	                      </div>




						  <!-- Name -->
						  <div class="form-group">
						    <label for="contact_name" class="sr-only">Name</label>
						    <input type="text" name="contact_name" class="form-control" id="name" placeholder="Enter your name" required="">
						    <span class="help-block"></span>
						  </div>

  						  <div class="form-group">
						    <label for="contact_mobile" class="sr-only">Mobile Number</label>
						    <input type="text" name="contact_mobile" class="form-control" id="name" placeholder="Enter your Mobile Number" required="">
						    <span class="help-block"></span>
						  </div>


						  <div class="form-group">
						    <label for="contact_email" class="sr-only">Email address</label>
						    <input type="text" name="contact_email" class="form-control" id="email" placeholder="Enter your email address">
						    <span class="help-block"></span>
						  </div>						  
						  
						  
						  <!-- Message -->
						  <div class="form-group">
						    <label for="contact_message" class="sr-only">Message</label>
						    <textarea name="contact_message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
						    <span class="help-block"></span>
						  </div>
						  
						  						  
						  <!-- Submit -->
						  
						  <button class="btn btn-block btn-accent" type="submit" name="submit" value="Message Sent">Apply now</button> 

						</form>  	
    	  
    	    </div>
    	   



    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>

		<!-- FOOTER
================================================== -->		
   
<?php include "includes/footer.php" ?>
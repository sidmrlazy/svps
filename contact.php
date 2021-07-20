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


              <h1 class="home__heading">
                Contacts
              </h1>


             <ol class="breadcrumb">
			  <li><a href="index.php">Home</a></li>
			  <li class="active">Contact</li>
			</ol>

            </div>
          </div>
        </div>
      </div>

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>

    <!-- section contact -->
    <section class="section__location">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
						<div class="section_title__body">
    	    		<!-- <div class="section__subtitle dark__subtitle">
	    					Find us on the <span>map</span>
	    				</div> -->
	    				<h2 class="section__title dark__title">
	    					Locate us
	    				</h2>
	    				<!-- <p class="section_title__desc">
	    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
	    				</p> -->
    	    	</div>
    	    </div>
    	  </div>
    	  <!-- <div id="map"></div> -->
    	  <div>
	    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450.220225480967!2d77.29581071489002!3d30.145119120765045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390efbd1de1546b1%3A0x47306a9b39a3e88a!2sSwami%20Vivekanand%20Public%20School!5e0!3m2!1sen!2sin!4v1578650598641!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>	
	    	</div>
    	</div>
    </section>


    <section class="section__get-in-touch">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
						<div class="section_title__body">
    	    		<!-- <div class="section__subtitle dark__subtitle">
	    					Write us a <span>message</span>
	    				</div> -->
	    				<!-- <h2 class="section__title dark__title">
	    					Contact
	    				</h2>	    					 -->
    	    	</div> <!-- / .section_title__body  -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">

    	  	<?php

			if (isset($_POST['submit'])) {
			echo $_POST['submit'];

			$contact_name = $_POST['contact_name'];
			$contact_mobile = $_POST['contact_mobile'];
			$contact_email = $_POST['contact_email'];
			$contact_job = $_POST['contact_job'];
			$contact_message = $_POST['contact_message'];
			$contact_date = date('d-m-y');

			$query = "INSERT INTO contact(contact_name, contact_mobile, contact_email, contact_message, contact_date, contact_job) ";
			$query .= " VALUE('{$contact_name}', '{$contact_mobile}', '{$contact_email}', '{$contact_message}', now(), '{$contact_job}' )  ";

			$new_contact = mysqli_query($connection, $query);

			if (!$new_contact) {
			    die('QUERY FAILED' . mysqli_error($connection));
			}
			}


			?>
    	    <div class="col-sm-6">

    	  		<!-- Alert message -->
						<div class="alert" id="form_message" role="alert"></div>

						<!-- Form -->
						<form  action="" method="post" style="margin-top: 5%;">
						  <!-- Name -->
						  <div class="form-group">
						    <label for="contact_name" class="sr-only">Name</label>
						    <input type="text" name="contact_name" class="form-control" placeholder="Enter your name" required="">
						    <span class="help-block"></span>
						  </div>

  						  <div class="form-group">
						    <label for="contact_mobile" class="sr-only">Mobile Number</label>
						    <input type="text" name="contact_mobile" class="form-control"  placeholder="Enter your Mobile Number" required="">
						    <span class="help-block"></span>
						  </div>


						  <div class="form-group">
						    <label for="contact_email" class="sr-only">Email address</label>
						    <input type="text" name="contact_email" class="form-control" id="email" placeholder="Enter your email address">
						    <span class="help-block"></span>
						  </div>

						  <div class="form-group">
						    <label for="contact_job" class="sr-only">Enquiring for</label>
						    <!-- <input type="text" name="contact_email" class="form-control" id="email" placeholder="Enter your email address">
						    <span class="help-block"></span> -->
						    <select name="contact_job" class="form-control">
						    	<option>Applying for Job</option>
						    	<option>Admission Enquiry</option>
						    	<option>Events</option>
						    </select>
						  </div>

							  <!-- <div class="form-group dropdown" class="contact_job">
							    <select class="form-group form-control" name="contact_job">
							    	<option>Applying for Job</option>
							    	<option>Admission enquiry</option>
							    	<option>Enquiry for events</option>
							    </select>
							  </div>						   -->


						  <!-- Message -->
						  <div class="form-group">
						    <label for="contact_message" class="sr-only">Message</label>
						    <textarea name="contact_message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
						    <span class="help-block"></span>
						  </div>


						  <!-- Submit -->

						  <button class="btn btn-block btn-accent" type="submit" name="submit" value="Message Sent">Send Message</button>

						</form>

    	    </div>
    	    <div class="col-sm-6">
    	    	<div class="contact_info__body">
    	    		<div class="contact_info__item">
    	    			<div class="contact__title">
    	    				Write us<span>.</span>
    	    			</div>
								<div class="contact__info">
									<div class="contact_info__wrapper">
										<h3>Head office</h3>
										<p><a href="mailto:svps17huda@gmail.com">svps17huda@gmail.com</a></p>
									</div>
									<!-- <div class="contact_info__wrapper">
										<h3>Support</h3>
										<p>support@lctrs.com</p>
									</div> -->
								</div> <!-- / .contact__info -->
    	    		</div> <!-- / .contact_info__item -->
    	    		<div class="contact_info__item">
    	    			<div class="contact__title">
    	    				Call us<span>.</span>
    	    			</div>
								<div class="contact__info">
									<div class="contact_info__wrapper">
										<h3>Head office</h3>
										<p><a href="tel:01732-261908">01732-261908</a></p>
										<p><a href="tel:01732-220158">01732-220158</a></p>
									</div>
									<!-- <div class="contact_info__wrapper">
										<h3>Support</h3>
										<p>+ 0242 789 98 98</p>
									</div> -->
								</div> <!-- / .contact__info -->
    	    		</div> <!-- / .contact_info__item -->
    	    		<div class="contact_info__item">
    	    			<div class="contact__title">
    	    				Visit us<span>.</span>
    	    			</div>
								<div class="contact__info">
									<div class="contact_info__wrapper">
										<h3>Head office</h3>
										<p>Sector-17, HUDA, JAGADHRI (Haryana) Pin: 135003</p>
									</div>
								</div> <!-- / .contact__info -->
    	    		</div> <!-- / .contact_info__item -->
    	    	</div> <!-- / .contact_info__body -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>

		<!-- FOOTER
================================================== -->

<?php include "includes/footer.php" ?>

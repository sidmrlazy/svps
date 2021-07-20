  <?php
  $postData = $statusMsg = ''; 
  $sitekey='6LdRVf8ZAAAAAIyutSc7pShEFvXnKi-vhooMf2e0';
  $secretkey='6LdRVf8ZAAAAAAss0K4jVWj53WiawJK1EaDPHxge';
  ?>
  <section class="section__contact">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
				<div class="section_title__body">
					<div class="section__subtitle dark__subtitle"><span></span></div>

	    				<h2 class="section__title dark__title">Contacts</h2>

	    			</div>
	    		</div>
	    	</div>

	    	<!-- <div id="map"></div> -->
	    	<!--<div>-->
	    	<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450.220225480967!2d77.29581071489002!3d30.145119120765045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390efbd1de1546b1%3A0x47306a9b39a3e88a!2sSwami%20Vivekanand%20Public%20School!5e0!3m2!1sen!2sin!4v1578650598641!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>	-->
	    	<!--</div>-->
	    	<div class="row"> 
	    	<?php
			if (isset($_POST['submit'])) {
			    
			       if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
            // Google reCAPTCHA API secret key 
            
             
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.'6LdRVf8ZAAAAAAss0K4jVWj53WiawJK1EaDPHxge'.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success){ 
			    
			echo $_POST['submit'];
			$contact_name = $_POST['contact_name']; 
			$contact_mobile = $_POST['contact_mobile']; 
			$contact_email = $_POST['contact_email']; 
			$contact_message = $_POST['contact_message']; 			
			$contact_date = date('d-m-y');					
			$query = "INSERT INTO contact(contact_name, contact_mobile, contact_email, contact_message, contact_date) "; 
			$query .= " VALUE('{$contact_name}', '{$contact_mobile}', '{$contact_email}', '{$contact_message}', now()) ";
			$new_contact = mysqli_query($connection, $query);					
			if (empty($new_contact)) {
			die('QUERY FAILED' . mysqli_error($connection));
			}
			else
			{?>
			      
               <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            <?php
			}
			
            }
            else{ 
                 $statusMsg = 'Robot verification failed, please try again.'; 
                } 
            }
            else{ 
                $statusMsg = 'Please check on the reCAPTCHA box.'; 
                }
			
			}				
			?>   		
	    		<div class="col-sm-6">
	    			<div class="alert" id="form_message" role="alert"></div>

                       <?php if(!empty($statusMsg)){ ?>
                 <p class="status-msg" style="color:red;"><?php echo $statusMsg; ?></p>
                <?php } ?>	
                	
 
	    			<form  action="" method="post" style="margin-top: 5%;">
						  <!-- Name -->
						  <div class="form-group">
						    <label for="contact_name" class="sr-only">Name</label>
						    <input type="text" name="contact_name" class="form-control" id="name" placeholder="Enter your name" required="">
						    <span class="help-block"></span>
						  </div>

  						  <div class="form-group">
						    <label for="contact_mobile" class="sr-only">Mobile Number</label>
						    <input type="text" name="contact_mobile" class="form-control" id="mobile" placeholder="Enter your Mobile Number" required="" pattern="[6789][0-9]{9}">
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
						  
						   	<div class="g-recaptcha" data-sitekey="6LdRVf8ZAAAAAIyutSc7pShEFvXnKi-vhooMf2e0"></div>
						  
						  						  
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
										<p><a href="mailto:svps17huda@gmail.com"> svps17huda@gmail.com</a></p>
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
										<p>7082220593</p>
										<p>01732-220158</p>
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
    </section> <!-- .section__footer -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
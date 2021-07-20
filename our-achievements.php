<?php include "includes/db.php" ?>
<?php $academic='academic'; ?>
<?php include "includes/header.php" ?>

 <body id="blog-item__page">

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
    <!-- CONTENT
      ================================================== -->
		
		

   	<!-- section home -->
   	<section class="section__home">
      <div class="container home__body">
        <div class="row">
          <div class="col-sm-12">
            <div class="home__content">
            	<h1 class="home__heading">Our Achievements</h1>
            	<ol class="breadcrumb">
            		<li><a href="index.php">Home</a></li>
            		<li class="active">Our Achievements</li>
            	</ol>
            </div>
          </div>
        </div> 
      </div>       
      <div class="annualreport__bg"></div>
    </section> 

		<!-- section blog-item -->
   	<section class="section__blog-item">
      <div class="container">

      		<?php
            $query = "SELECT * FROM board_results ORDER BY `board_results`.`id` ASC ";
            $select_all_results = mysqli_query($connection, $query);             
            while ($row = mysqli_fetch_assoc($select_all_results)) {                    
            $update_board_title = $row['board_title'];            
            $update_board_image = $row['board_image'];             
            ?>
    	  
    	  <div class="row">
    	  	<div class="col-sm-12">
    	    	<div class="section_title__body">    	    		
    	    		<h2 class="blog_item__title dark__title"><?php echo $update_board_title; ?></h2>    	    		
    	    	</div>
    	    </div>
    	</div>
	     
	     <!-- Upload Result Image -->
         <div class="row">
           <div class="col-sm-12">
           	<div class="blog_item__img">
           		<img src="http://svpsadmin.in/images/updates/<?php echo $update_board_image; ?>" class="img-responsive" alt="...">
           	</div>
           </div>
         </div>
          <?php }  ?> 
     </div>
</section>
       
        
<?php include "includes/footer.php" ?>        
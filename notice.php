<!-- HEADER
================================================== -->
<?php include "includes/db.php" ?>
<?php $beyond_academic='beyond_academic'; ?>
<!-- HEADER
================================================== -->
<?php include "includes/header.php" ?>


<!-- Navbar
================================================== -->
<?php include "includes/navigation.php" ?>    

 <body id="events__page">

    
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
              <h1 class="home__heading">Notices</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
              	<li>
              		<a href="index.php">Home</a>
              	</li>
              	<li class="active">Notices</li>
              </ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>
    

    <!-- section categories -->
    <section class="section__categories">
    	<div class="container">
    	  <div class="row">
    	      
          <?php
          $query = "SELECT * FROM notice ORDER BY `notice`.`n_id` DESC ";
          $select_all_notice = mysqli_query($connection, $query);
          while ($row = mysqli_fetch_assoc($select_all_notice)) {     
          $notice_title = $row['notice_title'];
          $notice_image = $row['notice_image'];             
          ?>
          
    	    <div class="col-sm-6 col-md-4">
    	
    	   	<div class="blog-item__content ">
    	   	       <div class="blog-item__date"><i class="ion-calendar" aria-hidden="true"></i> <?php echo $row['date']?></div> 
             
            <div class="blog-item__title ">
                <h3>
                    <!--http://svpsadmin.in/images/updates/-->
                    <!--admin/images/updates/-->
                   <a href="https://svpsadmin.in/images/updates/<?php echo $notice_image ?>">
                        <?php echo $notice_title; ?></a> 
                </h3>
            </div>
            </div>
    	    </div>
          <?php } ?>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>

    
<?php include "includes/footer.php" ?>
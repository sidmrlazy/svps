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
              <h1 class="home__heading">Special Awards</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
              	<li>
              		<a href="index.php">Home</a>
              	</li>
              	<li class="active">Special Awards</li>
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
          $query = "SELECT * FROM awards ORDER BY `awards`.`id` DESC ";
          $select_all_awards = mysqli_query($connection, $query);
          while ($row = mysqli_fetch_assoc($select_all_awards)) {                    
          $award_title = $row['award_title'];
          $award_image = $row['award_image'];             
          ?>
    	    <div class="col-sm-6 col-md-4">
    	    	
            <div class="category__item">
    	    		<div>
                <!--     <i class="ion-ios-people-outline"></i> -->
                <!--admin/images/updates/-->
                <!--<img src="admin/images/updates/<?php echo $award_image; ?>" alt="trophy" style="width: 90px; height: auto;">-->
                <img src="https://svpsadmin.in/images/updates/<?php echo $award_image; ?>" alt="trophy" style="width: 90px; height: auto;">
              </div>

              <div style="padding: 10%;">
                <!--     <i class="ion-ios-people-outline"></i> -->
                <p href="#" class="category_item__title" >
                  <?php echo $award_title; ?>
                </p>                                    
              </div>

    	    	</div>
    	    </div>
          <?php } ?>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>

    
<?php include "includes/footer.php" ?>
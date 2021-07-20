<?php include "includes/db.php" ?>
<?php $academic='academic'; ?>

<?php @$q=base64_decode($_REQUEST['q']); ?>

<!-- HEADER
================================================== -->
<?php include "includes/header.php" ?>

<body id="blog-grid__page">

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
          <h1 class="home__heading">News & Updates</h1>

          <!-- Breadcrumbs -->
          <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">News & updates</li>
        </ol>

        </div> <!-- / .home__content -->
      </div>
    </div> <!-- / .row -->
   <!-- / .container -->

  <!-- Background image -->
  <div class="home__bg"></div>
</div>
</section>


    
<!-- section blog -->
<section class="section__blog">
	<div class="container">
	  
      
      <?php
      if($q=='')
      {
      ?>
        <div class="row course-slider img-fluid" >
      <?php
      $query = "SELECT * FROM updates ORDER BY `updates`.`update_id` DESC ";

      $select_all_query = mysqli_query($connection, $query);
      while ($row = mysqli_fetch_assoc($select_all_query)) {                    
      $update_title = $row['update_title'];            
      $update_content = $row['update_content'];
      $update_image = $row['update_image']; 
      $update_attachment = $row['update_attachment']; 
    //   $src="admin/images/updates/".$update_image;
    //   $attachment="admin/images/updates/".$update_attachment;      
      $src="https://svpsadmin.in/images/updates/".$update_image;

      $attachment="https://svpsadmin.in/images/updates/".$update_attachment;

                
      ?>
      <div class="col-sm-12">
        <div class="blog__item" data-aos="zoom-in-up"> 

          
          <?php if($update_image=="")
          {}
            else
            {
          ?>
           <div class="blog-item__img">
            <img src="<?php echo $src; ?>" class=" img-thumbnail img-fluid"  height="260" >
           
          </div>
          <?php 
            }
          ?>


          <div class="blog-item__content row">

            <div class="col-sm-12">
            <div class="blog-item__title"><h3><?php echo $update_title; ?></h3></div>
            
             <div class="blog-item__text">
                 <p ><?php echo $update_content; ?>
                 <?php 
                 if($update_attachment!="") { 
                 echo "<a href='".$attachment."' target='blank'> View More  </a>"; 
                 } 
                 ?>
                 </p>
             </div>
            </div>
          </div>
        </div>
      </div>
   
        
        <?php 
        } 
        ?>
      </div>
        <?php
        }

        ?>
      
         <?php
      if($q!=='')
      {
      ?>
        <div class="row" >
      <?php
      $query = "SELECT * FROM updates where `updates`.`update_title`= '$q' ";

      $select_all_query = mysqli_query($connection, $query);
      if($row = mysqli_fetch_assoc($select_all_query)) {                    
      $update_title = $row['update_title'];            
      $update_content = $row['update_content'];
      $update_image = $row['update_image']; 
      $update_attachment = $row['update_attachment']; 
    //   $src="admin/images/updates/".$update_image;
    //   $attachment="admin/images/updates/".$update_attachment;
      
      $src="https://svpsadmin.in/images/updates/".$update_image;
      $attachment="https://svpsadmin.in/images/updates/".$update_attachment;

                
      ?>
      <div class="col-sm-12">
        <div class="blog__item" data-aos="zoom-in-up"> 

          
          <?php if($update_image=="")
          {}
            else
            {
          ?>
           <div>
            <img src="<?php echo $src; ?>" class="img-responsive" style="width:100%;" >
            <hr style="height:5px;background-color: red; margin-top:0px;">
           </div>
          
          
          <?php 
            }
          ?>


          <div class="blog-item__content row">
            <div class="col-sm-12">
            
            <div class="blog-item__title"><h3><?php echo $update_title; ?></h3></div>
            
             <div class="blog-item__text">
                 <p ><?php echo $update_content; ?>
                 <?php if($update_attachment!="") { 
                 echo "<a href='".$attachment."' target='blank'> View More  </a>"; 
                 } 
                 ?>
                 </p>
             </div>
            </div>
          </div>
        </div>
      </div>
   
        
        <?php 
        } 
        ?>
      </div>
        <?php
        }

        ?>
        
      <!--
        <?php
      if($q!=='')
      {
        echo "<div class='row'>";
      $query = "SELECT * FROM updates where `updates`.`update_title`='$q' ";

      $select_all_query = mysqli_query($connection, $query);
      if ($row = mysqli_fetch_assoc($select_all_query)) {                    
      $update_title = $row['update_title'];            
      $update_content = $row['update_content'];
      $update_image = $row['update_image']; 
      $update_attachment = $row['update_attachment']; 
      
    //   $src="admin/images/updates/".$update_image;
      $src="https://svpsadmin.in/images/updates/".$update_image;

               
      ?>      
      <div class="col-sm-12">
        <div class="" data-aos="zoom-in-up" style="text-align:justify;">

          <!-- Image -->
          <!-- <?php if($update_image=="")
          {}
            else
            {
          ?>
           <div class="blog__item">
            <img src="<?php echo $src; ?>" class=" img-thumbnail"  height="260" >
           
          </div>
          <?php 
            }
          ?> -->


          <!-- <div class="blog-item__content"> -->

              <!-- Update Title -->
            <!-- <div class="blog-item__title"><h3><?php echo $update_title; ?></h3></div> -->
              <!-- Update Content -->
            <!-- <div class="blog-item__text"><p ><?php echo $update_content; ?></p></div>

          </div>
        </div>
      </div>
        
        <?php 
        } 
        }
        
        ?>-->

      
    </div>

  </section>

<?php include "includes/footer.php" ?>   

<!-- section blog -->
<section class="section__blog col-lg-12">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section_title__body">
          <h1 class="section__title dark__title">Latest Updates</h1>
        </div>
      </div>
    </div>

    <div class="row course-slider">
      <?php
      $query = "SELECT * FROM updates ORDER BY `updates`.`update_id` DESC ";
      $select_all_query = mysqli_query($connection, $query);       
      
      while ($row = mysqli_fetch_assoc($select_all_query)) {                    
      $update_title = $row['update_title']; 
       $update_image= $row['update_image']; 
       
        // $src="admin/images/updates/".$update_image;
         $src="https://svpsadmin.in/images/updates/$update_image";
      ?>

      <div class="col-sm-12 col-md-12">
        <div class="blog__item">
          <div class="blog-item__img">
            <!-- <img src="assets/updates/image1.jpg" class="img-responsive" alt="..."> -->  
            <?php  
            if(!empty($update_image))
            { ?>
                 <img src="<?php echo $src; ?>" alt="..." class="img-responsive" style="height: 161px;">
            <?php }
            else
            {
                
            }
            ?>
            

            </div>

            <div class="blog-item__content ">
              <!-- <div class="blog-item__date"><i class="ion-calendar" aria-hidden="true"></i> 09 October 2017</div> -->
               <!--<?php echo $row['update_content']?>-->
              <div class="blog-item__title ">
                <?php $update=base64_encode($update_title); ?>
                <h3>
                    <a href="updates.php?q=<?php echo $update; ?>">
                        <?php echo $update_title; ?>
                    </a> 
                </h3>
              </div>
            </div>



          </div>
          </div>
          <?php } ?>

     <!-- <div class="col-xs-12">
            <div class="text-center">
              <a href="updates.php" class="btn btn-accent">Go to page</a>
            </div>
          </div> -->
        </div>
      </div>
    </section>





<!-- HEADER
================================================== -->
<?php include "includes/db.php" ?>

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
      <div class="container home__body" style="overflow-x: hidden;">
        <div class="row">
          <div class="col-sm-12">
            <div class="home__content">

              <!-- Heading -->
              <h1 class="home__heading" style="font-size:4rem!important;">Homework & <br/> Assignments</h1>

              

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
                    <!--<div class="row">-->
                      <?php 
                      $images_collection = array('https://www.mobiletechreview.com/notebooks/image/surface3_leader.jpg','https://i.pinimg.com/originals/31/fc/ef/31fcefd9cd80cfe28a8fa11f7c96f8d5.jpg','https://previews.123rf.com/images/vectorpocket/vectorpocket1810/vectorpocket181000422/110130885-chemistry-room-school-laboratory-classroom-interior-educational-concept-chemical-experiments-cabinet.jpg','https://image.freepik.com/free-vector/school-classroom-interior-university-educational-concept-blackboard-table_1441-1694.jpg','https://previews.123rf.com/images/sabelskaya/sabelskaya1710/sabelskaya171000695/87535565-lesson-in-elementary-primary-school-kids-studying-and-teacher-teaching-the-class-flat-cartoon-vector.jpg','https://miro.medium.com/max/7680/0*tUsYFxE89mEOGBQj.jpg','https://i.ytimg.com/vi/4pzbEqg-RW4/maxresdefault.jpg','https://craftsbyamanda.com/wp-content/uploads/2012/08/craft-stick-bookmarks1.jpg','https://cdn.pixabay.com/photo/2015/03/26/09/44/books-690219__340.jpg','https://www.survivingateacherssalary.com/wp-content/uploads/2018/08/supplies-1024x850.jpg','https://previews.123rf.com/images/hugnoi/hugnoi1904/hugnoi190400007/129487019-put-multicolor-candy-draw-line-for-balloon-and-paper-craft-on-note-book-isolated-on-white-background.jpg','https://thumbs.dreamstime.com/b/child-making-decorum-halloween-colored-paper-frankenstein-master-class-gift-box-favorite-hobby-teaching-school-118765315.jpg','https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/k-p-s25-ake-gift-1006.jpg?auto=format&bg=transparent&con=3&cs=srgb&dpr=1&fm=jpg&ixlib=php-3.1.0&mark=rawpixel-watermark.png&markalpha=90&markpad=13&markscale=10&markx=25&q=75&usm=15&vib=3&w=1400&s=f01710fe27604e54343de4aba38521ad','https://www.scholastic.com/content/dam/scholastic/educators/articles/classroom-decor-16-9.jpg.corpimagerendition.xxl.1400.788.png','https://cdn.pixabay.com/photo/2015/03/26/09/44/books-690219__340.jpg','https://miro.medium.com/max/7680/0*tUsYFxE89mEOGBQj.jpg','https://i.pinimg.com/originals/31/fc/ef/31fcefd9cd80cfe28a8fa11f7c96f8d5.jpg','https://previews.123rf.com/images/sabelskaya/sabelskaya1710/sabelskaya171000695/87535565-lesson-in-elementary-primary-school-kids-studying-and-teacher-teaching-the-class-flat-cartoon-vector.jpg');
                      
                      $s=7;
                        $query = "SELECT * FROM class where  class_name = 'KG' group by class_name order by class_id";
                        $resultset = mysqli_query($connection,$query);
                        while($rowset = mysqli_fetch_assoc($resultset))
                        {
                          $class_name = $rowset['class_name'];
                           $class_digit = strlen($rowset['class_name']);
                           if($class_digit <=3)
                           {
                            $class_btn = "Class $class_name";
                           }
                           else
                           {
                            $class_btn = $class_name;
                           }

                           
                      ?>
                      <!--<a href="#">-->
                        <div class="col-sm-12 col-lg-2 col-md-6 " style="min-height: 20rem;border-radius:.5rem;background-image: url('<?php echo $images_collection[$s]; ?>');background-size: 100% 100%;margin:2rem auto; margin: 17px 17px 0px 15px;">
                            <div class="row" style="min-height: 12rem;">
                            </div>
                            <div class="row text-center" style="min-height:8rem;background-color:#ffffffa8;">
                             <form method="post" action="hw-download.php">
                                <input type="hidden" name="hidden" value="<?php echo $class_name; ?>">
                                <div style="margin-top:2rem;">
                                  <button type="submit" name="submit" class="btn btn-lg btn-primary"><?php echo $class_btn; ?></button>
                                </div>
                             </form>
                            </div>
                        </div>
                        
                      <!--</a>-->
                      <?php 
                      $s++; 
                      }
                      ?>
                      <?php
                      $s=1;
                        $query = "SELECT * FROM class where class_name != 'Kindergarten' and class_name != 'KG' group by class_name order by class_id";
                        $resultset = mysqli_query($connection,$query);
                        while($rowset = mysqli_fetch_assoc($resultset))
                        {
                          $class_name = $rowset['class_name'];
                           $class_digit = strlen($rowset['class_name']);
                           if($class_digit <=3)
                           {
                            $class_btn = "Class $class_name";
                           }
                           else
                           {
                            $class_btn = $class_name;
                           }

                           
                      ?>
                      <!--<a href="#">-->
                        <div class="col-sm-12 col-lg-2 col-md-6 " style="min-height: 20rem;border-radius:.5rem;background-image: url('<?php echo $images_collection[$s]; ?>');background-size: 100% 100%;margin:2rem auto; margin: 17px 17px 0px 15px;">
                            <div class="row" style="min-height: 12rem;">
                            </div>
                            <div class="row text-center" style="min-height:8rem;background-color:#ffffffa8;">
                             <form method="post" action="hw-download.php">
                                <input type="hidden" name="hidden" value="<?php echo $class_name; ?>">
                                <div style="margin-top:2rem;">
                                  <button type="submit" name="submit" class="btn btn-lg btn-primary"><?php echo $class_btn; ?></button>
                                </div>
                             </form>
                            </div>
                        </div>
                        
                      <!--</a>-->
                      <?php 
                      $s++; 
                      }
                      ?> 
                       
              	  <!--</div> <!-- / .row -->
              	</div> <!-- / .container -->
              </section>
<?php include "includes/footer.php" ?>
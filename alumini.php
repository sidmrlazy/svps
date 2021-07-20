<!-- HEADER
================================================== -->
<?php include "includes/db.php" ?>
<?php $alumini='alumini';?>

<!-- HEADER
================================================== -->
<?php include "includes/header.php" ?>


<!-- Navbar
================================================== -->
<?php include "includes/navigation.php" ?>    

 <body id="events__pag" >

    
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
              <h1 class="home__heading">Our Alumni</h1>

              

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
    	    <div class="col-lg-12 col-md-3">
    	    	<div class="category">





                <div class="tab-content">
                <div id="curriculum" class="tab-pane fade in active">
                  <!-- <p class="subheading">Course <span>plan</span></p> -->
                  <table class="table table-striped">

                      <thead>
                        <tr style="background-color: #2D559D; color: white;">
                          <th> # </th>
                          <th> Name of Alumni </th>
                          <th> Presently pursuing </th>                          
                        </tr>
                      </thead>
                    
                    <tbody>

                       <?php 

                        $query = "SELECT * FROM alumini";
                        $select_alumni = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($select_alumni)) {
                        $alumni_id = $row['alumni_id'];
                        $alumni_name = $row['alumni_name'];
                        $alumni_job = $row['alumni_job'];
                        

                        echo "<tr>";
                        echo "<td>{$alumni_id}</td>";
                        echo "<td>{$alumni_name}</td>";
                        echo "<td>{$alumni_job}</td>";
                        
                        // echo "<td><img class='img-responsive' src='images/updates/$update_image' style='width: 50px; height: auto;'></td>";
                        // echo "<td><a href='classes.php?delete={$class_id}'><button class='btn btn-inverse-danger btn-fw'>Delete</button></a></td>";
                        echo "</tr>";

                        }

                        ?>              


                    </tbody>
                  </table>
                </div>
              </div>
    	    	</div>
    	    </div>
          
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>



   

    
<?php include "includes/footer.php" ?>
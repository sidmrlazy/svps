

<?php 
if(isset($_POST['submit']))
{
  $class_name = $_POST['hidden'];
  if(strlen($_POST['hidden'])<=3)
  {
    $class_heading = "Class $class_name";
  }
  else
  {
    $class_heading = $class_name;
  }
?>
<!-- HEADER
================================================== -->
<?php include "includes/db.php" ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- HEADER
================================================== -->
<?php include "includes/header.php" ?>


<!-- Navbar
================================================== -->
<?php include "includes/navigation.php" ?>    

 <body id="events__page" >

    
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
              <h1 class="home__heading" style="font-size:4rem!important;">Homework & <br/> Assignments <span class="text-primary"><?php echo $class_heading ; ?></span></h1>

              

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>
    
    <div style="min-height: 2rem;"></div>
    <h3 class="text-center text-center"><!-- <img src="assets/svps-logo/line.png" height="20" width="150"> --> STAY SAFE - STAY HOME <!-- <img src="assets/svps-logo/line.png" height="20" width="150"> --></h3>
    <!-- section categories -->
    <section class="section__categories">
      <div class="container">
        <div class="row">         
          <div class="col-lg-12 col-md-3">
            <div class="category">

                <div class="tab-content">
                <div id="curriculum" class="tab-pane fade in active " style="overflow-x:auto;">
                   
                  <table class="table table-striped" id="order-listing">

                      <thead>
                        <tr style="background-color: #2D559D; color: white;">
                          <th> # </th>
                          <th> Class </th>
                          <th> Subject </th>
                          <th> Category </th>
                          <th> Title </th>
                          <th> Date </th>                          
                          <th> Action </th>                          
                        </tr>
                      </thead>
                    
                    <tbody>

                       <?php 

                        $query = "SELECT * FROM hw where hw_class = '$class_name' order by hw_id desc";
                        $select_hw = mysqli_query($connection, $query);
                        $sr=1;
                        while ($row = mysqli_fetch_assoc($select_hw)) {
                        $hw_id = $row['hw_id'];
                        $hw_class = $row['hw_class'];
                        $hw_subject = $row['hw_subject'];
                        $hw_cat = $row['hw_cat'];
                        $hw_title = $row['hw_title'];
                        $hw_date = $row['hw_date'];                        
                        $hw_download = $row['hw_download'];                        

                        echo "<tr>";
                        echo "<td>{$sr}</td>";
                        echo "<td>{$hw_class}</td>";
                        echo "<td>{$hw_subject}</td>";
                        echo "<td>{$hw_cat}</td>";
                        echo "<td>{$hw_title}</td>";
                        echo "<td>{$hw_date}</td>";     
                        // https://svpsadmin.in/images/updates/
                        echo "<td><a href='https://svpsadmin.in/uploads/$hw_download' target='_blank' >Download</a></td>";
                        // echo "<td><img class='img-responsive' src='images/updates/$update_image' style='width: 50px; height: auto;'></td>";
                        // echo "<td><a href='classes.php?delete={$class_id}'><button class='btn btn-inverse-danger btn-fw'>Delete</button></a></td>";
                        echo "</tr>";
                        $sr++;
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
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
        $(document).ready( function () {
        $('#order-listing').DataTable();
        } );
      </script>
<?php
}
else
{
  header("Location:class-homework.php");
}
?>
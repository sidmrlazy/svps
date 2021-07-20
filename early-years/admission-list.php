<?php include "includes/earlyyears-header.php" ?>

<body>
<!-- Main wrapper -->
<div class="wrapper" id="wrapper">

<!-- Header -->
<?php include "includes/ey-navigation.php" ?>			
<!-- //Header -->		

		<!-- //Header -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
            	<img src="images/bg-png/6.png" class="img-fluid" alt="bradcaump images" style="width:100%;">
            	<!--<img src="images/bg-png/6.png" alt="bradcaump images">-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Admission List</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><img src="images/icons/brad.png" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Admission List</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!--<div class="row">-->
        <!--  <div class="col-lg-12 col-sm-12 col-md-12">-->
        <!--    <div class="section__title text-center" style="margin-top: 5%;">-->
        <!--      <h2 class="title__line">Congratulations !</h2>              -->
        <!--      <h4>Proud Parents & Future Vivekians</h4>-->
        <!--      <p style="text-align: left;">It is a matter of immense pride that your ward has been selected out of 400 candidates to become a proud part of The Vivekananda family. We look forward to welcoming you all. </p><br>-->

        <!--      <p style="text-align: left;"><strong>Important: Following are the final dates for getting the admissions done.  After the deadline  NO admissions will be accepted from this list.</strong></p><br>-->
            
        <!--      <p style="text-align: left;"><strong>Admissions Dates: 28th Jan 2020 to 8th Feb 2020 <br>Timings: 10: 00 am to 1:00 pm  <br> Venue: School Office (only Working Days)  </strong></p><br>-->
            
        <!--      <p style="text-align: left;"><strong>Please Note: If you have seen this list please send us the confirmation by writing *SEEN* through the following means: </strong></p><br>-->

                

        <!--      <p style="text-align: left;">Email Us: <strong>svps17huda@gmail.com </strong> <br> Whatsapp: <strong>+ 91 7082220593</strong> </p>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->


		<!-- Admission List Start -->

<section class="junior__service bg--white service--2 section-padding--lg" id="facilities">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-6 col-12">

        


					
					<table>
						<thead>                        
							<tr>                          
	                          <th> S.No </th>
	                          <th> Student Name </th>                          
	                          <th> Class </th>                          
	                          <th> Parents name </th>
	                          <th> Session </th>	                          
	                      </tr>
	                  </thead>
	                  <tbody>

                      <?php 
                      $query = "SELECT * FROM admission_list where admission_student_session='2021-22'";
                      $select_admission_list = mysqli_query($connection, $query);
                       $i=1;
                      while ($row = mysqli_fetch_assoc($select_admission_list)) {                                                                  
                      $admission_id = $row['admission_id'];
                      $admission_student_name = $row['admission_student_name'];
                      $admission_student_class = $row['admission_student_class'];
                      $admission_student_parent = $row['admission_student_parent'];
                      $admission_student_session = $row['admission_student_session'];                      

                      echo "<tr>";                                            
                    //   echo "<td>{$admission_id}</td>";
                      echo "<td>{$i}</td>";
                      echo "<td>{$admission_student_name}</td>";
                      echo "<td>{$admission_student_class}</td>";
                      echo "<td>{$admission_student_parent}</td>";
                      echo "<td>{$admission_student_session}</td>";
                      // echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
                      // echo "<td><a href='users.php?change_to_student={$user_id}'>Student</a></td>";
                      // echo "<td><a href='users.php?change_to_teacher={$user_id}'>Teacher</a></td>";
                      // echo "<td><a href='users.php?source=edit-users&edit-users={$user_id}'><button class='btn btn-inverse-info btn-fw'>Edit</button></a></td>";
                      // echo "<td><a href='marks.php?delete={$marks_id}'><button class='btn btn-inverse-danger btn-fw'>Delete</button></a></td>";
                      echo "</tr>";
                      $i++;
                      }                     
                      ?>                       
                    
                  </tbody>
              </table>						
			</div>
		</div>
	</div>
</section>
		

	
		
<!-- Footer Area -->
<?php include "includes/ey-footer.php" ?>								
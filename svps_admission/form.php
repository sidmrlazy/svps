<?php 
if(isset($_REQUEST['q']))
{
   $none = "block";
}
else
{
   $none = "none";
}
?>
      <!-- Google Tag Manager (noscript) -->
      <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L76JW9" -->
         <!-- height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
      <!-- End Google Tag Manager (noscript) -->
      <div style="background-color:#fff" class="container">
         <form class="form" action="form_code.php" method="post" id="myform" enctype="multipart/form-data">
            <div class="row">
               <div class="text-center col-lg-2 col-sm-12" >
                  <img style="height: 15rem;margin-top: 2rem;" src="../assets/svps-logo/logo.png">
               </div>
               <div class=" col-lg-8 col-sm-12 text-center">
                  <h2 style="text-shadow: 4px 3px #e4e4e4; font-size: 32px; margin-top: 20px;margin-bottom: -12px; font-weight:bold; color:#2e3094;">SWAMI VIVEKANAND PUBLIC SCHOOL</h2><br><font style="text-shadow: 3px 1px #e4e4e4;" size="4">(Arise awake & stop not, till the goal is achieved)</font>
                  <p class="lead">
                  <h4 style="text-shadow: 4px 3px #e4e4e4; line-height:31px; font-size:17px; font-weight:bold;"> Sector-17, HUDA, JAGADHRI (Haryana) , Pin: 135003<br> Email: svps17huda@gmail.com <br> Tel: 01732-261908 , 01732-220158</h4>
                  </p>
                  <h4 style="text-shadow: 4px 3px #e4e4e4; font-size: 28px; font-weight:bold; color:#2e3094">Registration Form</h4>
                  <span style="font-size: 10pt; font-family: Tahoma, sans-serif; color: #333;">
                  Note: All '<span class="mandatory" style="color: #ff0000;">*</span>' marked fields are mandatory.
                  Please mention <span class="mandatory" style="color: #ff0000;">'NA'</span> if not applicable.
                  </span> <!-- <span style="margin-left:15rem;" ><a style="text-decoration: none;color: #ff0000;" href="../"><< Go back</a></span> -->
               </div>
               <div class="col-md-2">
               </div>
            </div>
            <div class="row" style="bottom:0px; position:fixed;background:#ff0000; width:87%;z-index:2;">
               <div class="col-md-12">
                  <div style="display:none;" id="errormessagediv">
                     <table border="1" bordercolor="RED" class="tabledata" cellspacing="0" cellpadding="0" width="100%" bgcolor="#ECDAE2">
                        <tbody>
                           <tr>
                              <td width="100%">
                                 <table class="tabledata" width="100%">
                                    <tbody>
                                       <tr>
                                          <td width="100%" style="padding-top: 8px;padding-left: 6px;">
                                             <b>
                                                <p style="color:#fff;text-align:center;" class="text_upper message error" id="errormessage">Kindly insert the Address.</p>
                                             </b>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="row text-center"  style="top:0; position:fixed; width:84%;z-index:1;margin:auto;">
               <div class="col-md-12">
                  
                     <?php if(@$_REQUEST['q']=='error') { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Warning!</strong> Something Went Wrong
                        </div>
                      <?php } ?>
                       <?php if(@$_REQUEST['q']=='error_al') { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>There was an error!</strong> User already Registered
                        </div>
                      <?php } ?>
                      <?php if(@$_REQUEST['q']=='success') { ?>
                        <div class="alert alert-lg alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Successfully submitted!</strong> You’ll also receive an email in your email inbox. 
                        </div>
                      <?php } ?>
                 
               </div>
            </div>
            
            <!-- <div class="row">
               <div class="col-md-12">
                  <div class="col-md-12">Does the child had any sibiling studying at <b>SWAMI VIVEKANAND PUBLIC SCHOOL</b> &nbsp; &nbsp; <input type="checkbox" title="Sibling" id="is_sibling" name="is_sibling" /></div>
               </div>
            </div>
            <div>&nbsp;</div>
            <div class="row sibling">
              
               <div class="col-md-6">
                  <div class="col-md-6">Sibling Name</div>
                  <div class="col-md-6">
                     <input type="text"  title="Sibling Name" name="sibling_name" value="" class="textbox text_upper form-control" id="sibling_name" />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="col-md-6">Sibling Class</div>
                  <div class="col-md-6">
                     
                        <select class="dropdown  form-control" id="sibling_class" title="Sibling Class" name="sibling_class" >
                           <option value=''>--Select Class--</option>
                           <?php 
                           // $result = mysqli_query($connection , "SELECT class_name,class_id from class group by class_name order by class_id");
                           // while($rowset = mysqli_fetch_assoc($result))
                           // { 
                           //    $class_name = strtoupper($rowset['class_name']);
                           //    $class_id = $rowset['class_id'];
                           //    echo "<option value='$class_id'>$class_name</option>";
                           // }
                         ?>
                        </select>
                  </div>
               </div>
             
            </div> -->
            <div>&nbsp;</div>
            <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Student Details:</h4>
            <div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">
                        Student First Name<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6"><input type="text" name="firstname" required="" id="firstname" autocomplete="off" class="text_upper mandatoryvalue form-control" title="Student Name"></div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Middle Name</div>
                     <div class="col-md-6"><input type="text" autocomplete="off" name="middle_name" id="middle_name"  title="Middle Name" class="text_upper form-control"></div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">
                        Last Name<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6"><input type="text" id="lastname" autocomplete="off" name="lastname" required="" class="text_upper mandatoryvalue form-control" title="Last Name"></div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Gender<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <select name="genderid" title="Gender" required="" class="form-control">
                           <option value="">--Select Gender--</option>
                           <option value="1">Male</option>
                           <option value="2">Female</option>
                           <option value="3">Other</option>
                           <!-- <option value="3">Transgender
                           </option> -->
                        </select>
                     </div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">
                        Date of Birth<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="text" title="Date of Birth" required="" title="Date of Birth" name="dateofbirth" value='' class="textbox  tcal  form-control" autocomplete="off" style="border-width:1px;" name="T1" size="20" />
                     </div>
                  </div>
                
                  <div class="col-md-6">
                     <div class="col-md-6">
                        Class<font color="#FF0000">*</font> &nbsp; (Admission required for)
                     </div>
                     <div class="col-md-6">
                        <select class="dropdown  form-control" required="true" title="Class" name="admissionid" required="">
                           <option value=''>--Select Class--</option>
                           <?php 
                           $result = mysqli_query($connection , "SELECT class_name,class_id from class group by class_name order by class_id");
                           while($rowset = mysqli_fetch_array($result,MYSQLI_BOTH))
                           { 
                              $class_name = strtoupper($rowset['class_name']);
                              $class_id = $rowset['class_id'];
                              echo "<option value='$class_id'>$class_name</option>";
                           }
                         ?>
                       
                        </select>
                     </div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Student Type<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <select title="Student Type" required="" name="studenttypeid"  class="mandatoryvalue form-control">
                           <option value=''>--Select Student Type--</option>
                           <option value='1'>DAY SCHOLAR</option>
                           <option value='2'>HOSTEL</option>
                        </select>
                     </div>
                  </div>
                 
                    <div class="col-md-6">
                     <div class="col-md-6">Nationality<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <select class="form-control" name="nationality" id="nationality" required="" title="Nationality">
                           <option value="">--Select Nationality--</option>
                            <?php 
                           $result = mysqli_query($connection , "SELECT * from country_list");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $country_name = strtoupper($rowset['country_name']);
                              $country_id = $rowset['country_id'];
                              echo "<option value='$country_id'>$country_name</option>";
                           }
                         ?>
                        </select>
                     </div>

                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Mother Tongue<font color="#FF0000">*</font></div>
                     <div class="col-md-6">
                        <select name="mother_tongue" required="" title="Mother Tongue" class="form-control">
                           <option value="">--Select Mother Tongue--</option>
                            <?php 
                           $result = mysqli_query($connection , "SELECT * from languages");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $language_name = strtoupper($rowset['language_name']);
                              $language_id = $rowset['language_id'];
                              echo "<option value='$language_id'>$language_name</option>";
                           }
                         ?>
                        </select>
                     </div>
                  </div>
                   <!-- <div class="col-md-6">
                     <div class="col-md-6">Previous School (if any)
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="previousschoolname"  title="Previous School (if any)" class="text_upper form-control">
                     </div>
                  </div> -->
                  <div class="col-md-6">
                     <div class="col-md-6"> Student Adhaar No<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="text" title="Student's Adhaar" required="" name="student_adhaar" id="student_adhaar"  value="" class="numbervalue form-control" placeholder="xxxxxxxxxxxx">
                     </div>
                  </div> 
               </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Religion<font color="#FF0000">*</font></div>
                     <div class="col-md-6">
                        <select class="form-control" name="religionid" required="" title="Religion">
                           <option value="">--Select Religion--</option>
                           <?php 
                           $result = mysqli_query($connection , "SELECT * from religion");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $religion_id = $rowset['religion_id'];
                              $religion_name = strtoupper($rowset['religion_name']);
                              echo "<option value='$religion_id'>$religion_name</option>";
                           }
                         ?>
                        </select>
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="col-md-6">Category<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <select name="categoryid" required="" class="mandatoryvalue form-control">
                           <option value="">--Select Category--</option>
                            <?php 
                           $result = mysqli_query($connection , "SELECT * from category");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $category_name = strtoupper($rowset['category_name']);
                              $category_id = $rowset['category_id'];
                              echo "<option value='$category_id'>$category_name</option>";
                           }
                         ?>
                        </select>
                     </div>
                  </div>
               </div>
               <div>&nbsp;</div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Blood Group<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <select title="Student's Blood Group" required="" name="blood_group" class="form-control">
                           <option value="">--Select blood group--</option>
                           <option value="A+">A+</option>
                           <option value="B+">B+</option>
                           <option value="AB+">AB+</option>
                           <option value="O+">O+</option>
                           <option value="A-">A-</option>
                           <option value="B-">B-</option>
                           <option value="AB-">AB-</option>
                           <option value="O-">O-</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6"> Student Photo<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="file" title="Student's Photo" required="" name="candidate_photo" id="candidate_photo" ext="jpg,jpeg,png" accept="image/png, image/jpeg" value="" class="fileext">
                     </div>
                  </div>  
               </div>
               <h4 style="background:#2e3094; color:#fff; padding:10px 0px 10px 5px">Residential Address
               </h4>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Address<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <textarea class=" text_upper form-control" name="address" required="" id="address" title="Address" rows="3" cols="27"></textarea>
                        <div>&nbsp;</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">State<font color="#FF0000">*</font> &nbsp; (Select Nationality first)
                     </div>
                     <div class="col-md-6">
                        <!-- <input id="state" name="state" class="textbox text_upper  form-control" required="" type="text" title="State"> -->
                        <select class="form-control" id="state" name="state" required="" title="State">
                           <option value="">--Select State--</option>
                        </select>
                     </div>
                  </div>  
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6"> 
                     <div class="col-md-6">City<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <!-- <input id="city" required="" name="city" class="textbox text_upper  form-control" type="text" title="City"> -->
                         <select id="city" class="form-control" name="city" required="" title="City">
                           <option value="">--Select City--</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Pin Code<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input id="pin" autocomplete="off" name="pincode" maxlength="6" required="" class="textbox numbervalue form-control" type="text" title="Pin Code" minlength="6">
                     </div>
                  </div>
                  <!-- <div>&nbsp;</div> -->
               </div>
               <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Correspondence Address
                  <br>
                  <input type="checkbox" name="billingtoo" id="correspondence_check" >
                  <span style="font-size:12px;">Check this box if Correspondence Address and Residential Address are the same.</span>
               </h4>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Address</div>
                     <div class="col-md-6">
                        <textarea class="text_upper form-control" name="address_correspondence" id="address_correspondence" title="Address" rows="3" cols="27"></textarea>
                        <div>&nbsp;</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Country</div>
                     <div class="col-md-6">
                        <input type="text" name="country_correspondence" id="country_correspondence" title="Country" class="text_upper form-control">
                     </div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">State</div>
                     <div class="col-md-6">
                        <input type="text" name="state_correspondence" id="state_correspondence" title="text" class="text_upper form-control">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">City</div>
                     <div class="col-md-6">
                        <input class="text_upper form-control" type="text" name="city_correspondence" id="city_correspondence" title="City" size="20">
                     </div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Pin Code</div>
                     <div class="col-md-6">
                        <input type="text" maxlength="6" class="numbervalue form-control" name="pin_correspondence" id="pin_correspondence" title="Pin Code " minlength="6" size="20">
                     </div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Father's Details</h4>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Name<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="text" autocomplete="off" name="father_first_name" id="father_first_name" required="" class="text_upper form-control" title="Father Name">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Mobile no.<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="text" class="numbervalue form-control" value maxlength="10" name="fathermobileno" required="" title="Father Mobile No.">
                     </div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Qualification<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">

                       <select name="father_qualificationid" id="father_qualificationid" required="" class=" form-control" title="Father Educational Qualification">
                           <option value=''>--Select Qualification--</option>
                            <?php 
                           $result = mysqli_query($connection , "SELECT * from qualification");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $qualification_name = strtoupper($rowset['qualification_name']);
                              $qualification_id = $rowset['qualification_id'];
                              echo "<option value='$qualification_id'>$qualification_name</option>";
                           }
                         ?>					   
                        </select> 						
                     </div>
                  </div>
                 <div id="other_f" style="display: none;">
                  <div class="col-md-6">
                     <div class="col-md-6">Other</div>
                     <div class="col-md-6">
                        <input type="text" id="__ufdkey__ffather_occu_other" name="father_occu_other" value="" title=" Kindly Specify" class="text_upper form-control">
                     </div>
                  </div>
				</div>
               </div>
               <div>&nbsp;</div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Email Id<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="email" required="" name="father_emailid" class=" form-control" title="Father Email id">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Occupation <font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <select name="father_professionid" required="" title="Father Occupation" class="mandatoryvalue form-control">
                           <option value="">--Select Occupation--
                           </option>
                           <?php 
                           $result = mysqli_query($connection , "SELECT * FROM `profession` where profession_id != '34' and profession_id != '54' order by profession_name");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $profession_name = strtoupper($rowset['profession_name']);
                              $profession_id = $rowset['profession_id'];
                              echo "<option value='$profession_id'>$profession_name</option>";
                           }
                           $result = mysqli_query($connection , "SELECT * FROM `profession` where profession_id = '54' order by profession_name");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $profession_name = strtoupper($rowset['profession_name']);
                              $profession_id = $rowset['profession_id'];
                              echo "<option value='$profession_id'>$profession_name</option>";
                           }
                         ?>   
                        </select>
                     </div>
                  </div>
                 
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                   <div class="col-md-6">
                     <div class="col-md-6">Annual Income:<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="father_income" class="numbervalue form-control" required="">
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="col-md-6">Father Photo
                     </div>
                     <div class="col-md-6">
                        <input type="file" required="" name="father_photo" id="father_photo" ext="jpg,jpeg,png" value="" title="father Photo" accept="image/png, image/jpeg" class="fileext ">
                     </div>
                  </div>
               </div>
               <div>&nbsp;</div>
               <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Mother's Details:</h4>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Name<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="text" autocomplete="off" required="" name="mother_first_name" class="mandatoryvalue text_upper form-control" id="mother_first_name"  title="Mother Name">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Mobile No.<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="text" autocomplete="off" required="" class="numbervalue form-control" maxlength="10" name="mothermobileno"  title="Mother Mobile No.">
                     </div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">Qualification<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                         <select name="mother_qualificationid" required="" id="mother_qualificationid" class="mandatoryvalue form-control" title="Father Educational Qualification">
                           <option value=' '>--Select Qualification--</option>
                           <?php 
                           $result = mysqli_query($connection , "SELECT * from qualification");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $qualification_name = strtoupper($rowset['qualification_name']);
                              $qualification_id = $rowset['qualification_id'];
                              echo "<option value='$qualification_id'>$qualification_name</option>";
                           }
                         ?>   						                           
						</select> 						
                     </div>
                     <div>&nbsp;</div>
                  </div>
                   <div id="other_m" style="display: none;">
                  <div class="col-md-6">
                     <div class="col-md-6">Other</div>
                     <div class="col-md-6">
                        <input type="text"  autocomplete="off"id="__ufdkey__mmother_occu_other" name="mother_occu_other" value="" title=" Kindly Specify" class="text_upper form-control">
                     </div>
                  </div>
              </div>
                 
                  <div>&nbsp;</div>
               </div>
               <div class="row">
                 <div class="col-md-6">
                     <div class="col-md-6">Email Id
                     </div>
                     <div class="col-md-6">
                        <input type="email" name="mother_emailid" class="form-control" title="Mother Email id">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Occupation<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <select name="mother_professionid" id="mother_professionid" required="" class=" dropdown select_2 form-control" title="Mother Occupation">
                           <option value=''>--Select Occupation--</option>
                          <?php 
                           $result = mysqli_query($connection , "SELECT * FROM `profession` where profession_id != '54' order by profession_name");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $profession_name = strtoupper($rowset['profession_name']);
                              $profession_id = $rowset['profession_id'];
                              echo "<option value='$profession_id'>$profession_name</option>";
                           }
                           $result = mysqli_query($connection , "SELECT * FROM `profession` where profession_id = '54' order by profession_name");
                           while($rowset = mysqli_fetch_assoc($result))
                           { 
                              $profession_name = strtoupper($rowset['profession_name']);
                              $profession_id = $rowset['profession_id'];
                              echo "<option value='$profession_id'>$profession_name</option>";
                           }
                         
                         ?>  
                        </select>						
                     </div>
                  </div>
                 
               </div>
               <div>&nbsp;</div>
               <div class="row">
                 <div class="col-md-6">
                     <div class="col-md-6">Annual Income:<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="mother_income" class="numbervalue form-control" required="">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Mother Photo
                     </div>
                     <div class="col-md-6">
                        <input type="file" id="mother_photo" required="" name="mother_photo" id="mother_photo" ext="jpg,jpeg,png" value="" title="mother Photo"  accept="image/png, image/jpeg" class="fileext ">
                     </div>
                  </div>
               </div>
               <div>&nbsp;</div>
               <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Details of Brother/Sister of the Student : </h4>
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">
                        Does the student have any siblings
                     </div>
                     <div class="col-md-6">
                        <select name="sibiling" id="sibiling_check" class="form-control" required="">
                           <option value="">--SELECT--</option>
                           <option value="Yes">YES</option>
                           <option value="no">NO</option>
                        </select>
                     </div>
                  </div>
               </div>
                <div class="row sibiling_block" id="sibiling_block">
                  <div>&nbsp;</div>
                  <div class="col-md-6">
                     <div class="col-md-6">
                         Name<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6"><input type="text" name="sibiling_name" autocomplete="off" class="text_upper mandatoryvalue form-control" id="sibiling_name" title="Student Name"></div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Age<font color="#FF0000">*</font></div>
                     <div class="col-md-6"><input type="text" autocomplete="off" id="sibiling_age" name="sibiling_age"  title="Sibiling Age" class="numbervalue form-control"></div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div class="row sibiling_block">
                  <div class="col-md-6">
                     <div class="col-md-6">
                         Name of Institute<font color="#FF0000">*</font>
                     </div>
                     <div class="col-md-6"><input type="text" name="sibiling_institute" id="sibiling_institute"  autocomplete="off" class="text_upper mandatoryvalue form-control" title="Student Name"></div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-md-6">Standard<font color="#FF0000">*</font></div>
                     <div class="col-md-6"><input type="text" autocomplete="off" id="sibiling_class" name="sibiling_class"  title="Middle Name" class="form-control"></div>
                  </div>
                  <div>&nbsp;</div>
               </div>
               <div>&nbsp;</div>
                <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Details of previous last study (if applicable)</h4>
                <div class="row">
                   <div class="col-sm-12">
                      <table class="table"  rules="cols" width="100%" align="center">
                      <thead>
                         <th class="text-center col-sm-2 col-md-2 col-lg-2">YEAR</th>
                         <th class="text-center col-sm-5 col-md-5 col-lg-5">SCHOOL</th>
                         <th class="text-center col-sm-3 col-md-3 col-lg-3">STANDARD/GRADE</th>
                         <th class="text-center col-sm-2 col-md-2 col-lg-2">GRADE/MARKS </th>
                      </thead>
                      <tbody>
                         <tr>
                            <td><input type="text" name="previous_year" class="form-control"></td>
                            <td><input type="text" name="previousschoolname" class="form-control"></td>
                            <td><input type="text" name="previous_standard" class="form-control"></td>
                            <td><input type="text" name="previous_mark" class="form-control"></td>
                         </tr>
                      </tbody>
                   </table>
                   </div>
                </div>
                <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Enclosures (All documents are mandatory at the time of admission)</h4>
                <div class="row">
                  <div class="col-md-12">
                     <p class="title"><b>The above documents (recently attested photocopies ) must be produced along with the filled application form.</b></p>
                  </div>
                  <div class="col-md-6">
                     <ul style="list-style-type: square;">
                    <li>BirthCertificate</li>
                    <li>Blood Group Report</li>
                    <li>Passport size photos of parents (2 each)</li>
                    <li>Copy of progress report card(If applicable)</li>
                  </ul>
                  </div>
                  <div class="col-md-6">
                     <ul style="list-style-type: square;">
                    <li>Transfer Certificate - original copy (if applicable) Vaccination Card Copy</li>
                    <li>Passport size photos of child (5 copies)</li>
                    <li>Aadhar card copy of child</li>
                  </ul>
                  </div>
                </div>
                <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Miscellaneous</h4>
                <div class="row">
                   <div class="col-md-12">
                      <p class="title"><b>How did you hear about the Swami Vivekanand Public School?</b></p>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group"><input type="radio" required="" value="news paper" name="advertise"><label>&nbsp;&nbsp;News paper</label></div>
                      <div class="form-group"><input type="radio" required="" value="website" name="advertise"><label>&nbsp;&nbsp;Website</label></div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group"><input type="radio" required="" value="Word of Mouth" name="advertise"><label>&nbsp;&nbsp;Word of Mouth</label></div>
                      <div class="form-group"><input type="radio" required="" value="pamphlets" name="advertise"><label>&nbsp;&nbsp;Pamphlets</label></div>
                   </div>
                </div>
                <h4 style="background:#2e3094;color:#fff; padding:10px 0px 10px 5px">Declaration:</h4>
               <div class="row">
                  <div class="col-md-12">
                     <p class="text-justify">I fully understand that registeration is not a guarantee for admission.Admission is granted
only when there is an existing vacancy and the child’s interaction is as per school norms.<br>
I understand that admission & registration fees of Rs 1000/- non-Refundable.
I, <input type="text" name="guardian_name" id="guardian_name" style="width: 20rem;outline: none;border:none;border-bottom: 1px solid black;font-weight: bold;" readonly=""> have the authority to admit my child /ward <input type="text" id="student_name" style="width:20rem;outline: none;border:none;border-bottom: 1px solid black;font-weight: bold;"  readonly="">,
into the school as the parent/ legal guardian. I undertake the responsibility of providing
any evidence needed to support the information provided here, if necessary for any reason.
I declare that the statements provided in this application are correct to my knowledge and
if found otherwise, I shall abide by the decision of the management. I agree to abide by the
rules. regulations and the fee structure of the school.</p>
                  </div>
                  <div class="col-md-12" style="text-align:center;">
                     <input type="checkbox" id="check"> I Agree
                  </div>
                  <div class="col-md-12" id="declaration" style="display:none;">
                    <div>&nbsp;</div>
                     <div class="text-center">
                  <input type="submit" id="savebtn"  value="Submit" style="background:#2e3094;color:#fff; padding:10px 20px; border:none; font-size:16px; cursor:pointer" name="submit">
               </div>
                     <!--  <p style="text-align:justify;">
                        <b>1.</b> I know the registration fee is non-refundable and I fully understand that registration does not guarantee admission.<br>
                        <b>2.</b> I hereby certify that the date of birth and spelling of the name of my child given in this form are correct and I shall not make any request for any change there in.<br>
                        <b>3.</b> I understand that rendering false / misleading information and documents may disqualify my ward for admission /education in this school.<br>
                        <b>4.</b> I hereby undertake that my ward and myself shall follow the rules, regulations and procedures laid down by the school from time to time.<br>
                        <b>5.</b> I am hereby signing to cofirm the above declaration.<br>
                        </p>
                        <p><b>Please bring the original documents to be verified at the time of submission of the photocopies.</b></p> -->
                  </div>
               </div>
               <div>&nbsp;</div>
              
               <div>&nbsp;</div>
            </div>
            <!--Student Details -->
         </form>
      </div>
  <?php
  $postData = $statusMsg = ''; 
  $sitekey='6LdRVf8ZAAAAAIyutSc7pShEFvXnKi-vhooMf2e0';
  $secretkey='6LdRVf8ZAAAAAAss0K4jVWj53WiawJK1EaDPHxge';
  ?>
<style>
 .myfontsize{
   background-color: #fdc098e6;
    font-size: 12px;
    margin: 0px 2px 2px -4px;
    padding: 3px;

 }
 .myseconddiv{
    background-color: #fdc098e6;
    font-size: 13px;
   margin: -1px 1px -6px -1px;
      padding:2px;
 }
 .mythirddiv{
     background-color: #fdc098e6;
 }
 .iconfont
 {
 font-size: 12px;
 }

.mysubmitbutton
{
    margin: 20px 70px;
    width: 171px;
    border-radius: 5px;
    border: none;
    color: black;
    background: #fa6e4f;
    float: left;
    padding: 5px;
}

@media screen and (max-width: 480px) {
.mycaptch
{
    margin-left: 26px;
}
}
@media screen and (min-width: 480px) {
 .mycaptch
{
  margin-left: 70px;
}
}
</style>
<?php
if (isset($_POST['submit'])) {
// echo $_POST['submit'];                  
 if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
     
      // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.'6LdRVf8ZAAAAAAss0K4jVWj53WiawJK1EaDPHxge'.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success){ 
     
$ey_child_name =$_POST['ey_childs_name'];                         
$ey_child_age ='';                         
$ey_child_class = mysqli_real_escape_string($connection,$_POST['ey_child_class']);                         
$ey_parents_name = $_POST['ey_parents_name'];
$ey_parents_email = '';  
$ey_parents_mobile = $_POST['ey_parents_mobile'];  
$contact_date_ey = date('d-m-y');                  

 $query2="SELECT * from contact_ey where ey_child_name='{$ey_child_name}' and ey_parents_name = '{$ey_parents_name}' and ey_parents_email='{$ey_parents_email}' ";
 $selectresult=mysqli_query($connection,$query2);
$resultset = mysqli_num_rows($selectresult);
    if($resultset>0)
    {
        echo "<script> alert('Already Exists'); location.href='index.php'; </script>";
    }
    else
    {
        $query = "INSERT INTO contact_ey(ey_child_name, ey_child_age, ey_child_class, ey_parents_name, ey_parents_mobile, ey_parents_email, contact_date_ey ) "; 
        $query .= " VALUE('{$ey_child_name}', '{$ey_child_age}', '{$ey_child_class}', '{$ey_parents_name}', '{$ey_parents_mobile}','{$ey_parents_email}', now() )  ";

        $new_contact_ey = mysqli_query($connection, $query);                   

        if (!$new_contact_ey) 
        {
            die('QUERY FAILED' . mysqli_error($connection));
        } 
        else 
        {
           

        }
    }
    }
    else{ 
         $statusMsg = 'Robot verification failed, please try again.'; 
         } 
 }
 else
 {
        $statusMsg = 'Please check on the reCAPTCHA box.'; 
 }

} 
?>          

<link rel="shortcut icon" href="assets/svps-logo/logo.png">
<div id="myModal" class="modal fade" style="margin-top: 4rem;width: auto;">
  <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" style="padding: 0px;">
                <div class="alert" id="form_message" role="alert"></div>

                       <?php if(!empty($statusMsg)){ ?>
                 <p class="status-msg" style="color:red;"><?php echo $statusMsg; ?></p>
                <?php } ?>	
                <!--<img src="assets/img/results.jpeg" class="img-responsive" alt="resultsUpdate"  />-->
                <form method="POST" action="" style="padding-right: 20px; padding-left: 20px;" class="text-center">
           
                      <!--<img src="admin/images/svps-logo/early-years.png" class="logo-dark default" alt="no image" style="width: 142px; height: auto;margin: 0px auto;">-->
                      <img src="https://svps17huda.com/early-years/images/early-years-logo/early-years.png" class="logo-dark default" alt="no image" style="width: 142px; height: auto;margin: 0px auto;">
                        
               
                      <div  style="height: 50px;width:285px;padding: 10px;margin: 0px auto;border-bottom: 3px solid black;border-top: 3px solid black;">
                        <span style="text-align:center;color:black;font-weight:bolder; font-size:28px;">ADMISSIONS OPEN</span>
                    </div>
                      <p style="text-align:center;font-size: large;margin:8px;margin-block-end: auto;">SESSION:2021-22</p>
                    
                    <div class="row">
                        <div class="col-ms-12">
                              <div style="padding: 10px;">
                               <span style="padding-right: 26px;">Child's Name:</span><input type="text" name="ey_childs_name" placeholder="Enter Child Name" style="margin-top: 1%; width: 300px; border:none; border-bottom:2px solid black;" required="">
                              </div>
                               <div style="padding: 10px;">
                             <span style="padding-right: 26px;">Parent's Name:</span><input type="text" name="ey_parents_name" placeholder="Enter Parents Name" style="margin-top: 1%; width: 300px; border:none; border-bottom:2px solid black;" required="">
                             </div>
                 	           <div style="padding: 10px;">
                 	              <span  style="padding-right:38px;">Applying To:</span>                                   
                                    <select name="ey_child_class" style="margin-top: 1%; width: 300px; border:none; border-bottom:2px solid black;" required="">
                                          <option value="">&nbsp;&nbsp;&nbsp;--
                                          Select Applying To--</option>
                                          <option value="First-Step">&nbsp;&nbsp;&nbsp;&nbsp;First Step</option>
                                        <option value="Pre-Nursery">&nbsp;&nbsp;&nbsp;&nbsp;Pre-Nursery</option>
                                        <option value="Nursery">&nbsp;&nbsp;&nbsp;&nbsp;Nursery</option><br>
                                           <option value="Kindergarten">&nbsp;&nbsp;&nbsp;&nbsp;Kindergarten</option>
                                            
                                    </select>
                                </div>
                               <div style="padding: 10px;">
                               <span style="padding-right:60px;">Contact:</span><input type="text" name="ey_parents_mobile"  placeholder="Enter Contact Number" pattern="[6-9]{1}[0-9]{9}" style="margin-top: 1%; width: 300px; border:none;border-bottom:2px solid black;" required="">
                              </div>
                               <div style="padding: 10px;">
                                	<div class="g-recaptcha mycaptch" data-sitekey="6LdRVf8ZAAAAAIyutSc7pShEFvXnKi-vhooMf2e0"></div>
                                </div>
                             
                         
                                <div class="contact-btn" style="padding: 10px;">
                                    <button type="submit" name="submit" class="dcare__btn mysubmitbutton" value="Download File">Submit</button>
                                </div>
                                              
                        </div>
                    </div>
                    <div class="row">
                     <div class="col-sm-12 col-md-3 myfontsize">
                     <div>ADDRESS: SECTOR-17,&nbsp;</div>
                     <div>HUDA,JAGADHRI,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                     <div>HARYANA-135003,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </div>
                    <div class="col-sm-12 col-md-6 myseconddiv">
                     <div>Mail:svps17huda@gmail.com>&emsp;&emsp;&emsp;&emsp;</div>
                     <div>Call:+91 7082220593 | +91 01732220158</div>
                     <div>Website:svps17huda.com&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
                    
                    </div>
                    <div class="col-sm-4 col-md-3 mythirddiv">
                      <div class="row" style=" margin-top: 14px;padding-bottom: 3px; ">
                          <div class="col-sm-4">
                          <a href="https://www.facebook.com/svps.yamunanagar/" target="_blank"><i class="ion-social-facebook"></i></a>
                          <span class="iconfont">@svps</span>
                          </div>
                          <div class="col-sm-4">
                        <a href="https://www.instagram.com/svpshuda/" target="_blank"><i class="ion-social-instagram-outline"></i></a>
                          <span class="iconfont">@SVPS</span>
                          </div>
                          <div class="col-sm-4">
                       <a href="https://www.youtube.com/channel/UCS8mpnKYjRR2RJxXkC2tACg" target="_blank"><i class="ion-social-youtube"></i></a>
                          <span class="iconfont">HUDA</span>
                          </div>
                      </div>
                    </div> 
        
              </div>
                </form>
            </div>
        </div>
    </div>
</div>


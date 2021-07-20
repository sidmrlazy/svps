

<!-- Start Contact Form -->
        <section class="contact__box section-padding--lg bg-image--27" id="contact" id="contact">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h2 class="title__line">Feel Free To write Us</h2>							
						</div>
					</div>
        		</div>
        		<div class="row mt--80">
        			<div class="col-lg-12">
    				<div class="contact-form-wrap">

<?php

if (isset($_POST['submit'])) {
echo $_POST['submit'];                  

$ey_child_name = $_POST['ey_child_name'];                         
$ey_child_age = $_POST['ey_child_age'];                         
$ey_child_class = mysqli_real_escape_string($connection,$_POST['ey_child_class']);                         
$ey_parents_name = $_POST['ey_parents_name'];
$ey_parents_email = $_POST['ey_parents_email'];  
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
                $from=$ey_parents_email;
                $to="dm@projectalchemy.in";
                $subject = "New Application SVPS EY";
                $from=$ey_parents_email;
                $to="dm@projectalchemy.in";
                $subject = "New Application SVPS EY";
                $message  = "\n From: ".$from."\n To :" .$to ."\n Name :" .$ey_child_name."\r Parent Name :". $ey_parents_name."\n Contact No:".$ey_parents_mobile."\n applied for early-year";
                
               mail("dm@projectalchemy.in",$subject,$message,"From: $from");

                $message1  = "\n From: ".$from."\n To : niteshrai7785@gmail.com \n Name :" .$ey_child_name."\r Parent Name :". $ey_parents_name."\n Contact No:".$ey_parents_mobile."\n applied for early-year";

               mail("niteshrai7785@gmail.com",$subject,$message1,"From: $from");

               $message2  = "\n From: svps17huda@gmail.com \n To :" .$from ."\n Name :" .$ey_child_name."\r Parent Name :". $ey_parents_name."\n Contact No:".$ey_parents_mobile."\n\n We have recieved your admission application .\n Someone from our team will get in touch with you soon! \n Thank You. \n \n Regards \n SVPS , HUDA , Sector 17";

               mail($from,$subject,$message2,"From: svps17huda@gmail.com");

                echo "Thank you. Your form has been submitted";
                $msg=base64_encode('thanks');
                 header("location:index.php?msg=$msg");

            // We'll be outputting a PDF
            header('Content-type: application/pdf');

            // It will be called downloaded.pdf
            header('Content-Disposition: includes; filename="admission-form.pdf"');

            // The PDF source is in original.pdf
            readfile('admission-form.pdf');
           

            }
    }


} 
?>          


                            <form action="" method="post">
                                <div class="single-contact-form name">
                                    <input type="text" name="ey_child_name" placeholder="Your Child's name*" required="true">
                                    <input type="number" name="ey_child_age" placeholder="Child's Age*" required="true">
                                </div>
                                <div class="billing-form checkout-form single-contact-form" name="ey_child_class">                                    
                                    <select name="ey_child_class" >
                                        <option value="Pre-Nursery">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pre-Nursery</option>
                                        <option value="Nursery">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nursery</option>
                                           <option value="Kindergarten">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindergarten</option>
                                              <option value="First-Step">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Step</option>
                                    </select>
                                </div>
                                
                                <div class="single-contact-form">
                               		<input type="text" name="ey_parents_name" placeholder="Parents Name" style="margin-top: 1%;" required="">
                                    <input type="text" name="ey_parents_mobile" placeholder="Contact Number" style="margin-top: 1%;" required="" pattern="[6-9]{1}[0-9]{9}">
                                    <input type="text" name="ey_parents_email" placeholder="Parent's Email Address" style="margin-top: 1%;" required="">
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" name="submit" class="dcare__btn" value="Download File">Submit</button>
                                </div>
                            </form>

                        </div> 
                        <!-- <div class="form-output">
                            <p class="form-messege"></p>
                        </div> -->
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Contact Form -->

        
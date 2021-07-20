<?php
if(isset($_POST['submit']))
{
    include "db.php";
    
    date_default_timezone_set('Asia/calcutta'); 
    $datenow=date('yy-m-d h:i:s',time());
    $date=mysqli_real_escape_string($connection,$datenow);
	$child_name=mysqli_real_escape_string($connection, $_POST['child_name']);
	$name=mysqli_real_escape_string($connection, $_POST['name']);
	$contact=mysqli_real_escape_string($connection, $_POST['contact']) ;
	$class=mysqli_real_escape_string($connection, $_POST['classes']);
	if($child_name=="" || $name==""  || $contact=="" || $class=="")
	{
		echo "hello";
		//header("location:../index.php");
	}
	else
	{
		    $query_select = "SELECT * FROM new_admission_ey WHERE child_name = '$child_name' and name = '$name' and contact='$contact'";
		    $res_select = mysqli_query($connection,$query_select) or die("query faild");
		    $numberofrows = mysqli_num_rows($res_select);
		if($numberofrows>0)
		{
		    
		    header("location:../index.php?msg=alreay-exists"); 
		}
	    else
	    {
	        $query="INSERT INTO new_admission_ey (child_name,name,contact,class,application_date) VALUES ('$child_name','$name','$contact','$class',now())";
			$res = mysqli_query($connection,$query);
		//echo mysqli_insert_id($res);
		//echo $result = mysqli_num_rows($res);
		    $from='From: svps17huda@gmail.com';
		    $to='samiksha@projectalchemy.in';
		    $subject = 'New Application SVPS-EY';
		    $message  = "\n".$from."\n To :" .$to ."\n Name :" .$child_name."\r Parent Name :". $name."\r Contact No :". $contact;
		      //  $to_email = 'name @ company . com';
        //         $message = 'This mail is sent using the PHP mail function';
        //         $headers = 'From: noreply @ company . com';
        //         mail($to_email,$subject,$message,$headers);
		 
			
				mail($to,$subject,$message,$from);
				         
			// 	$message2  = "\n From: svps17huda@gmail.com \n To :" .$from ."\n Name :" .$child_name."\r Parent Name :". $parent_name."\n Contact No:".$contact."\n\n We have recieved your admission application .\n Someone from our team will get in touch with you soon ! \n Thank You. \n \n Regards \n SVPS , HUDA , Sector 17";
			// 	$subject2="SVPS17HUDA";
	  //           mail($from,$subject2,$message2,"from:svps17huda@gmail.com");
				
			// }
			// session_destroy();
				
			if($res>0)
			{
				$msg=base64_encode('thanks');
			    echo "<script> window.location.href='../index.php?msg=$msg'; </script>";
			    
			}
			else
			{
			    echo "<script> window.location.href='../index.php'; </script>";
			    //echo "not inserted";
			}
	    }

	}
}
else
{
	echo "wrong code";
}

?>
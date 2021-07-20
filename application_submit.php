<?php
if(isset($_POST['submit']))
{
    include "includes/db.php";
    
    date_default_timezone_set('Asia/calcutta'); 
    $datenow=date('yy-m-d h:i:s',time());
    $date=mysqli_real_escape_string($connection,$datenow);
    
	$child_name=$_POST['child_name'];
	$parent_name=$_POST['parent_name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$class=mysqli_real_escape_string($connection, $_POST['classes']);
	if($child_name=="" || $parent_name=="" || $email=="" || $contact=="" || $class=="")
	{
		header("location:index.php");
	}
	else
	{
		    $query_select = "SELECT * FROM admission_application WHERE child_name = '$child_name' and parent_name = '$parent_name' and email = '$email'";
		    $res_select = mysqli_query($connection,$query_select) or die("query faild");
		   $numberofrows = mysqli_num_rows($res_select);
		if($numberofrows>0)
		{
		    $msg=base64_encode('1');
		   header("location:index.php?msg=$msg"); 
		}
	    else
	    {
	        $query="INSERT INTO admission_application (child_name,parent_name,email,contact,class,application_date) VALUES ('$child_name','$parent_name','$email','$contact','$class',now())";
		$res = mysqli_query($connection,$query);
		//echo mysqli_insert_id($res);
		//echo $result = mysqli_num_rows($res);
		    $from=$email;
		    $to="dm@projectalchemy.in";
		    $subject = "New Application SVPS";
		    $message  = "\n From: ".$from."\n To :" .$to ."\n Name :" .$child_name."\r Parent Name :". $parent_name."\r Contact No :". $contact;
		       
		        session_start();
		        $source=base64_encode(md5("babagooglebaba"));
			    if($_SESSION['facebook']==$source)
			    {
			        $_SESSION['facebook'];
			        $source;
			         mail("dm@projectalchemy.in",$subject,$message,"from:$email");
			         
			         $message2  = "\n From: svps17huda@gmail.com \n To :" .$from ."\n Name :" .$child_name."\r Parent Name :". $parent_name."\n Contact No:".$contact."\n\n We have recieved your admission application .\n Someone from our team will get in touch with you soon ! \n Thank You \n \n Regards \n SVPS , HUDA , Sector 17";
			         $subject2="SVPS17HUDA";
			         $svps="svps17huda@gmail.com";
               		mail($email,$subject2,$message2,"from:$svps");
				}
				session_destroy();
				

		if($res>0)
			{
				$msg=base64_encode('1');
			    echo "<script> window.location.href='index.php?msg=$msg'; </script>";
			}
			else
			{
			    echo "<script> window.location.href='index.php'; </script>";
			}
	    }

	}
}
else
{
	echo "wrong code";
}

?>
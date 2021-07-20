<?php 
if(isset($_POST['submit']))
{
	if(file_exists("../includes/db.php"))
	{
		include "../includes/db.php";

	$sibiling_name = mysqli_real_escape_string($connection, $_POST['sibiling_name']);
	$sibiling_class = mysqli_real_escape_string($connection, $_POST['sibiling_class']);
	$sibiling_institute = mysqli_real_escape_string($connection, $_POST['sibiling_institute']);
	$sibiling_age = mysqli_real_escape_string($connection, $_POST['sibiling_age']);
	$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
	$middle_name = mysqli_real_escape_string($connection, $_POST['middle_name']);
	$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
	$genderid = mysqli_real_escape_string($connection, $_POST['genderid']);
	$dateofbirth = mysqli_real_escape_string($connection, $_POST['dateofbirth']);
	$categoryid = mysqli_real_escape_string($connection, $_POST['categoryid']);
	$student_adhaar = mysqli_real_escape_string($connection, $_POST['student_adhaar']);
	$studenttypeid = mysqli_real_escape_string($connection, $_POST['studenttypeid']);
	$admissionid = mysqli_real_escape_string($connection, $_POST['admissionid']);
	$mother_tongue = mysqli_real_escape_string($connection, $_POST['mother_tongue']);
	$religionid = mysqli_real_escape_string($connection, $_POST['religionid']);
	$blood_group = mysqli_real_escape_string($connection, $_POST['blood_group']);
	$nationality = mysqli_real_escape_string($connection, $_POST['nationality']);
	$address = mysqli_real_escape_string($connection, $_POST['address']);
	$city = mysqli_real_escape_string($connection, $_POST['city']);
	$state = mysqli_real_escape_string($connection, $_POST['state']);
	$pincode = mysqli_real_escape_string($connection, $_POST['pincode']);
	$address_correspondence = mysqli_real_escape_string($connection, $_POST['address_correspondence']);
	$country_correspondence = mysqli_real_escape_string($connection, $_POST['country_correspondence']);
	$city_correspondence = mysqli_real_escape_string($connection, $_POST['city_correspondence']);
	$state_correspondence = mysqli_real_escape_string($connection, $_POST['state_correspondence']);
	$pin_correspondence = mysqli_real_escape_string($connection, $_POST['pin_correspondence']);
	$father_first_name = mysqli_real_escape_string($connection, $_POST['father_first_name']);
	$fathermobileno = mysqli_real_escape_string($connection, $_POST['fathermobileno']);
	$father_qualificationid = mysqli_real_escape_string($connection, $_POST['father_qualificationid']);
	$father_occu_other = mysqli_real_escape_string($connection, $_POST['father_occu_other']);
	$father_emailid = mysqli_real_escape_string($connection, $_POST['father_emailid']);
	$father_professionid = mysqli_real_escape_string($connection, $_POST['father_professionid']);
	$father_income = mysqli_real_escape_string($connection, $_POST['father_income']);
	$previous_year = mysqli_real_escape_string($connection, $_POST['previous_year']);
	$previousschoolname = mysqli_real_escape_string($connection, $_POST['previousschoolname']);
	$previous_mark = mysqli_real_escape_string($connection, $_POST['previous_mark']);
	$previous_standard = mysqli_real_escape_string($connection, $_POST['previous_standard']);
	$mother_first_name = mysqli_real_escape_string($connection, $_POST['mother_first_name']);
	$mothermobileno = mysqli_real_escape_string($connection, $_POST['mothermobileno']);
	$mother_qualificationid = mysqli_real_escape_string($connection, $_POST['mother_qualificationid']);
	$mother_occu_other = mysqli_real_escape_string($connection, $_POST['mother_occu_other']);
	$mother_emailid = mysqli_real_escape_string($connection, $_POST['mother_emailid']);
	$mother_professionid = mysqli_real_escape_string($connection, $_POST['mother_professionid']);
	$mother_income = mysqli_real_escape_string($connection, $_POST['mother_income']);
	$advertise = mysqli_real_escape_string($connection, $_POST['advertise']);
	//$mother_modernite_batch = mysqli_real_escape_string($connection, $_POST['mother_modernite_batch']);
	//$mother_modernite_branch = mysqli_real_escape_string($connection, $_POST['mother_modernite_branch']);

	if($_FILES['candidate_photo']['name']!= '' && $_FILES['candidate_photo']['name']!= $_FILES['father_photo']['name'] && $_FILES['candidate_photo']['name']!= $_FILES['mother_photo']['name'] && $_FILES['mother_photo']['name']!= $_FILES['father_photo']['name'])
	{
		$candidate_photo_name = date(time()). $_FILES['candidate_photo']['name'];
		$candidate_photo_type = $_FILES['candidate_photo']['type'];
		$candidate_photo_size = $_FILES['candidate_photo']['size'];
		$candidate_photo_tmp_name = $_FILES['candidate_photo']['tmp_name'];
	}
	else
	{
		header("location:index.php?q = error");
	}
	if($_FILES['father_photo']['name']!= '')
	{
		$father_photo_name =  date(time()).$_FILES['father_photo']['name'];
		$father_photo_type = $_FILES['father_photo']['type'];
		$father_photo_size =$_FILES['father_photo']['size'];
		$father_photo_tmp_name = $_FILES['father_photo']['tmp_name'];
	}
	if($_FILES['father_photo']['name']!= '')
	{
		echo $mother_photo_name = date(time()).$_FILES['mother_photo']['name'];
		echo $mother_photo_type = $_FILES['mother_photo']['type'];
		echo $mother_photo_size = $_FILES['mother_photo']['size'];
		echo $mother_photo_tmp_name = $_FILES['mother_photo']['tmp_name'];
	}

	$query = "SELECT * from new_registration where firstname = '{$firstname}' and middle_name = '{$middle_name}' and lastname = '{$lastname}' and father_name = '{$father_first_name}' and father_qualificationid = '{$father_qualificationid}' and father_mobile = '{$fathermobileno}' and father_emailid = '{$father_emailid}' ";
	$selectquery = mysqli_query($connection,$query);
	if(mysqli_num_rows($selectquery)>0)
	{
		header("Location:index.php?q=error_al");
	}
	else
	{
		$regdate = date(time());

			$query = "INSERT into new_registration (student_firstname,student_middlename,student_lastname,student_gender,student_dob,student_category,student_type,student_class_id,student_adhaar,mother_tongue,previousschoolname,religion,student_photo,nationality,address,state_id,city_id,pincode,address_correspondence,state_correspondence,city_correspondence,pin_correspondence,country_correspondence,father_name,father_mobile,father_qualificationid,father_other_qulafition,father_emailid,father_professionid,father_income, father_photo,mother_name,mothermobileno,mother_qualificationid,mother_other_qualification,mother_emailid,mother_professionid,mother_income,mother_photo,regdate,sibiling_name,sibiling_class,sibiling_institute,sibiling_age,previous_year,previous_mark,previous_standard,advertise,blood_group)";
		$query .= "VALUES ('{$firstname}','{$middle_name}','{$lastname}','{$genderid}','{$dateofbirth}','{$categoryid}','{$studenttypeid}','{$admissionid}','{$student_adhaar}','{$mother_tongue}','{$previousschoolname}','{$religionid}','{$candidate_photo_name}','{$nationality}','{$address}','{$state}','{$city}','{$pincode}','{$address_correspondence}','{$state_correspondence}','{$city_correspondence}','{$pin_correspondence}','{$country_correspondence}','{$father_first_name}','{$fathermobileno}','{$father_qualificationid}','{$father_occu_other}','{$father_emailid}','{$father_professionid}','{$father_income}','{$father_photo_name}','{$mother_first_name}','{$mothermobileno}','{$mother_qualificationid}','{$mother_occu_other}','{$mother_emailid}','{$mother_professionid}','{$mother_income}','{$mother_photo_name}','{$regdate}','{$sibiling_name}','{$sibiling_class}','{$sibiling_institute}','{$sibiling_age}','{$previous_year}','{$previous_mark}','{$previous_standard}','{$advertise}','{$blood_group}')"; 
			echo $query;
			$confirm = mysqli_query($connection,$query);
			
			if(!$confirm)
			{
				//header("Location:index.php?q=error");
			}
			else
			{
				$file_dir_candidate = "../admin/images/new_registration/".$candidate_photo_name;
				$file_dir_father = "../admin/images/new_registration/".$father_photo_name;
				$file_dir_mother = "../admin/images/new_registration/".$mother_photo_name;

				move_uploaded_file($candidate_photo_tmp_name, $file_dir_candidate);
				move_uploaded_file($father_photo_tmp_name,$file_dir_father);
				move_uploaded_file($mother_photo_tmp_name,$file_dir_mother);
				//echo "<img src='$file_dir_mother' height='200'width='200'>";
				

			// email api start
			////////////////////////////////////////////////////
				$query = "SELECT * from class where class_id = '{$admissionid}' ";
				$resultset = mysqli_query($connection,$query);
				if($rowset = mysqli_fetch_assoc($resultset))
				{
					$class_name = $rowset['class_name'];
				}

					$message_for_svps = "Name : $father_first_name \n Contact : $fathermobileno \n Child's Name : ".$firstname."".$middle_name."".$lastname." \n Class : $class_name \n has applied to Swami Vivekananda Public School , Sector 17 , HUDA  \n\n  to view application click: \n or check mail: svpsmarketing17@gmail.com";

					$message_for_father = "Name : $father_first_name \n Contact : $fathermobileno \n Child's Name : ".$firstname."".$middle_name."".$lastname." \n Class : $class_name \n has applied to Toys N Joy Playschool,Aliganj \n\n   check mail: $father_emailid";

					$message_for_mother = "Name : $father_first_name \n Contact : $fathermobileno \n Child's Name : ".$firstname."".$middle_name."".$lastname." \n Class : $class_name \n has applied to Toys N Joy Playschool,Aliganj \n\n   check mail: $mother_emailid";

					mail("svpsmarketing17@gmail.com", "NEW Registraion Application", "$message_for_svps", "From:$father_emailid");
					mail("$father_emailid", "Registraion Successful", "$message_for_svps", "From:svps17huda@gmail.com");
					if($mother_emailid!='')
					{
						mail("$mother_emailid", "Registraion Successful", "$message_for_svps", "From:svps17huda@gmail.com");
					}
					// email api end
			////////////////////////////////////////////////////

					// message api start
			////////////////////////////////////////////////////
					$msg=$message_for_svps;
					$authKey = "240434AZqcR3S8w5eae3ddcP1";
					$mobileNumber = "7082220593";
					//$mobileNumber = "8853463642";
					$senderId = "SVPS17";
					$message = urlencode($msg);
					$route = "4";
					$postData = array(
					    'authkey' => $authKey,
					    'mobiles' => $mobileNumber,
					    'message' => $message,
					    'sender' => $senderId,
					    'route' => $route
					);
					
					$url=" ";
					$ch = curl_init();
					curl_setopt_array($ch, array(
					    CURLOPT_URL => $url,
					    CURLOPT_RETURNTRANSFER => true,
					    CURLOPT_POST => true,
					    CURLOPT_POSTFIELDS => $postData
					));
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
					$output = curl_exec($ch);
					if(curl_errno($ch))
					{
					    echo 'error:' . curl_error($ch);
					}

					curl_close($ch);

				header("Location:index.php?q=success");
			}
		////////////////////////////////////////////////////
		// message api end
		}
	}
}
else
{
	header("Location:index.php?q=error");
}

?>








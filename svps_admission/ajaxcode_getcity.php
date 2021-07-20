<?php 
if(isset($_POST['data'])){
	if(file_exists("../includes/db.php"))
	{	
		include "../includes/db.php";
		echo "<option value=''>--Select City--</option>";
		$state_id = $_POST['data'];
		$resultset = mysqli_query($connection,"SELECT * from city_list where state_id = '{$state_id}'");
		while($rowset = mysqli_fetch_assoc($resultset))
		{
			?>
			<option value="<?php echo $rowset['city_id']; ?>"><?php echo $rowset['city_name']; ?></option>
			<?php
		}
	}
}
if(isset($_POST['country_data'])){
	if(file_exists("../includes/db.php"))
	{	
		include "../includes/db.php";
		echo "<option value=''>--Select State--</option>";
		$country_data = $_POST['country_data'];
		$resultset = mysqli_query($connection,"SELECT * from state_list where country_id = '{$country_data}'");
		while($rowset = mysqli_fetch_assoc($resultset))
		{
			?>
			<option value="<?php echo $rowset['state_id']; ?>"><?php echo $rowset['state_name']; ?></option>
			<?php
		}
	}
}
?>

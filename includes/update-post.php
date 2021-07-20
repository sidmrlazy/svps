<?php 
//////////////////////UPDATE QUERY
if (isset($_POST['submit'])) {
$update_post = $_POST['submit'];

$query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE id = {$cat_id} ";
$update_query = mysqli_query($connection, $query);
if (!$update_query) {
die("QUERY FAILED" .mysqli_error($connection));
}
}

?>
<?php ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "u543554482_svps";
$db['db_pass'] = "svps-admin-2020";
$db['db_name'] = "u543554482_svps";
// local
// $db['db_host'] = "localhost";
// $db['db_user'] = "root";
// $db['db_pass'] = "";
// $db['db_name'] = "svps";  

foreach($db as $key => $value){

define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);

if(!$connection) {

echo "Database connection lost";

}

?>
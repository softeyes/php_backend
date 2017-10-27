<?php 

require_once('../common/connection.php');

sleep('1');

$db = new DbConnect($admin, $pass);

$creature_id = $_GET['creature_id'];
$creature_type = $_GET['creature_type'];
$gender = $_GET['gender'];
$last_known_location = $_GET['last_known_location'];
$region_id = $_GET['region_id'];


$sql = "INSERT INTO updated_creature_list (creature_id, creature_type, gender, last_known_location, region_id) VALUES($creature_id, $creature_type, $gender, $last_known_location, $region_id);

$result = $db->conn->query($sql);

if ($result){
	logger("created user");
	echo "created user $user_name@'localhost'";
} else {
	logger($db->conn->error());
}



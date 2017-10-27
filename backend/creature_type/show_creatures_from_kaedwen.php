<?php

require_once('../common/connection.php');
require_once('../common/logger.php');

$db = new DbConnect($app_user, $app_pass);

$sql = "SELECT * FROM updated_creature_list WHERE region_id = 'Kaedwen' limit 100";

$result = $db->conn->query($sql);

if ($result){
	$output = $result->fetchAll();
	echo json_encode($output);
	// do true stuff
} else {
	logger($db->conn->error());
	// do false stuff
}
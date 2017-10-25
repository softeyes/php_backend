<?php

require_once('../common/connection.php');
require_once('../common/logger.php');

$db = new DbConnect($app_user, $app_pass);

$sql = "SELECT * FROM creatures_list";

$result = $db->conn->query($sql);

if ($result){
	$output = $result->fetchAll();
	echo json_encode($output);
	// do true stuff
} else {
	logger($db->conn->error());
	// do false stuff
}
<?php 

require_once('../common/connection.php');

$db = new DbConnect($admin, $pass);

$sql = "SHOW DATABASES";

$result = $db->conn->query($sql);

//javascript looks like this: $result = $db.conn.query($sql);

if ($result){
	$output = $result->fetchAll();
	logger($output);
	echo json_encode($output);
	// do true stuff
} else {
	logger($db->conn->error());
	// do false stuff
}

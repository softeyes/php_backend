<?php 

require_once('../common/connection.php');

sleep('1');

$db = new DbConnect($admin, $pass);

$user_name = $_GET['user_name'];

$password = $_GET['user_password'];

logger($user_name.$password);

$sql = "CREATE USER $user_name@'localhost' IDENTIFIED BY '$password'";

$result = $db->conn->query($sql);

if ($result){
	logger("created user");
	echo "created user $user_name@'localhost'";
} else {
	logger($db->conn->error());
}


<?php 

require('logger.php');
require_once('credentials.php');

class DbConnect
{
	public $conn;
	public function __construct($app_user, $app_pass)
	{		
		try {
    		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=creatures_db", $app_user, $app_pass);
    		// set the PDO error mode to exception
    		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		return $this->conn;
	
		} catch(PDOException $e) {
			logger("Connected failed: " . $e->getMessage()); 
		}
	}
	public function kill(){
			$this->conn = null;
		}
}
<?php
	//Connect to db
  function dbConnectpdo(){
	$servername = "internal-db.s121974.gridserver.com";
	$username = "db121974";
	$password = "NepTune21?~";
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=db121974_gcl", $username, $password);
      return $conn;
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }
exit;
}
 ?>

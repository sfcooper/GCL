<?php
	//Connect to db
  function dbConnect(){
$conn = new mysqli('internal-db.s121974.gridserver.com', 'db121974', 'NepTune21?~', 'db121974_gcl') or die ('Cannot open database');
return $conn;
  }

 ?>

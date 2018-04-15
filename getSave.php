<?php
function returnRows(){
	global $db;
	$statement =  $db->prepare("SELECT * FROM corps"); //create statement with select to get all rows
	$statement->execute();//run statement
	$results = 	$statement->fetchAll(PDO::FETCH_ASSOC); // associative array as result
	return $results; //return result
}
function addCorp($db, $corp ,$incorp_dt, $email, $zipcode, $owner, $phone){
	
	$sql = "INSERT INTO corps (corp, incorp_dt, email, zipcode, owner, phone) VALUES (:corp, :incorp_dt, :email, :zipcode, :owner, :phone)"; //statement to insert new corp
	$statement = $db->prepare($sql); //create statement 
	$statement->bindParam(':corp', $corp);
	$statement->bindParam(':incorp_dt', $incorp_dt);//add all parameters
	$statement->bindParam(':email', $email);
	$statement->bindParam(':zipcode', $zipcode);
	$statement->bindParam(':owner', $owner);
	$statement->bindParam(':phone', $phone);
	$statement->execute();//add data
	
}

?>
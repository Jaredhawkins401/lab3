

<?php 
require_once("dbconn.php");//check if files are included, if not include them
require_once("getsave.php");
$action = ''; 
$action = $_REQUEST['action'];
$corp = $_POST['corp'];//set all variables to the data that will be posted 
$incorp_dt = $_POST['incorp_dt'];
$email = $_POST['email'];
$zipcode = $_POST['zipcode'];
$owner = $_POST['owner'];
$phone = $_POST['phone'];
$id = $_POST['id'];

switch($action){ 
	
    case "Read":
        $corp = returnRows();
        include_once("corpEchoFull.php");
        break;
    
    
	case "Add":
		include_once("saveForm.php"); //go to form if add is clicked
		break;
	
	case "Save":
		addCorp($db, $corp, $incorp_dt, $email, $zipcode, $owner, $phone); //save is clicked, add data from variables
		$corp = returnRows();//grab rows and store in variable
		include_once("corpEcho.php");//make tables with data
		break;
	
    case "Update":
        updateCorp($db, $id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
        $corp = returnRows();
        include_once("corpEcho.php");
        break;
        
    case "Delete":
        deleteCorp($db, $id);
        $corp = returnRows();
        include_once("corpEcho.php");
        break;
	
	default:
		$corp = returnRows();
		include_once("corpEcho.php");
        


}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
     <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
</head>
<body>
</body>
</html>
<?php
//COPYRIGHT MARCO FIASCO 2019
// *************************************************************
// FILENAME: FILENAME.js
// PAGENAME: JQUERY 
// SUMMARY: 
// PAGE JS FILES: 
// CREATED 01/01/2018
// OWNER: MARCO FIASCO
// *************************************************************
 
// ************* NEW / STABLE / IN PROGRESS ******************** 
//
// PAGE STATUS: 
// *************************************************************

//*********************** TO DO  *******************************
// 
//**************************************************************

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require '../config/configmysqli.php';



if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

$userid = $_SESSION['id'];

$accesstype = $_SESSION['access'];
//log_transaction($query, "CRITICAL", "QUERY_INSERT_LIMIT", $mysqli, 'tblconnectionlist', $userid);


//echo $access->chkaccess();
if($accesstype >= 50)
{

 $categoryid   	= trim($_POST['catid']); 
 $pageid   = trim($_POST['pageid']); 


$query = "INSERT INTO tblcategorypages (`categoryid`, `pageidcat_fk`)
VALUES ('$categoryid', '$pageid')
ON DUPLICATE KEY
UPDATE categoryid='$categoryid', pageidcat_fk='$pageid'";



$result = $mysqli->query($query);
$last_id = $mysqli->insert_id;
$data = [["NEWID" =>$last_id]];
echo json_encode($data);


}
else
{

    echo "permission denied";
}



?>


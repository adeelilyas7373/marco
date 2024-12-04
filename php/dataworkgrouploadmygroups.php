

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
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


require '../config/configmysqli.php';


session_start();

$userid   = $_SESSION['id']; 


 $query = "SELECT tblgroups.id,  tblgroups.name
 	FROM tblgroups, tblgroupsrelatedusers
 	WHERE tblgroups.id = tblgroupsrelatedusers.groupid
 	AND tblgroupsrelatedusers.userid = '$userid' 
 	ORDER BY name ASC";





$result = $mysqli->query($query);
$data = array();

  while($row = $result->fetch_array())
{
  $data[] = $row;
}

$result->close();
$mysqli->close();

echo json_encode($data);


?>


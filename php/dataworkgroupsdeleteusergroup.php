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

require '../config/configmysqli.php';




$groupid   = $_POST["groupid"];
$userid   = $_POST["userid"];


$query = "DELETE FROM tblgroupsrelatedusers WHERE groupid = '$groupid' AND userid = '$userid'";     
$result = $mysqli->query($query);


echo json_encode($result);










?>


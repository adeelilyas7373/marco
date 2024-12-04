

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
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../config/configmysqli.php';




 $filter   = $_GET['filter'];
 $option   = $_GET['option'];



if( $option == "listpages")
{

  if ($filter == 'filter') {

	 $query = "SELECT id,  name
	 	FROM  tblgroups WHERE name = '$filter' ORDER BY name ASC";
}
else {
		$query = "SELECT id, name
	 	FROM  tblgroups ORDER BY name ASC";
}




}


if( $option == "listcatpages")
{
	var_dump($filter );
	exit;




	 $query = "SELECT tblusers.id, tblusers.username 
	 	FROM tblusers, tblgroupsrelatedusers
	 	WHERE tblusers.id = tblgroupsrelatedusers.userid
	 	AND tblgroupsrelatedusers.groupid = '$filter' ORDER BY tblusers.username ASC";

}



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


<?php
require '../config/configmysqli.php';


$query = "SELECT distinct id, username 
FROM tblusers, tblaccess, tblaccesstype
WHERE tblaccess.userid = tblusers.id
AND tblaccess.accessgroupid = tblaccesstype.idaccess
AND tblaccesstype.accessgroup >= 50
ORDER BY username ASC";

$result = $mysqli->query($query);
$data = array();

  while($row = $result->fetch_assoc())
{
  $data[] = $row;
}

$result->close();
$mysqli->close();

echo json_encode($data);







?>







	
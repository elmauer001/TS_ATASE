<?php

//load.php

$connect = mysqli_connect('116.203.64.195', 'root', '', 'bendapp');

$data = array();
$query = "SELECT * FROM svike ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'type'   => $row["type"],
 );
}

echo json_encode($data);

?>
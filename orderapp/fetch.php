<?php

//fetch.php
$connect = new PDO("mysql:host=localhost;dbname=pospoint", "root", "root");

$query = "SELECT * FROM tbl_product";
$statement = $connect->prepare($query);
$statement->execute();
while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);

?>
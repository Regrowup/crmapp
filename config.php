<?php
/*
define('DB_SERVER','localhost');
define('DB_USER','u559678163_pospointdbu');
define('DB_PASS' ,'!@#123qweasdZXC');
define('DB_NAME', 'u559678163_pospointdb');
*/

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'root');
define('DB_NAME', 'pospoint');

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
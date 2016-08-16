<?php
define('DB_SERVER',   'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'login');

$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Caso algo tenha dado errado, exibe uma mensagem de erro
if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());

?>
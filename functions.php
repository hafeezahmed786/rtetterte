<?php

$servername = "sql100.epizy.com";
$username = "epiz_33785948";
$password = "rpnOmvIPdaPPKl";
$dbname = "mysql-epiz_33785948_joinmeeting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

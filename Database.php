<?php


$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "shop";

$connection = mysqli_connect($server_name, $db_username, $db_password);
$db_config = mysqli_select_db($connection, $db_name);

if ($db_config) {
    // echo "Database Connected";
} else {
    echo "Failed";
}

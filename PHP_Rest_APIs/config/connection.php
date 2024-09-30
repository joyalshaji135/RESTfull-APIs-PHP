<?php

$localhost = 'localhost';
$root = 'root';
$password = '';
$database = 'student_db';


$connection = mysqli_connect($localhost,$root,$password,$database);

if (!$connection) {
    die($connection);
}

?>
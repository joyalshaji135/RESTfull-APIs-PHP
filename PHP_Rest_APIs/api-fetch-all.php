<?php

header('Content_Type: application/json');

header('Access-Control-Allow-Origin: *');

require_once('./config/connection.php');


$select_query = "select * from student_details";
$select_execute_query = mysqli_query($connection,$select_query) or die("SQL Query Fail");

if (mysqli_num_rows($select_execute_query) > 0) {
    $records = mysqli_fetch_all($select_execute_query, MYSQLI_ASSOC);

    echo json_encode($records);

}else
{
    echo json_encode(array('message' => 'No Records Found' , "Status" => false));
}

?>
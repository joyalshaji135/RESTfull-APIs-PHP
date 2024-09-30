<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['s_id'];

require_once('./config/connection.php');

$select_query = "select * from student_details where s_id = {$student_id}";
$select_execute_query = mysqli_query($connection,$select_query);
    if (mysqli_num_rows($select_execute_query) > 0) {
        $single_record = mysqli_fetch_all($select_execute_query, MYSQLI_ASSOC);
        echo json_encode($single_record);

    }
    else
    {
        echo json_encode(array('message' => 'record are not found' , 'status' => false));
    }



?>
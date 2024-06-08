<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include_once "../config.php";


    $getUsers= $conn->query("SELECT id, username, job_title, access, nrc, Date  from users");

$data = array();
if($getUsers->num_rows > 0){
    while($row = $getUsers->fetch_assoc()){
	  
        $row['Date'] = date('M d, Y',strtotime($row['Date']));
        $data[]= $row;
    }
    echo json_encode($data);
}else{
    echo json_encode("no Users");
}
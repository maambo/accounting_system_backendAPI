<?php
include_once "../config.php";

$id= $_POST['id'];
if(isset($id)){
    $getUsers= $conn->query("SELECT * from users where id=".$id);
}else{
    $getUsers= $conn->query("SELECT * from users");
}
$data = array();
if($getUsers->num_rows > 0){
    while($row = $getUsers->fetch_assoc()){
	  
	 
        $data[]= $row;
    }
    echo json_encode($data);
}else{
    echo json_encode("no Users");
}
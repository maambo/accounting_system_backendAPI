<?php
include('../config.php');
$id = $_POST['id'];
if(isset($id)){
$remove = $conn->query("delete from users where id =".$id);

if($remove){
	echo json_encode("success");
}else{
	echo json_encode("error");
}}
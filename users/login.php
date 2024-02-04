<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
	include '../config.php';

	$data = array();

	if($_POST['username'] && $_POST['password']){
	$username = $_POST['username'];
    $password = $_POST['password'];
	$fqry = $conn->query("SELECT id FROM users where username='$username' and password = '$password' ");
	
	if($fqry->num_rows > 0){
    $row = $fqry->fetch_assoc();
	$data[]=array_merge(array('status'=>200), $row);


		echo json_encode($data);
}else{
	$data[]=array('status'=>202);
    echo json_encode($data);
}

}


?>
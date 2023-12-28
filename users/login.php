<?php 
header("Access-Control-Allow-Origin: http://localhost:51383");
	include '../config.php';
	if(!empty($_POST['username']) && !empty($_POST['password'])){
	$username = $_POST['username'];
    $password = $_POST['password'];
	$fqry = $conn->query("SELECT * FROM users where username='$username' and password = '$password' ");
	
	if($fqry->num_rows > 0){

		echo json_encode("success");
}else{
    echo json_encode("Wrong username or Password");
}

	}else{
		echo json_encode("Nousers");
	}


?>
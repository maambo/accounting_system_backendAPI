<?php 
	include '../config.php';
	if(!empty($_POST['username']) && !empty($_POST['password'])){
	$username = $_POST['username'];
    $password = $_POST['password'];
	$fqry = $conn->query("SELECT * FROM users where username='$username' and password = '$password' ");
	
	if($fqry->num_rows == 1){

	echo json_encode("user Exists");
}else{
    $fqry1 = $conn->query("INSERT into users(username, password) VALUES('".$username."','".$password."')");
    if($fqry1){
        echo json_encode("success");
    }
}

	}else{
		echo "please Enter all the details!";
	}


?>
<?php 
	include '../config.php';
	if(isset($_POST['username'])){
	$username = $_POST['username'];
    $password = $_POST['password'];
	$phone_no = $_POST['phone_no'];
	$TPIN = $_POST['TPIN'];
	$job_tittle =$_POST['job_tittle'];
	$access = $_POST['access'];
	$id = $_POST['id'];
	$fqry = $conn->query("SELECT * FROM users where username='$username'");
	
	if($fqry->num_rows > 0){

	echo json_encode("user Exists");
}else{
	if(!empty($id)){
		$fqry1 = $conn->query("INSERT into users(username, password, phone_no, TPIN, job_tittle, access) VALUES('".$username."','".$password."')");
	}else{
		$fqry1 = $conn->query("UPDATE users set username ='{$username}', password = '{$password}', phone_no = '{$phone_no}', TPIN = '{$TPIN}', job_tittle = '{$job_tittle}', access = '{$access}' where id = '{$id}'");
	}
   
    if($fqry1){
        echo json_encode("success");
    }
}

	}else{
		echo "please Enter the username";
	}


?>
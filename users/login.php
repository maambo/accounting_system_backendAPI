<?php 
header("Access-Control-Allow-Origin: http://localhost:51383");
	include '../config.php';
	if(!empty($_POST['username']) && !empty($_POST['password'])){
	$username = $_POST['username'];
    $password = $_POST['password'];
	$fqry = $conn->query("SELECT id FROM users where username='$username' and password = '$password' ");
	$data = array();
	if($fqry->num_rows > 0){
while($row = $fqry->fetch_assoc()){
	$data[]= array_merge($row,['status'=>200]);
}
		echo json_encode($data);
}else{
    echo json_encode("202");
}

}else{
		echo json_encode("404");
}


?>
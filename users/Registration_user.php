<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
	include '../config.php';
	if(isset($_POST['username'])){
	$username = $_POST['username'];
    $password = $_POST['password'];
	$phone_no = $_POST['phone_no'];
	$job_tittle =$_POST['job_tittle'];
	$access = $_POST['access'];
	$fqry = $conn->query("SELECT * FROM users where username='$username'");
	
	if($fqry->num_rows > 0){

	echo json_encode("user Exists");
}else{

	if(isset($_FILES['img'])){// if uploaded
		$img_name = $_FILES['img']['name']; //geting user uploaded img name
		$img_type = $_FILES['img']['type']; //geting user uploaded img type
		$tmp_name = $_FILES['img']['tmp_name'];// temporary name is used to save/move file in our folder

		//let,s explode image and get the last extention like jpeg png
		$img_explode =explode('.', $img_name);
		$img_ext = end($img_explode);//get extention

		$extentions =['png','jpeg','jpg','PNG','JPEG','JPEG']; //valid extentions
		if(in_array($img_ext, $extentions) === true){///check the image extention
			$time = time(); //this will return the current time so the that an image has a unique name
			
			
			$new_img_name = $time.$img_name;
		   
			if(move_uploaded_file($tmp_name, "./user_img/".$new_img_name)){//if sucessfully moved all mved image to our folder
				if(empty($id)){


	if(!empty($id)){
		$fqry1 = $conn->query("INSERT into users(username, password, phone_no, TPIN, job_tittle, image, access) VALUES('".$username."','".$password."','".$phone_no."','".$TPIN."','".$job_tittle."','".$new_img_name."','".$access."'");
	}else{
		$fqry1 = $conn->query("UPDATE users set username ='{$username}', password = '{$password}', phone_no = '{$phone_no}', TPIN = '{$TPIN}', job_tittle = '{$job_tittle}', image ='{$new_img_name}', access = '{$access}' where id = '{$id}'");
	}
   
    if($fqry1){
        echo json_encode("success");
    }
}}

	}else{
		echo json_encode("500");
	}

		}else{
			echo "no image selected";
		}}}
?>
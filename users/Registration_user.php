<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include '../config.php';

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone_no = $_POST['phone_no'];
    $nrc = $_POST['nrc'];
    $job_tittle = $_POST['job_tittle'];
    $access = $_POST['access'];

    $fqry = $conn->query("SELECT * FROM users where username='$username'");

    if($fqry->num_rows > 0) {
        echo json_encode("user Exists");
    } else {
        if(isset($_POST['img']) && !empty($_POST['img'])) { // If image is posted
            $base64_image = $_POST['img'];
            $img_data = base64_decode($base64_image);

            $time = time(); // Unique filename
            $new_img_name = $time . ".png"; // Assume PNG format, you can handle other formats as well

            if(file_put_contents("./user_img/" . $new_img_name, $img_data)) {
                // If image saved successfully
                if(empty($id)) {
                    // If no id is provided, insert a new record
                    $fqry1 = $conn->query("INSERT into users(username, password, phone_no, nrc, job_title, image, access) 
                                           VALUES('".$username."','".$password."','".$phone_no."','".$nrc."','".$job_tittle."','".$new_img_name."','".$access."')");
                } else {
                    // If id is provided, update the existing record
                    $fqry1 = $conn->query("UPDATE users 
                                           SET username ='{$username}', password = '{$password}', phone_no = '{$phone_no}', 
                                           TPIN = '{$TPIN}', job_tittle = '{$job_tittle}', image ='{$new_img_name}', 
                                           access = '{$access}' 
                                           WHERE id = '{$id}'");
                }

                if($fqry1) {
                    echo json_encode("success");
                } else {
                    echo json_encode("Failed to update database");
                }
            } else {
                echo json_encode("Failed to save image");
            }
        } else {
            echo json_encode("No image data received");
        }
    }
}
?>

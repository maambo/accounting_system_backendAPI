<?php
include '../config.php';

$Company_id = $_POST['Company_id'];
$Company_name = $_POST['Company_name'];
$CP_Phone_no = $_POST['CP_Phone_no'];
$CP_Email = $_POST['CP_Email'];
$CP_Bank_name = $_POST['CP_Bank_name'];
$CP_Account_name = $_POST['CP_Account_name'];
$CP_Account_no = $_POST['CP_Account_no'];
$CP_Branch_name = $_POST['CP_Branch_name'];
$CP_TPIN = $_POST['CP_TPIN'];
$CP_Address = $_POST['CP_Address'];
$CP_City = $_POST['CP_City'];
$CP_Country = $_POST['CP_Country'];
$CP_Added_by = $_POST['CP_Added_by'];

if (isset($_FILES['CP_Logo'])) { // if uploaded
    $img_name = $_FILES['CP_Logo']['name']; //geting user uploaded img name
    $img_type = $_FILES['CP_Logo']['type']; //geting user uploaded img type
    $tmp_name = $_FILES['CP_Logo']['tmp_name']; // temporary name is used to save/move file in our folder

    //let,s explode image and get the last extention like jpeg png
    $img_explode = explode('.', $img_name);
    $img_ext = end($img_explode); //get extention

    $extentions = ['png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPEG']; //valid extentions
    if (in_array($img_ext, $extentions) === true) { ///check the image extention
        $time = time(); //this will return the current time so the that an image has a unique name

        $new_img_name = $time . $img_name;

        if (move_uploaded_file($tmp_name, "./user_img/" . $new_img_name)) { //if sucessfully moved all mved image to our folder

            $fqry1 = $conn->query("UPDATE company_details set Company_name ='{$Company_name}',
             CP_Phone_no = '{$CP_Phone_no}', CP_Email = '{$CP_Email}', CP_Bank_name = '{$CP_Bank_name}',
             CP_Account_name = '{$CP_Account_name}', CP_Account_no = '{$CP_Account_no}' , CP_Branch_name = '{$CP_Branch_name}'
             , CP_Branch_name = '{$CP_Branch_name}', CP_TPIN = '{$CP_TPIN}', CP_Address = '{$CP_Address}',
             CP_City = '{$CP_City}', CP_Country = '{$CP_Country}', CP_Added_by = '{$CP_Added_by}', CP_Logo ='{$new_img_name}' where id = '{$Company_id}'");
        }

        if ($fqry1) {
            echo json_encode("success");
        }
    }
}

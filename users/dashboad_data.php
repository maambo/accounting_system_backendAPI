<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include '../config.php';
if (!empty($_POST['userId'])) {
    $userId = $_POST['userId'];
    $fqry = $conn->query("SELECT * FROM users where id='$userId'");

    $data = array();
    if ($fqry->num_rows > 0) {
        $userDetails = $fqry->fetch_assoc();
        $company_id = $userDetails["Company_id"];

        $fqry1 = $conn->query("SELECT * FROM company_details where id='$company_id'");
        $companyDetails = $fqry1->fetch_assoc();

        $data1 = array_merge(['status' => 200], $userDetails);
        $data[] = array_merge($data1, $companyDetails);

        echo json_encode($data);
    } else {
        echo json_encode("404");
        }    }

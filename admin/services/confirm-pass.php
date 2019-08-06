<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    error_reporting(0);
    extract($_POST, EXTR_SKIP);
    session_start();
    $sql = "SELECT `password` FROM `admins` WHERE `password`=MD5('*WAMP*$password*WAMP*') AND `username`='$_SESSION[a_username]' AND `name`='$_SESSION[a_name]'";
    require '../../services/db.inc.php';
    $conn = DB::getConnection();
    $result = $conn->query($sql);
    if ($result == true) {
        if ($result->num_rows > 0) {
            $data = array("message" => "Confirmed! It's you. Please wait.", "status" => "success");
        } else {
            $data = array("message" => "Wrong Password.", "status" => "pass_error");
        }
    } else {
        // echo $conn->error;
        $data = array("message" => "Something went wrong!", "status" => "server_error");
    }
    echo json_encode($data);
    return;
}

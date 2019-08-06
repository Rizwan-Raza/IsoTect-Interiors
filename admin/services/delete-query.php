<?php
// print_r($_REQUEST);
$data = array("message" => "Unknown method", "status" => "server_error");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    error_reporting(0);

    $sql = "DELETE FROM `" . ($_POST['type'] == 1 ? "x" : "") . "queries` WHERE `_" . ($_POST['type'] == 1 ? "x" : "") . "qid`=$_POST[_qid]";

    // $data = array("message" => $sql, "status" => "success");
    // echo json_encode($data);
    // return;
    require '../../services/db.inc.php';
    $conn = DB::getConnection();
    $result = $conn->query($sql);
    if ($result == true) {
        $data = array("message" => "Query Deleted Successfully!", "status" => "success");
    } else {
        $data = array("message" => "Something went wrong!", "status" => "server_error");
    }
}
echo json_encode($data);
return;

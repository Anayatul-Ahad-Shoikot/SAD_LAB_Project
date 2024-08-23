<?php
include("../../../BackEnd/db_con.php");
session_start();
$acc_id = $_SESSION['acc_id'];
$chat_with = isset($_POST['chat_with']) ? $_POST['chat_with'] : '';
$msg = isset($_POST['msg']) ? $_POST['msg'] : '';

if (!$chat_with || !$msg) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
    exit;
}

$query = "INSERT INTO chats (outgoing_msg_id, incoming_msg_id, msg, timestamp, is_read) VALUES (?, ?, ?, NOW(), 0)";
$stmt = $con->prepare($query);
$stmt->bind_param("iis", $acc_id, $chat_with, $msg);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => $stmt->error]);
}
?>

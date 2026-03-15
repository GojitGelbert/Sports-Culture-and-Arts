<?php
session_start();
header('Content-Type: application/json');

require_once '../../connection/dbase.php';

$emailmobile = $_POST['email-mobile'] ?? '';

//normal error validation without database    
if ($emailmobile === '') {
    echo json_encode([
        'status' => 'error',
        'field' => 'email-mobile',
        'message' => 'Please enter an Email Address or Mobile Number'
    ]);
    exit;
}

//validation with database
$stmt = $pdo->prepare("SELECT * FROM tblaccount WHERE Email_Address = ?");
$stmt->execute([$emailmobile]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$user) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid Email Address or Mobile Number'
    ]);
    exit;
} else {
    echo json_encode([
        'status' => 'success',
        'redirect' => 'forgotpass.html'
    ]);
}
?>
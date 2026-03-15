<?php
session_start();
header('Content-Type: application/json');

require_once '../../connection/dbase.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password-login'] ?? '';

//normal error validation without database    
if ($username === '') {
    echo json_encode([
        'status' => 'error',
        'field' => 'username',
        'message' => 'Please enter a Username/Email/Mobile Number'
    ]);
    exit;
}
if ($password === '') {
    echo json_encode([
        'status' => 'error',
        'field' => 'password',
        'message' => 'Please enter a Password'
    ]);
    exit;
}

//validation with database
$stmt = $pdo->prepare("SELECT * FROM tblaccount WHERE Student_id = ?");
$stmt->execute([$username]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$user || $password !== $user['Pass']) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid username or password'
    ]);
    exit;
} else {
    $_SESSION['Student_id'] = $user['Student_id'];
    $_SESSION['Fullname'] = $user['Fullname'];
    $_SESSION['Usertype'] = $user['Usertype'];
    $_SESSION['Firstname'] = $user['Firstname'];

    echo json_encode([
        'status' => 'success',
        'redirect' => 'home/homepage.php'
    ]);
}
?>
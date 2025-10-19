<?php
session_start();

$Empty_error_message_username = "";
$Empty_error_message_password = "";
$Unmatched_error_message_username = "";
$Unmatched_error_message_password = "";

if (isset($_POST['Continue'])) {
    $studentid = $_POST['username'];
    $password = $_POST['password'];

    if (empty($studentid)) {
        $Empty_error_message_username = "Please enter a Username/Student ID";
    } else {
        $studentid = trim($studentid);
        $studentid = htmlspecialchars($studentid);
    }
    if (empty($password)) {
        $Empty_error_message_password = "Please enter a password";
    } else {
        $password = trim($password);
        $password = htmlspecialchars($password);
    }
    if (!empty($studentid) && !empty($password)) {
        $Unmatched_error_message_username = "Username is not matched";
        $Unmatched_error_message_password = "Password is not matched";
    }
} else {
    $studentid = trim($Unmatched_error_message_username);
    $studentid = htmlspecialchars($studentid);
    $password = trim($Unmatched_error_message_password);
    $password = htmlspecialchars($password);
}

require_once 'connection/dbase.php';

if (isset($_POST['Continue'])) {
    $studentid = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($studentid) && !empty($password)) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE Student_id = :studentid AND Pass = :password");

        $stmt->execute([
            'studentid' => $studentid,
            'password' => $password
        ]);

        $flag = 0;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Student_id = $row['Student_id'];
            $fname = $row['Fullname'];
            $usertype = $row['Usertype'];
            $firstname = $row['Firstname'];
            $flag = 1;
        }
        if ($flag == 1) {
            $_SESSION['Student_id'] = $studentid;
            $_SESSION['Fullname'] = $fname;
            $_SESSION['Usertype'] = $usertype;
            $_SESSION['Firstname'] = $firstname;

            echo "<script>window.location.href = 'home/homepage.php';</script>";
        } else {
        }
    }
}
?>
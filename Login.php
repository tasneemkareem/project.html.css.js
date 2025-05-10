<?php
session_start();

$serverName = "localhost";
$connectionOptions = [
    "Database" => "ContactMessages",
    "Uid" => "UserName",
    "PWD" => "Password",
    "CharacterSet" => "UTF-8",
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("فشل الاتصال بالخادم: " . print_r(sqlsrv_errors(), true));
}

$email = $_POST['email'];
$password = $_POST['password'];
$user_id = $_POST['user_id'];

$sql = "SELECT * FROM Users WHERE Email = ? AND Password = ? AND User_ID = ?";
$params = [$email, $password, $user_id];
$stmt = sqlsrv_query($conn, $sql, $params);

if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $_SESSION['user'] = $row['Name'];
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>alert('بيانات غير صحيحة'); window.location.href = 'index.html';</script>";
}

sqlsrv_close($conn);
?>
<?php
$serverName = "localhost"; 
$connectionOptions = [
    "Database" => "ContactMessages",
    "Uid" => "User Name",
    "PWD" => "Pass Word",
    "CharacterSet" => "UTF-8"
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$esp32_id = $_POST['esp32_id']; 


$sql = "INSERT INTO ContactMessages (Name, Email, PassWord, Message, Esp32ID) VALUES (?, ?, ?, ?, ?)";
$params = [$name, $email, $password, $message, $esp32_id]; 

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt) {
    echo "تم إرسال الرسالة بنجاح!";
} else {
    echo "حدث خطأ أثناء الإرسال.";
    print_r(sqlsrv_errors());
}

sqlsrv_close($conn);
?>

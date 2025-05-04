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

 
$sql = "INSERT INTO ContactMessages (Name, Email,Pass Word, Message) VALUES (?, ?, ?)";
$params = [$name, $email,$PassWord, $message];

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt) {
    echo "تم إرسال الرسالة بنجاح!";
} else {
    echo "حدث خطأ أثناء الإرسال.";
    print_r(sqlsrv_errors());
}

sqlsrv_close($conn);
?>

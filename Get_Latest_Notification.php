<?php
$serverName = "localhost";
$connectionOptions = [
    "Database" => "ContactMessages",
    "Uid" => "UserName",
    "PWD" => "Password",
    "CharacterSet" => "UTF-8",
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    echo "فشل الاتصال";
    exit();
}

$sql = "SELECT TOP 1 Message FROM Messages ORDER BY ID DESC";
$stmt = sqlsrv_query($conn, $sql);

if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo $row['Message'];
} else {
    echo "لا توجد إشعارات بعد.";
}

sqlsrv_close($conn);
?>
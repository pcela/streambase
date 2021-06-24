<?php

$conn = new PDO('mysql:dbname=rzvcvajd_sb;host=localhost:3306;charset=utf8', 'rzvcvajd_sb', 'Ct8.pl12!');

$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (mysqli_connect_errno()) {
    echo "Server error.";
    exit();
}

$ip = $_SERVER['REMOTE_ADDR'];

$stmt = $conn->prepare('SELECT COUNT(*) AS v FROM visitors WHERE ip = :ip');
$stmt->execute(array('ip'=>$ip));
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


if($result[0]['v'] == 0) {
    $stmt = $conn->prepare('INSERT INTO visitors (ip) VALUES (:ip)');
    $stmt->execute(array('ip'=>$ip));
}


$stmt = $conn->prepare('SELECT COUNT(*) AS v FROM `visitors` WHERE DATE(`date`) = CURDATE()');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $conn->prepare('DELETE FROM visitors WHERE DATE(date) = DATE(NOW() - INTERVAL 1 DAY)');
$stmt->execute();


echo '<span style="color: #d8d8f6"><b>'.$result[0]['v'].'</b></span> os.';
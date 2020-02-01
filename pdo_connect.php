<?php

$dsn = 'mysql:dbname=20200125;host=127.0.0.1';
    $user = 'takahashi';
    $password = '12345';


try {
    $dbh = new PDO($dsn, $user, $password);
    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}

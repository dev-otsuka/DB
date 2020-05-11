<?php

require 'pdo_connect.php';

// データを追加
$sql = 'INSERT INTO employee (id, name, job, height, weight) VALUES (1,"田中","プログラマー","170","60")';

$stmt = $dbh->prepare($sql);
$stmt->execute();

// test commenct
$dbh = null;






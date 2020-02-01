<?php
    $dsn = 'mysql:dbname=20200125;host=127.0.0.1';
    $user = 'takahashi';
    $password = '12345';

    $db = new PDO($dsn, $user, $password);

    $dbresult = $db->query("SELECT * FROM item");
    $result = $dbresult->fetch();
    var_dump($result);


    
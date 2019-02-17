<?php 

	header('Content-Type: plain/text');

	include 'config.php';
    $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);

    $sql = 'select * from invite';
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r(rows);

?>
<?php

$host = "localhost";
$user = "kumarraj";
$passwd = "Bagya469";
$db = "crypto";

function execute_query($query, $con)
{
    $res = $con->query($query);

    if (!$res) {

        echo "failed to execute query: $query\n";
    } else {
        echo "\nQuery: $query executed\n";
    }

    if (is_object($res)) {

        $res->close();
    }
}

$con = new mysqli($host, $user, $passwd, $db);

if ($con->connect_errno) {

    printf("connection failed: %s\n", $con->connect_error());
    exit();
}

$query = "DROP TABLE IF EXISTS currencies";
execute_query($query, $con);

$query = "CREATE TABLE currencies(id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255), price INT)";
execute_query($query, $con);

$query = "INSERT INTO currencies(name, price) VALUES('ADA', 2)";
execute_query($query, $con);

$query = "INSERT INTO currencies(name, price) VALUES('FLOW', 15)";
execute_query($query, $con);

$query = "INSERT INTO currencies(name, price) VALUES('BTC', 60000)";
execute_query($query, $con);

$query = "INSERT INTO currencies(name, price) VALUES('LOCG', 450)";
execute_query($query, $con);

$query = "INSERT INTO currencies(name, price) VALUES('RSR', 9)";
execute_query($query, $con);

$query = "INSERT INTO currencies(name, price) VALUES('DOT', 64)";
execute_query($query, $con);

$query = "INSERT INTO currencies(name, price) VALUES('ICP', 134)";
execute_query($query, $con);
$con->close();
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

$query = "DROP TABLE IF EXISTS people";
execute_query($query, $con);

$query = "CREATE TABLE people(people_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255), last_name VARCHAR(255, mid_name VARCHAR(255), adress VARCHAR(255),contact VARCHAR(255), comment VARCHAR(255))";
execute_query($query, $con);

$query = "INSERT INTO people(first_name, last_name, mid_name, adress, contact, comment) VALUES('Raj', 'BL', 'Kumar', 'Kumar Nagar', 'raj@cs.in', 'Binance Wallet')";
execute_query($query, $con);

$query = "INSERT INTO people(first_name, last_name, mid_name, adress, contact, comment) VALUES('Laxmy', 'LN', 'Narayan', 'Kumar Nagar', 'lax@cs.in', 'Huobi Wallet')";
execute_query($query, $con);

$query = "INSERT INTO people(first_name, last_name, mid_name, adress, contact, comment) VALUES('Hari', 'VS', 'Prasath', 'Kumar Nagar', 'hari@cs.in', 'Kucoin Wallet')";
execute_query($query, $con);

$con->close();
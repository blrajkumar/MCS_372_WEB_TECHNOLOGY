<?php

$host = "localhost";
$user = "kumarraj";
$passwd = "Bagya469";
$db = "crypto";

$con = new mysqli($host, $user, $passwd, $db);

if ($con->connect_errno) {

    printf("connection failed: %s\n", $con->connect_error());
    exit();
}

$query = "SELECT * FROM currencies";

if ($res = $con->query($query)) {

    printf("Select query returned %d rows.\n", $res->num_rows);

    while ($row = $res->fetch_row())
    {
        printf("\n\t%s %s %s\n", $row[0], $row[1], $row[2]);
    }

    $res->close();
} else {

    echo "failed to fetch data\n";
}

$con->close();
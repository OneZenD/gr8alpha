<?php

$host = env('DB_HOST');
$database = $_ENV['DB_HOST'];
$username = env('DB_USERNAME');
$password = env('DB_PASSWORD');

$mysqli = new mysqli('host', 'username', 'password', 'database');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT)") ||
    !$mysqli->query("INSERT INTO test(id) VALUES (1)")) {
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
?>
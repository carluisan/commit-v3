<?php
// lib/db.php

function getDbConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyectocda";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
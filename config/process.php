<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $query = "SELECT * FROM post";

    $stmt = $conn->prepare($query);
    $stmt->exectute();

    $contacts = $stmt->fetchAll();

?>
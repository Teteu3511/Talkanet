<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $posts = [];

    $query = "SELECT * FROM post";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $posts = $stmt->fetchAll();
    

?>
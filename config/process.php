<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    // Modify the database

    if (!empty($data)) {

    // Create contact

        if ($data["type"] === "create") {

            $uname = $data["username"];
            $content = $data["content"];

            $query = "INSERT INTO post (username, content) VALUES (:username, :content)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":username", $uname);
            $stmt->bindParam(":content", $content);

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Postagem adicionada!";

            } catch(PDOException $e) {

                // Connection Error

                $error = $e->getMessage();

                echo "Erro: $error";

            }
        
        }

        // Redirect to Home

        header("location:" . $BASE_URL . "../index.php");

    }

    // Display posts

    $posts = [];

    $query = "SELECT * FROM post";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $posts = $stmt->fetchAll();

    $conn = null;

?>
<?php

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    // Modify the database

    if (!empty($data)) {

        // Create comment

        if ($data["type"] === "create") {

            $uname = $data["username"];
            $comment = $data["comment"];

            $query = "INSERT INTO comments (username, comment) VALUES (:username, :comment)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":username", $uname);
            $stmt->bindParam(":comment", $comment);

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Comentário adicionado!";

            } catch(PDOException $e) {

                // Connection Error

                $error = $e->getMessage();

                echo "Erro: $error";

            }
        
        }

        // Redirect to Home

        header("location:" . $BASE_URL . "../full-post.php");

    } else {

        $id;

        if (!empty($_GET)) {
        $id = $_GET["id"];

    }

    // Returns the full post

        if (!empty($id)) {

            $query = "SELECT * FROM comments WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $comment = $stmt->fetch();

        } else {

            // Display all posts

            $comments = [];

            $query = "SELECT * FROM comments";

            $stmt = $conn->prepare($query);
            
            $stmt->execute();

            $comments = $stmt->fetchAll();

        }
    
    }

    // Connection Close

    $conn = null;

?>
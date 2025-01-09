<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    // Modify the database

    if (!empty($data)) {

    // Create post

        if ($data["type"] === "create") {

            $uname = $data["username"];
            $content = $data["content"];
            $img_url = isset($data['img_url']) ? $data['img_url'] : '';

            $query = "INSERT INTO post (username, content, img_url) VALUES (:username, :content, :img_url)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":username", $uname);
            $stmt->bindParam(":content", $content);
            $stmt->bindParam(":img_url", $img_url);

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Postagem adicionada!";

            } catch(PDOException $e) {

                // Connection Error

                $error = $e->getMessage();

                echo "Erro: $error";

            }

            // Redirect to Chat

            header("location:" . $BASE_URL . "../chat.php");

        
        } elseif ($data["type"] === "comment") {

            $post_id = $data["post_id"];
            $uname = $data["username"];
            $comment = $data["comment"];
            $cmmnt_img_url = isset($data['cmmnt_img_url']) ? $data['cmmnt_img_url'] : '';

            $query = "INSERT INTO comments (post_id, username, comment, cmmnt_img_url) VALUES (:post_id, :username, :comment, :cmmnt_img_url)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":post_id", $post_id);
            $stmt->bindParam(":username", $uname);
            $stmt->bindParam(":comment", $comment);
            $stmt->bindParam(":cmmnt_img_url", $cmmnt_img_url);

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Comentário adicionado!";

            } catch(PDOException $e) {

                // Connection Error

                $error = $e->getMessage();

                echo "Erro: $error";

            }

            // Redirect to Home
        
            header("location:" . $BASE_URL . "../full-post.php?id=" . $post_id);
        
        }

    } else {

        $id;

        if (!empty($_GET)) {

            $id = $_GET["id"];

        }

        if (!empty($id)) {

            // Returns the full post

            $query = "SELECT * FROM post WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $post = $stmt->fetch();

        } else {

            // Displays all posts

            $posts = [];

            $query = "SELECT * FROM post ORDER BY id DESC";

            $stmt = $conn->prepare($query);
            
            $stmt->execute();

            $posts = $stmt->fetchAll();

        }

        // Displays corresponding comments

        $query = "SELECT * FROM comments WHERE post_id = :id ORDER BY id DESC";
                    
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);
                                
        $stmt->execute();
                    
        $comments = $stmt->fetchAll();
                    
    }

    // Connection Close

    $conn = null;

?>
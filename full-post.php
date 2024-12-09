<?php

    include_once("templates/header.php");

    if(isset($_SESSION['msg'])) {

        $printMsg = $_SESSION['msg'];

        $_SESSION['msg'] = '';

    }

?>

    <main>

        <?php include_once("templates/backbtn.html"); ?>

        <div class="d-flex flex-column flex-md-row gap-4 align-items-center justify-content-center">

            <div class="list-group">

                <div id="single-post-container" class="list-group-item d-flex flex-md-column gap-3 py-3">
                        
                    <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" class="rounded-circle flex-shrink-0" id="profile-icon">

                    <h1 id="main-title"><?= $post["username"] ?></h1>

                    <p><?= $post["content"] ?></p>


                </div>

                <form id="send-comment" action="<?php $BASE_URL ?>config/process.php" method="POST">

                    <input type="hidden" name="type" value="comment">
                    <input type="hidden" name="post_id" value="<?= $id ?>">

                    <div class="send-section">

                        <label for="uname" class="send-label" id="user-label">Nome de usuário:</label>
                        <input class="send-box" id="uname" name="username" placeholder="Insira seu nome de usuário" required autocomplete="username">

                    </div>

                    <div class="send-section">

                        <label for="ctnt" class="send-label">Escreva seu comentário:</label>
                        <input class="send-box" id="cmmt" name="comment" placeholder="Escreva seu comentário" required autocomplete="off">
                        <button type="submit" id="send-submit"><i class="fa-solid fa-paper-plane"></i></button>

                    </div>

                </form>

            </div>

        </div>



        <?php if(count($comments) > 0): ?>

            <div class="d-flex flex-column flex-md-row gap-4 align-items-center justify-content-center">

                <div class="list-group">

                    <div id="single-post-container" class="list-group-item d-flex flex-md-column gap-3 py-3">

                        <?php foreach ($comments as $comment): ?>
            
                            <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" class="rounded-circle flex-shrink-0" id="profile-icon">

                            <h1 id="main-title"><?= $comment["username"] ?></h1>

                            <p><?= $comment["comment"] ?></p>

                            <hr>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        <?php else: ?>

            <div class="empty-list-container">

                <p id="empty-list-text">Tudo vazio por aqui, Seja o primeiro a postar algo.</p>

            </div>

        <?php endif; ?>

    </main>

<?php

    include_once("templates/footer.php");

?>
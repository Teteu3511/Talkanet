<?php

    include_once("templates/header.php");

    if(isset($_SESSION['msg'])) {

        $printMsg = $_SESSION['msg'];

        $_SESSION['msg'] = '';

    }

?>

    <main>

        <script type="text/javascript" src="<?= $BASE_URL ?>heartClicked.js"></script>

        <?php include_once("templates/backbtn.html"); ?>

        <div class="d-flex flex-column flex-md-row gap-4 align-items-center justify-content-center">

            <div class="post-list-group">

                <div id="single-post-container" class="list-group-item d-flex flex-md-column gap-2 py-2">
                        
                    <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" class="rounded-circle flex-shrink-0" id="profile-icon">

                    <h1 id="main-title"><?= $post["username"] ?></h1>

                    <p><?= $post["content"] ?></p>

                    <img src="<?= $post["img_url"] ?>" id="cmmnt_img">

                    <div class="actions">

                        <button onclick="heartClicked()" class="action-button" id="heart"><i class="fa-solid fa-heart"></i></button>

                        <span class="action-button"><i class="fa-solid fa-share" id="share"></i></span>

                    </div>

                    <hr>

                </div>

                <h5 id="sendCommentsTitle">Comentar nesta postagem</h5>

                <form id="send-comment" action="<?php $BASE_URL ?>config/process.php" method="POST">

                    <input type="hidden" name="type" value="comment">
                    <input type="hidden" name="post_id" value="<?= $id ?>">

                    <input class="send-box" id="uname" name="username" placeholder="Insira seu nome de usuário" required autocomplete="username">

                    <input class="send-box" id="cmmt" name="comment" placeholder="Escreva seu comentário" required autocomplete="off">

                    <input type="url" class="send-box" id="cmmntImg" name="cmmnt_img_url" placeholder="(opcional) Url da imagem">
                    <button type="submit" id="send-submit"><i class="fa-solid fa-paper-plane"></i></button>

                </form>

                <h5 id="commentsTitle">Comentários</h5>

            </div>

        </div>

        <?php if(count($comments) > 0): ?>

            <div class="d-flex flex-column flex-md-row gap-4 align-items-center justify-content-center">

                <div class="comment-list-group">

                    <div id="single-comment-container" class="list-group-item d-flex flex-md-column gap-1 py-1">

                        <?php foreach ($comments as $comment): ?>
            
                            <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" class="rounded-circle flex-shrink-0" id="profile-icon">

                            <h1 id="main-title"><?= $comment["username"] ?></h1>

                            <p><?= $comment["comment"] ?></p>

                            <img src="<?= $comment["cmmnt_img_url"] ?>" id="cmmnt_img">

                            <div class="actions">

                                <button onclick="heartClicked()" class="action-button" id="heart"><i class="fa-solid fa-heart"></i></button>

                                <span class="action-button"><i class="fa-solid fa-share" id="share"></i></span>

                            </div>

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
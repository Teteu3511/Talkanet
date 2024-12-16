<?php

    include_once("templates/header.php");

?>

    <main>

        <script type="text/javascript" src="<?= $BASE_URL ?>heartClicked.js"></script>

        <?php if(isset($printMsg) && $printMsg != ''): ?>

            <p id="msg"><?php $printMsg ?></p>

        <?php endif; ?>

        <?php if(count($posts) > 0): ?>

            <div class="send-post-container">

                <h5 id="sendPostTitle">Criar uma postagem</h5>

                <form id="send-post" action="<?php $BASE_URL ?>config/process.php" method="post">

                    <input type="hidden" name="type" value="create">

                    <input type="text" class="send-box" id="uname" name="username" placeholder="Insira seu nome de usuário" required autocomplete="username">

                    <input type="text" class="send-box" id="ctnt" name="content" placeholder="Escreva sua postagem" required autocomplete="off">

                    <input type="url" class="send-box" id="postImg" name="img_url" placeholder="(opcional) Url da imagem">
                    <button type="submit" id="send-submit"><i class="fa-solid fa-paper-plane"></i></button>

                </form>

            </div>

            <div class="d-flex flex-column flex-md-row gap-4 align-items-center justify-content-center">

                <div class="list-group">

                    <div id="posts-container">
                            
                        <?php foreach ($posts as $post): ?>

                            <div class="list-group-item d-flex flex-md-column gap-3 py-3" id="single-post">

                                <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" class="rounded-circle flex-shrink-0" id="profile-icon">

                                <h6 class="mb-0" id="post-uname"><?= $post["username"] ?></h6>
                                <p class="mb-0 opacity-75" id="post-content"><?= $post["content"] ?></p>
                                <img src="<?= $post["img_url"] ?>" id="post_img">

                                <div class="actions">

                                    <button onclick="heartClicked()" class="action-button" id="heart"><i class="fa-solid fa-heart"></i></button>

                                    <a href="<?= $BASE_URL ?>full-post.php?id=<?= $post["id"] ?>" class="action-button" id="comments">

                                        <i class="fa-solid fa-comment"></i>

                                    </a>

                                    <span class="action-button"><i class="fa-solid fa-share" id="share"></i></span>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        <?php else: ?>

            <div class="send-post-container">

                <h5 id="sendPostTitle">Criar uma postagem</h5>

                <form id="send-post" action="<?php $BASE_URL ?>config/process.php" method="POST">

                    <input type="hidden" name="type" value="create">

                    <input class="send-box" id="uname" name="username" placeholder="Insira seu nome de usuário" required autocomplete="username">

                    <input class="send-box" id="ctnt" name="content" placeholder="Escreva sua postagem" required autocomplete="off">

                    <input class="send-box" id="postImg" name="img_url" placeholder="(opcional) Url da imagem" autocomplete="off">
                    <button type="submit" id="send-submit"><i class="fa-solid fa-paper-plane"></i></button>

                </form>

            </div>

            <div class="empty-list-container">

                <p id="empty-list-text">Tudo vazio por aqui, Seja o primeiro a postar algo.</p>

            </div>

        <?php endif; ?>

    </main>

<?php

    include_once("templates/footer.php");

?>
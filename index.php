<?php

    include_once("templates/header.php");

?>

    <main>

        <?php if(isset($printMsg) && $printMsg != ''): ?>

            <p id="msg"><?php $printMsg ?></p>

        <?php endif; ?>

        <?php if(count($posts) > 0): ?>

            <div class="send-post-container">

            <form id="send-post" action="<?php $BASE_URL ?>config/process.php" method="POST">

                <input type="hidden" name="type" value="create">

                <div class="send-section">

                    <label for="uname" class="send-label" id="user-label">Nome de usuário:</label>
                    <input class="send-box" id="uname" name="username" placeholder="Insira seu nome de usuário" required autocomplete="username">

                </div>

                <div class="send-section">

                    <label for="ctnt" class="send-label">Escreva sua postagem:</label>
                    <input class="send-box" id="ctnt" name="content" placeholder="Escreva sua postagem" required autocomplete="off">
                    <button type="submit" id="send-submit"><i class="fa-solid fa-paper-plane"></i></button>

                </div>

            </form>

        </div>

            <div class="d-flex flex-column flex-md-row gap-4 align-items-center justify-content-center">

                <div class="list-group">

                        <div id="posts-container">
                            
                            <?php foreach ($posts as $post): ?>

                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">

                                    <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" class="rounded-circle flex-shrink-0" id="profile-icon">

                                    <h6 class="mb-0" id="post-uname"><?= $post["username"] ?></h6>
                                    <p class="mb-0 opacity-75" id="post-content"><?= $post["content"] ?></p>

                                </a>

                            <?php endforeach; ?>


                        </div>

                    </a>

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
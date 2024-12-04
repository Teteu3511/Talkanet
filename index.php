<?php

    include_once("templates/header.php");

?>

    <main>

        <?php if(isset($printMsg) && $printMsg != ''): ?>

            <p id="msg"><?php $printMsg ?></p>

        <?php endif; ?>

        <?php if(count($posts) > 0): ?>

            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center" id="post-table">

                <div class="list-group">

                        <div class="d-flex gap-2 w-100 justify-content-between">

                            <div>
                                
                                <?php foreach ($posts as $post): ?>

                                    
                                    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">

                                    <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" width="32" height="32" class="rounded-circle flex-shrink-0">

                                    <h6 class="mb-0"><?= $post["username"] ?></h6>
                                    <p class="mb-0 opacity-75"><?= $post["content"] ?></p>

                                    </a>

                                <?php endforeach; ?>

                            </div>

                        </div>

                    </a>

                </div>

            </div>

        <?php else: ?>

            <div class="empty-list-container">

                <p id="empty-list-text">Tudo vazio por aqui, Seja o primeiro a postar algo.</p>

            </div>

        <?php endif; ?>

        <div class="send-post-container">

            <form id="send-post" action="<?php $BASE_URL ?>config/process.php" method="POST">

                <input type="hidden" name="type" value="create">

                <div class="send-section">

                    <label for="uname" class="send-label">Nome de usuário:</label>
                    <input class="send-box" id="uname" name="username" placeholder="Insira seu nome de usuário" required>

                </div>

                <div class="send-section">

                    <label for="ctnt" class="send-label">Escreva sua postagem:</label>
                    <input class="send-box" id="ctnt" name="content" placeholder="Escreva sua postagem" required>

                </div>

                <button type="submit" id="send-submit"><i class="fa-solid fa-paper-plane"></i></button>

            </form>

        </div>

    </main>

<?php

    include_once("templates/footer.php");

?>
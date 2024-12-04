<?php

    include_once("templates/header.php");

?>

    <main>

        <?php if(isset($printMsg) && $printMsg != ''): ?>

            <p id="msg"><?php $printMsg ?></p>

        <?php endif; ?>

        <?php if(count($posts) > 0): ?>

            <table id="post-table">

                <tbody>

                    <?php foreach ($posts as $post): ?>

                        <tr>

                            <td scope="row" class="uname"><?= $post["username"] ?></td>
                            <td scope="row" class="content"><?= $post["content"] ?></td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        <?php else: ?>

            <div class="empty-list-container">

                <p id="empty-list-text">Tudo vazio por aqui, Seja o primeiro a postar algo.</p>

            </div>

        <?php endif; ?>

        <div class="send-post-container">

            <form id="send-post" action="<?php $BASE_URL ?>config/process.php" method="POST">

                <input type="hidden" name="type" value="create">

                <div class="send-section">

                    <label for="username" class="send-label">Nome de usuário:</label>
                    <input class="send-box" id="username" name="username" placeholder="Insira seu nome de usuário" required>

                </div>

                <div class="send-section">

                    <label for="content" class="send-label">Escreva sua postagem:</label>
                    <input class="send-box" id="content" name="content" placeholder="Escreva sua postagem" required>

                </div>

                <button type="submit" id="send-submit"><i class="fa-solid fa-paper-plane"></i></button>

            </form>

        </div>

    </main>

<?php

    include_once("templates/footer.php");

?>
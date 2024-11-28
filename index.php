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

                            <td scope="row"><?= $post["username"] ?></td>
                            <td scope="row"><?= $post["content"] ?></td>
                            <i class="fa-regular fa-thumbs-up"></i>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        <?php else: ?>

            <p id="empty-list-text">Tudo vazio por aqui, <a href="<?= $BASE_URL ?>add_post.php">Seja o primeiro a postar algo</a>.</p>

        <?php endif; ?>

    </main>

<?php

    include_once("templates/footer.php");

?>
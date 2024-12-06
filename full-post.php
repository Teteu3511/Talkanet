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

                <div id="posts-container">
                        
                    <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" class="rounded-circle flex-shrink-0" id="profile-icon">

                    <h1 id="main-title"><?= $posts["username"] ?></h1>

                    <p><?= $posts["content"] ?></p>

                </div>

            </div>

        </div>

    </main>

<?php

    include_once("templates/footer.php");

?>
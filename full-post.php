<?php

    include_once("templates/header.php");

    if(isset($_SESSION['msg'])) {

        $printMsg = $_SESSION['msg'];

        $_SESSION['msg'] = '';

    }

?>

    <main>

    <script type="text/javascript">

        if (user hits the submit button) {
            const uname = document.getElementById("uname")
            const comment = document.getElementById("cmmt")
            
            //Happens in Background
            CallPage("comment_process.php?uname=" + uname + "&comment=" + comment);
            
            //User sees this...
            Remove(form)
            Display("Thank you for your comment.")
        }

    </script>

        <?php include_once("templates/backbtn.html"); ?>

        <div class="d-flex flex-column flex-md-row gap-4 align-items-center justify-content-center">

            <div class="list-group">

                <div id="posts-container">
                        
                    <img src="<?= $BASE_URL ?>img/profile.png" alt="Perfil" class="rounded-circle flex-shrink-0" id="profile-icon">

                    <h1 id="main-title"><?= $post["username"] ?></h1>

                    <p><?= $post["content"] ?></p>

                </div>

            </div>

        </div>

        <div class="send-post-container">

            <form id="send-comment" action="<?php $BASE_URL ?>config/process.php" method="POST">

                <input type="hidden" name="type" value="create">

                <div class="send-section">

                    <label for="uname" class="send-label" id="user-label">Nome de usuário:</label>
                    <input class="send-box" id="uname" name="username" placeholder="Insira seu nome de usuário" required autocomplete="username">

                </div>

                <div class="send-section">

                    <label for="ctnt" class="send-label">Escreva seu comentário:</label>
                    <input class="send-box" id="cmmt" name="content" placeholder="Escreva sua postagem" required autocomplete="off">
                    <button type="submit" id="send-submit"><i class="fa-solid fa-paper-plane"></i></button>

                </div>

            </form>

        </div>

    </main>

<?php

    include_once("templates/footer.php");

?>
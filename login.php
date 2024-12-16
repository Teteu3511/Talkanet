<?php

    include_once("templates/header.php");

?>

    <div class="container-login">

        <div class="login-box">

           	<h2 id="login-title">Login</h2>

            <form>

                <div class="container-input-box">

                    <input type="text" class="login-input" placeholder="Insira seu nome de usuário" required>

                </div>

                <div class="container-input-box">

                    <input type="password" class="login-input" placeholder="Insira sua senha" required>

                </div>

                <button type="submit" class="login-button">Login</button>

                <div class="links">

                    <a href="#">Esqueceu a senha?</a>
                    <a href="#">Registrar-se</a>

                </div>

            </form>

        </div>

    </div>

<?php

    include_once("templates/footer.php");

?>
<?php

    include_once("templates/header.php");

?>

    <div class="help-center">

        <h1>Dúvidas Frequentes</h1>

        <input type="text" placeholder="Qual a sua duvida de hoje?" style="padding: 10px; width: 80%; max-width: 500px; font-size: 18px; border: 2px solid rgb(0, 190, 47); border-radius: 10px; background: rgb(33, 37, 41);">

        <div class="faq-section">

            <div class="faq-item">

                <button onclick="toggleContent(this)">Posso participar de conversas sem fazer login?</button>

                <div class="content">

                   Sim,não é necessário fazer login para participar das conversas!

                </div>

            </div>

            <div class="faq-item">

                <button onclick="toggleContent(this)">Como envio imagens ou arquivos nas conversas?</button>

                <div class="content">

                    No momento não é possível enviar imagens ou arquivos nas conversas! 

                </div>

            </div>

            <div class="faq-item">

                <button onclick="toggleContent(this)">Como entro em contato com o suporte?</button>

                <div class="content">

                    Para entrar em contato com o suporte mande um email para Talkanet@gmail.com

                </div>

            </div>

            <div class="faq-item">

                <button onclick="toggleContent(this)">O que fazer se o site não carregar ou estiver lento?</button>

                <div class="content">

                    Se o site estiver lento ou não carregar, é aconselhado atualizar a página do site!

                </div>

            </div>

        </div>

    </div>

    <script>

        function toggleContent(button) {

            const content = button.nextElementSibling;
            content.style.display = content.style.display === "block" ? "none" : "block";

        }

    </script>

<?php

    include_once("templates/footer.php");

?>
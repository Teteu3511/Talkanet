<?php

    include_once("templates/header.php");

?>

    <div class="banner">

        <h3 id="bannerTitle">A melhor opção para conversar</h3>
        <h4 id="bannerCtnt">Talkanet é um site onde você pode abrir sua mente e conversar com amigos. Cada usuário enriquece ainda mais o Talkanet. O site perfeito para comunicação e afins a apenas um clique.</h4>

        <div id="btnContainer">

            <a href="chat.php" id="bannerLink">Trovar Agora</a>

        </div>

    </div>

    <div class="features-container">

        <div class="feature" id="postFeature">

            <span class="featureCircle"><i class="fa-solid fa-comments"></i></span>

            <h4 class="featureTitle">Posts</h4>
            
            <p class="featureDesc">Escreva posts que expresem o que você está sentindo ou faça perguntas para outros usuários</p>

        </div>

        <div class="feature" id="imgFeature">

            <span class="featureCircle"><i class="fa-solid fa-image"></i></span>

            <h4 class="featureTitle">Imagens</h4>

            <p class="featureDesc">Adicione imagens para esclarecer ainda mais seus posts ou divirta as pessoas com memes</p>

        </div>

        <div class="feature" id="commentFeature">

            <span class="featureCircle"><i class="fa-solid fa-comment-dots"></i></span>

            <h4 class="featureTitle">Comentários</h4>

            <p class="featureDesc">Ajude os membros da comunidade respondendo suas perguntas ou só reaja a um post</p>

        </div>

    </div>

    <div class="news-container">

        <form id="news-form" method="post" action="mailto:leaesmatheus10@gmail..com">

            <div class="news-title-container">

                <label for="news-input" id="news-title">Insreva-se na nossa newsletter!</label>
            
            </div>

            <div class="news-input-container">
                
                <input type="email" id="news-input" name="news-email" required placeholder="Insira seu email">
                <button type="submit" id="news-submit">Enviar</button>
        
            </div>

    </div>

<?php

    include_once("templates/footer.php");

?>
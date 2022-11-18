<!-- Cabeçalho -->
<header class="header">

    <!-- Logotipo do site DoIn (img) -->
    <!-- Ao clicar, redireciona à página principal -->
    <a href="index.php" class="div_logo"><img class="img_logo" src="img/doin_logotype.png"></a>

    <!-- PÁGINAS DO SITE -->
    <div class="dropdown">

        <!-- Botão em <div> -->
        <div class="button_hover">
            
            <!-- Título -->
            Páginas do site
                
            <!-- Símbolo da lupa de pesquisa (img) -->
            <img class="img_symbol" src="img/search.png">
        </div>
        
        <!-- Conteúdo "dropdown" (aparecerá ao passar a seta do mouse na <div> "dropdown") -->
        <div class="dropdown-content" id="pag_content">

            <!-- Tópicos das "páginas do site" -->
            <!-- Redirecionará aos links das páginas -->
            <a href="#">Doações e Trocas</a>
            <a href="#">Ranking dos doadores</a> <!-- ou Top usuários do site -->
            <a href="perfil_usuario.php">Perfil do usuário</a>
            <a href="index.php">Página inicial</a>
        </div>
    </div>
    <!-- Fonte: https://blog.hubspot.com/website/html-dropdown#:~:text=A%20drop%2Ddown%20menu%20is,user%20disengages%20from%20the%20menu. -->


    <!-- MENU DE NAVEGAÇÃO -->
    <div class="dropdown" id="menu">

        <!-- Botão em <div> -->
        <div class="button_hover">

            <!-- Título -->
            Menu de navegação
                
            <!-- Símbolo do menu de três riscos (img) -->
            <img class="img_symbol" src="img/menu.png">
        </div>

        <!-- Conteúdo "dropdown" (aparecerá ao passar a seta do mouse na <div> "dropdown") -->
        <div class="dropdown-content">

            <!-- Tópicos do "menu de navegação" -->
            <!-- Redirecionará ao respectivo item linkado -->
            <a href="#sonic">Categorias</a>
            <a href="#">Importância da Doação e Troca</a>
            <a href="#">Vantagens</a>
            <a href="#">YouTube</a>
        </div>
    </div>

    <!-- Elementos alinhados no canto direito da página -->
    <div class="div_right">

        <!-- -->
        <div class="home_contact">
            <a href="index.php" class="a_button"><div class="purple_button button">
                <!-- Símbolo da lupa de pesquisa -->
                <img class="img_symbol img_home" src="img/home.png">
            </div></a>

            <a href="#" class="a_button"><div class="purple_button button espac_contact">
                <!-- Título -->
                Sobre nós
            </div></a>
        </div>
        
        <!-- Botões de login e cadastrar-se-->
        <!-- Colocar uma condição de aparecer os botões se o usuário estiver deslogado -->
        <a href="#" class="a_button"><div class="button espac_log">Cadastre-se</div></a>
        <a href="#" class="a_button"><div class="button">Login</div></a>
    </div>

</header>
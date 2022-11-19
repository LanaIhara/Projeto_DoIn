<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" /> <!-- Torna o site na linguagem pt-BR (português - Brasil), sendo possível utilizar acentos -->
	<title>Página do Usuário | DoIn</title> <!-- Título do site -->

    <link rel="stylesheet" type="text/css" href="css/zero_page.css"/> <!-- refere-se ao css que zera os espaçamentos vindos por definição -->
    <link rel="stylesheet" type="text/css" href="css/header.css" /> <!-- refere-se ao css do cabeçalho -->
    <link rel="stylesheet" type="text/css" href="css/teste.css" /> <!-- refere-se ao css deste documento -->

    <link rel="icon" type="image/png" href="img/favicon.png" /> <!-- refere-se ao favicon.png -->
</head>

    <!-- Estrutura do site/Conteúdo do site -->
    <body>
        <?php
            include "includes/header.php";
        ?>

        <script type="text/javascript" src="js/perfil_usuario.js"></script>

        <!-- Início da página do usuário -->
        <div class="primeiro">
            <div class="sinonimo">

                <div class="antonimo" id="inicial">
                    <div class="yellow">
                        SELECIONE UMA CAIXA
                    </div>
                </div>

                <!-- PERFIL do usuário -->
                <div class="antonimo" id="perfil">
                    <div class="ur_bro">
                        <div class="yellow"></div>
                        <div class="ur_mom"></div>
                    </div>
                </div>

                <div class="antonimo" id="product">
                    <div class="yellow">
                        <p class="name">deu trabalho</p>
                    </div>
                </div>

                <div class="antonimo" id="config">
                    <div class="yellow">
                        <p class="name">e foi sofrido.</p>
                    </div>
                </div>

                <div class="antonimo" id="change_perfil">
                    <div class="yellow">
                        <p class="name">Gostou?</p>
                    </div>
                </div>

                <div class="teste">
                    <!--<input type="checkbox" name="" id="per1">-->
                    
                    <button class="info" id="button_perfil" onclick="select_perfil()">Perfil</button>

                    <button class="info" id="button_product" onclick="select_product()">Meus Produtos</button>

                    <button class="info" id="button_config" onclick="select_config()">Configurações</button>

                    <button class="info" id="button_change" onclick="select_change()">Alterar Perfil</button>
                </div>
            </div>
        </div>
    </body>
</html>
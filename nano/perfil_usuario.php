<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" /> <!-- Torna o site na linguagem pt-BR (português - Brasil), sendo possível utilizar acentos -->
	<title>Página do Usuário | DoIn</title> <!-- Título do site -->

    <link rel="stylesheet" type="text/css" href="css/zero_page.css"/> <!-- refere-se ao css que zera os espaçamentos vindos por definição -->
    <link rel="stylesheet" type="text/css" href="css/header.css"/> <!-- refere-se ao css do cabeçalho -->
    <link rel="stylesheet" type="text/css" href="css/perfil_usuario.css"/> <!-- refere-se ao css deste documento -->
    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="icon" type="image/png" href="img/favicon.png" /> <!-- refere-se ao favicon.png -->
</head>

    <!-- Estrutura do site/Conteúdo do site -->
    <body>
        <?php
            include "includes/header.php";
        ?>

        <script type="text/javascript" src="js/perfil_usuario.js"></script>

        <!-- Início da página do usuário -->
        <div class="first_user_page">
            <div class="div_back_user">

                <!--<div class="antonimo" id="inicial">
                    SELECIONE UMA CAIXA
                </div>-->

                <!-- PERFIL do usuário -->
                <div class="div_cont_all" id="perfil">
                    <div class="div_unir_info_user">
                        <div class="ur_mom"></div>
                        <div class="yellow"></div>
                    </div>
                </div>

                <div class="div_cont_all" id="product">
                    <div class="yellow">
                        <p class="name">a</p>
                    </div>
                </div>

                <div class="div_cont_all" id="config">
                    <!--<div class="yellow">
                        <button id="toggle">toggle</button>
                    </div>-->
                    <label class="switch">
                        <input type="checkbox" id="myCheckBox">
                        <span class="slider round"></span>
                    </label>
                </div>

                <div class="teste">
                    
                    <button class="info" id="button_perfil" onclick="select_perfil()">Perfil</button>

                    <button class="info" id="button_product" onclick="select_product()">Meus Produtos</button>

                    <button class="info" id="button_config" onclick="select_config()">Configurações</button>

                </div>
            </div>
        </div>
        <!--<script src="js/script.js"></script>-->
        <script src="js/teste.js"></script>

        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
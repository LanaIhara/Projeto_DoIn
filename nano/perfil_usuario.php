<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" /> <!-- Torna o site na linguagem pt-BR (português - Brasil), sendo possível utilizar acentos -->
	<title>Página do Usuário | DoIn</title> <!-- Título do site -->

    <link rel="stylesheet" type="text/css" href="lib/css/zero_page.css"/> <!-- refere-se ao css que zera os espaçamentos vindos por definição -->
    <link rel="stylesheet" type="text/css" href="lib/css/header.css"/> <!-- refere-se ao css do cabeçalho -->
    <link rel="stylesheet" type="text/css" href="lib/css/perfil_usuario.css"/> <!-- refere-se ao css deste documento -->
    <link rel="stylesheet" type="text/css" href="lib/css/footer.css"/>

    <link rel="icon" type="image/png" href="img/favicon.png" /> <!-- refere-se ao favicon.png -->
</head>

    <!-- Estrutura do site/Conteúdo do site -->
    <body>
        <?php
            include "includes/header.php";
        ?>

        <script type="text/javascript" src="lib/js/perfil_usuario.js"></script>

        <!-- Início da página do usuário -->
        <div class="first_user_page">
            <div class="div_back_user">

                <!--<div class="antonimo" id="inicial">
                    SELECIONE UMA CAIXA
                </div>-->

                <!-- PERFIL do usuário -->
                <div class="div_cont_all" id="perfil">
                    <div class="div_unir_infoUser">
                        <div class="div_infoUser">

                            <div class="div_cadaInfo">
                                <label id="nome">Nome: </label>
                                <p>Fulano de Ciclano Mariano do Valmirando Valuriando</p>
                            </div>

                            <div class="div_cadaInfo">
                                <label id="genero">Gênero: </label>
                                <p>Outros</p>
                            </div>

                            <div class="div_cadaInfo">
                                <label id="contato">Para contato: </label>
                                <p>(não especificado)</p>
                            </div>

                            <div class="div_cadaInfo">
                                <label id="ranking">Ranking:</label>
                                <p>0º</p>
                            </div>
                        </div>

                        <div class="div_imgUser">
                            <img id="user_img" src="img/lana.jpg">
                        </div>
                    </div>

                    <div class="div_unir_infoUser div_unir_baixo">
                        <div class="div_infoUser div_bio">

                            <label>Biografia</label>
                            <p>Só o universo sabe o dia do amanhã, n aguento mais esse tcc pqp</p>

                        </div>

                        <div class="div_imgUser div_infoPlus">

                            <label>Informações gerais</label>

                            <div class="div_cadaInfo">
                                <label class="label_quant">Quantidade doada: </label>
                                <p class="p_quant">Sua mãe</p>
                            </div>

                            <div class="div_cadaInfo sem_mg_top">
                                <label class="label_quant">Quantidade trocada: </label>
                                <p class="p_quant">Seu irmão</p>
                            </div>

                            <div class="div_cadaInfo">
                                <label class="label_quant">Data de criação: </label>
                                <p class="p_quant">Sua tia nasceu hj</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- PRODUTOS do usuário -->
                <div class="div_cont_all" id="product">
                    <div class="div_tituloUser">
                        <label class="tituloUser">Fulano de Ciclano Mariano do Valmirando</label>

                        <!--<div class="div_produto">
                            <button class="tituloUser label_produto">Todos</button>
                            <button class="tituloUser label_produto">Doação</button>
                            <button class="tituloUser label_produto">Troca</button>
                        </div>-->

                        <div class="all_produto">
                            <div class="div_imgUser">
                                <img id="user_img" src="img/lana.jpg">
                            </div>
                            <div class="div_imgUser">
                                <img id="user_img" src="img/lana.jpg">
                            </div>
                            <div class="div_imgUser">
                                <img id="user_img" src="img/lana.jpg">
                            </div>
                            <div class="div_imgUser">
                                <img id="user_img" src="img/lana.jpg">
                            </div>
                            <div class="div_imgUser">
                                <img id="user_img" src="img/lana.jpg">
                            </div>
                            <div class="div_imgUser">
                                <img id="user_img" src="img/lana.jpg">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="div_cont_all" id="config">

                    
                        <div class="div_infoUser div_config">

                            <div class="div_cadaInfo">
                                <label>Privacidade do perfil: </label>
                                <p>público</p>
                            </div>

                            <div class="div_cadaInfo">
                                <label id="genero">Gênero: </label>
                                <p>Outros</p>
                            </div>

                            <div class="div_cadaInfo">
                                <label id="contato">Para contato: </label>
                                <p>(não especificado)</p>
                            </div>

                            <div class="div_cadaInfo">
                                <label id="ranking">Ranking:</label>
                                <p>0º</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox" id="myCheckBox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                </div>

                <div class="teste">
                    
                    <button class="info" id="button_perfil" onclick="select_perfil()">Perfil</button>

                    <button class="info" id="button_product" onclick="select_product()">Meus Produtos</button>

                    <button class="info" id="button_config" onclick="select_config()">Configurações</button>

                </div>
            </div>
        </div>
        <script src="lib/js/teste.js"></script>

        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" /> <!-- Torna o site na linguagem pt-BR (português - Brasil), sendo possível utilizar acentos -->
	<title>Página principal | DoIn</title> <!-- Título do site -->

    <link rel="stylesheet" type="text/css" href="css/zero_page.css"/> <!-- refere-se ao css que zera os espaçamentos vindos por definição -->
    <link rel="stylesheet" type="text/css" href="css/style.css" /> <!-- refere-se ao main_style.css -->
    <link rel="stylesheet" type="text/css" href="css/header.css" /> <!-- refere-se ao css do cabeçalho -->
    <link rel="stylesheet" type="text/css" href="css/category.css" /> <!-- refere-se ao css da categoria -->

    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script> <!-- refere-se ao jQuery responsável por rodar o gif introdutório -->
    <link rel="icon" type="image/png" href="img/favicon.png" /> <!-- refere-se ao favicon.png -->
    <!--<script type="text/javascript" src="js/scroll.js"></script> -->

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> <!-- animate.style -->
</head>

    <!-- Estrutura do site/Conteúdo do site -->
	<body>

        <!-- Introdução da logo DoIn (em formato de gif) ao abrir o index do site -->
        <div id="introduction" class="preload"></div>
        <script type="text/javascript" src="js/main_script.js"></script> <!-- refere-se ao arquivo main_script.js -->

		<!-- Cabeçalho -->
		<?php
            include 'includes/header.php';
        ?>

        <!-- Seção principal -->
        <section>

            <!-- Container com as categorias (carrossel no celular) -->
            <?php
                include 'includes/category.php';
            ?>

            <!-- Importância da Troca e doação -->
            <div class="main">
                <!-- Imagem e informações sobre "Importância da Troca e Doação" -->
                <div class="slogan">

                    <!-- Imagem sobre doação -->
                    <img id="img_doador" src="img/doacao.png">

                    <!-- Imagem sobre troca -->
                    <img id="img_donatário" src="img/pink.jpg">

                    <!-- Container sobre o "OU" -->
                    <div id="circulo"></div>
                </div>
            </div>

            <!-- Seção com dados de curiosidade sobre o projeto -->
            <div>
                <div class="curiosidades">
                    <div class="icones" id="sonic">Ihhh texto</div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <!-- <div> -->
            <div></div>
        </footer>
    
    <!-- file:///F:/Projeto%20DoIn%20-%20Troca%20e%20Doa%C3%A7%C3%A3o%20de%20Produtos/Website/Nano_DoIn/index.html-->
    <!-- localhost/Projeto_Doin/nano -->
    
	</body>
</html>
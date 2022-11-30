<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" /> <!-- Torna o site na linguagem pt-BR (português - Brasil), sendo possível utilizar acentos -->
	<title>Página principal | DoIn</title> <!-- Título do site -->

    <link rel="stylesheet" type="text/css" href="css/zero_page.css"/> <!-- refere-se ao css que zera os espaçamentos vindos por definição -->
    <link rel="stylesheet" type="text/css" href="css/teste.css" /> <!-- refere-se ao main_style.css -->
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
            <div class="div_presentation">
                <img class="img_presentation" src="img/light_presentation.png">
                
                <div class="div_text_pres">
                    <h1>Projeto DoIn</h1>
                    <p>Site desenvolvido por estudantes do ensino médio com o objetivo de incentivar a 
                    redução do consumismo e preservação do meio ambiente através da doação e troca de 
                    produtos na sociedade brasileira, facilitando o anúncio desses tipos de câmbio por 
                    meio deste site.</p>
                    <p>Se junte a nossa causa</p>
                    <a href="#" class="a_button"><div class="button_presentation">Doe ou troque produtos agora</div></a>
                </div>
            </div>

            <div class="div_about_site"></div>
        </section>
	</body>
</html>
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
                <img class="img_presentation" src="img/presentation.png">
                
                <div class="div_text_pres">
                    <h1>Projeto DoIn</h1>
                    <p>Site desenvolvido por estudantes do ensino médio com o objetivo de reduzir o consumismo e preservar do meio ambiente através da doação e troca de 
                    produtos na sociedade brasileira, facilitando o anúncio desses tipos de câmbio por 
                    meio deste site.</p>
                    <p>Se junte a nossa causa</p>
                    <a href="#" class="a_button"><div class="button_presentation">Doe ou troque produtos agora</div></a>
                </div>
            </div>

            <div class="div_about_site">
                <div class="button_presentation button_benef">Benefícios do site</div>
                <div class="div_benef_carrossel">
                    <div class="div_benef_icons dropdown content_test">
                        <div class="dropdown-content test">

                            <!-- Tópicos do "menu de navegação" -->
                            <!-- Redirecionará ao respectivo item linkado -->
                            <a href="#sonic">Categorias</a>
                            <a href="#">Importância da Doação e Troca</a>
                            <a href="#">Vantagens</a>
                            <a href="#">YouTube</a>
                        </div>
                        <img src="img/doacao_alimento.png" class="img_icons">
                        <div class="p_icons">Sempre tendo pessoas disponíveis para troca e doação em nosso site</div>                    
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Com um ranking de pessoas que trocam e doam produtos</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Focado a atender o território brasileiro, em toda sua região</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Acessível nas linguagens: português (brasileiro) e inglês</div>
                    </div>
                    <div class="div_benef_icons last_icon">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Sempre tendo pessoas disponíveis para troca e doação em nosso site</div>
                    </div>
                </div>
            </div>

            <div class="div_about_site div_important">
                <div class="button_presentation button_benef">Importância da Doação e Troca</div>
                <div class="div_benef_carrossel">
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Sempre tendo pessoas disponíveis para troca e doação em nosso site</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Com um ranking de pessoas que trocam e doam produtos</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Focado a atender o território brasileiro, em toda sua região</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Acessível nas linguagens: português (brasileiro) e inglês</div>
                    </div>
                    <div class="div_benef_icons last_icon">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Sempre tendo pessoas disponíveis para troca e doação em nosso site</div>
                    </div>
                </div>
            </div>
        </section>
	</body>
</html>
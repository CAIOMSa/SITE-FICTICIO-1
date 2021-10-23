<html lang="pt-br">
<head>
<title>Elektro E-commerce</title>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="style_menu.css">
</head>
<body>
<div class = "menu">
<a id="icons"class= 'botao_neon'href="http://localhost/teste_projetoexemplar/projeto_exemplar/index_home.php" target="_blank">
<span></span>
<i id="icons" class="fas fa-home casa"></i>
</a>
<a id="icons" class= 'botao_neon'href="http://localhost/teste/index_ajuda.php" target="_blank">
<span></span>
<i id="icons" class="fas fa-question-circle ajuda"></i>
</a>
<a id="icons" class= 'botao_neon'href="http://localhost/teste/index_produtos.php" target="_blank">
<span></span>
<i id="icons" class="fas fa-shopping-cart carrinho"></i>
</a>
<a id="icons" class= 'botao_neon'href="http://localhost/teste/index_login.php" target="_blank">
<span></span>
<i id="icons" class="fas fa-user-lock userl"></i>
<i id="icons" class="fas fa-user user"></i>
</a>
<a class= 'botao_neon'href="http://localhost/teste/index_mapa.php" target="_blank">
<span></span>
<i id="icons" class="fas fa-map-marked-alt mapa"></i>
</a>
</body>
</html>
<?php
ini_set('display_errors', 0 );
error_reporting(0);
$script1="<script>  document.querySelector('.userl').style.display = 'block';
                    document.querySelector('.user').style.display = 'none';      </script>";
$script2="<script>  document.querySelector('.userl').style.display = 'none';
                    document.querySelector('.user').style.display = 'block';      </script>";
session_start();
if(!$_SESSION['usuario']){
    echo $script1;
}else{
    echo $script2;
}
?>

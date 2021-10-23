<?php

    if(isset($_POST['submit']))
    {
        include_once('conf_dbc.php');
        $nome = $_POST['nome'];
        $img = $_POST['img_url'];
        $prodt = $_POST['prodt'];
        $esq = $_POST['equ'];
        $eq1 = $_POST['equ1'];
        $eq2 = $_POST['equ2'];
        $cor1 = $_POST['cor1'];
        $cor2 = $_POST['cor2'];
        $cor3 = $_POST['cor3'];
        $prec = $_POST['prec'];

        $result = mysqli_query($conexao, "INSERT INTO produtos(img,nome,prodt,esq,eq1,eq2,cor1,cor2,cor3,prec) 
        VALUES ('$img','$nome','$prodt','$esq','$eq1','$eq2','$cor1','$cor2','$cor3', '$prec')");
    }

?>
<html lang="pt-br">
<html>
<head>
<title>Elektro E-commerce</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style_criar_cont.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="style_barra_scroll.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="script_scroll.js"></script>
<div id="progressbar"></div>
</head>
<object id="menuprincipal" data="index_menu_neon.php"></object>
<body>

<section>
<div class="color"></div>
<div class="color"></div>
<div class="color"></div>
<div class="caixa">
<div class="quadrado" style="--i:0;"></div>
<div class="quadrado" style="--i:1;"></div>
<div class="quadrado" style="--i:2;"></div>
<div class="quadrado" style="--i:3;"></div>
<div class="quadrado" style="--i:4;"></div>
<div class="conteiner">
<div class="form">
<h2>NOVO PRODUTO</h2>
<form action="index_novoprod.php" method="POST">
<div class="caixa_entrada">
<input name="nome" type="text"placeholder="nome produto" required> 
<input name="img_url"  type="text" placeholder="img url"required>
<input name="prodt"  type="text"placeholder="prodt"required> 
<input name="equ"  type="text"placeholder="tipo de escolha"required> 
<input name="equ1"  type="text"placeholder="escolha2"required> 
<input name="equ2"  type="tel" placeholder="escolha2"required> 
<input name="cor1"  type="text" placeholder="cor"required>
<input name="cor2"  type="text" placeholder="cor"required>
<input name="cor3"  type="text" placeholder="cor"required>
<input name="prec"type="text" placeholder="preco"required>
<input name="submit" type="submit" value="CONFIRMAR">
</div>
</form>
</div>
</div>
</div>
</section>
</body>
</html>
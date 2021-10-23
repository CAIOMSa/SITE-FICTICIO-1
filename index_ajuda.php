<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location:index_login.php');
	exit();
}
?>
<html lang="pt-br">
<html>
<head>
<title>Elektro E-commerce</title>
<meta charset="utf-8" />
 <link rel="stylesheet" type="text/css" href="style_ajuda.css" media="screen" />
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 <link rel="stylesheet" type="text/css" href="style_barra_scroll.css">
 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="script_scroll.js"></script>
<div id="progressbar"></div>
</head>
<body>
<div>
<object id="menuprincipal" data="index_menu_neon.php"></object>
<br><br><br><br><br><br><br><br>
<div class="box">
<span></span>
<br>
<h1 class="titulo">Precisando de ajuda?<h1>
<br><br>
<p class="txt_grande">não se preocupe, tentaremos o possível para ajudá-lo</p> 
<br><br>
<p class="txt_pequeno">para agilizar o processo, envie um gmail para elektro.ecommerce@gmail.com, coloque seu nome completo e tente contar o mais detalhadamente possível seu problema, tentaremos resolver assim que possível</p> 
<br><br>
<p class="txt_pequeno">- ELEKTRO E-COMMERCE</p>
<form action="conf_gmail.php" method="post">
<input type="text" name="titulo" placeholder="nome completo" class="quest"><br>
<textarea name="mensagem" class="msgbox" placeholder=" id do produto com descrição do problema"></textarea><br>
<input type="submit" value="enviar">
</form>
</div>
</div>
</body>
</html>
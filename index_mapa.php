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
 <link rel="stylesheet" type="text/css" href="style_mapa.css" media="screen" />
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 <link rel="stylesheet" type="text/css" href="style_barra_scroll.css">
 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="script_scroll.js"></script>
<div id="progressbar"></div>
</head>
<body>
<object id="menuprincipal" data="index_menu_neon.php"></object>
<br><br><br><br><br><br><br><br>
<form action="index_mapa.php" method="POST">
<input class="achar_lug" name="idprod" type="text"placeholder="COLOCAR O ID DO PRODUTO EXP:. #000000">
<input type="submit" name="sub"class="achar_lug"VALUE="BUSCAR" >
</form>
<br><br><br><br>
<?php
    if(isset($_POST['sub']))
    {
     $id_prod=$_POST['idprod'];
	 if($id_prod=="#000000"){
		 $local = "Guarulhos";
	}}else{
		$local="ENIAC";
	}
	
 echo'<iframe class="mapa"src="https://maps.google.com/maps?q='.$local.'&amp;t=m&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';
?>
<br><br><br><br>
<?php

echo"<h2 class='Client'>PRODUTOS DE ".$_SESSION['usuario']."</h2>"
?>
<br><br>
<input  class="cl_prod"type="submit" value="TESTE ID:.#000000">
<br><br>
<h2 class="aviso"></h2>

<h1 class="titulo">AVISO</h1>
<br><br><br>
<p class="txt_grande">CASO NÃO HOUVER A ATUALIZAÇÃO DA LOCALIZAÇÃO DO PRODUTO POR MAIS DE 2 SEMANAS, OU ESTIVER INDO PARA UMA ROTA INCORRETA POR FAVOR ENTRAR EM CONTATO </p>
</body>
</html>

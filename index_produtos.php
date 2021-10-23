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
<header>
<meta charset="utf-8" />
<object id="menuprincipal" data="index_menu_neon.php"></object>
</header>
 <link rel="stylesheet" type="text/css" href="style_produto.css" media="screen" />
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 <link rel="stylesheet" type="text/css" href="style_barra_scroll.css">
 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="script_scroll.js"></script>
<div id="progressbar"></div>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js"></script>
    <script type="text/javascript" src="script_busca.js"></script>
    <link rel="stylesheet" href="style_busca.css">
    <div class="header">
      <input type="search" placeholder="pesquisar">
      <button data-search="next"><i class="fas fa-caret-up cima"></i></button>
      <button data-search="prev"><i class="fas fa-caret-down baixo"></i></button>
    </div>
    <html><head><title> Tabela de Consulta de Dados </title>
<meta charset="UTF-8"></head>
<body> 
<?php
  $host = "localhost" ;
  $banco = "elektro" ;
  $usuario= "root" ;
  $senha = "";
  $conexao = mysqli_connect($host, $usuario, $senha, $banco);
  $res = mysqli_query($conexao, "select * from  produtos");
   while( $linha=mysqli_fetch_assoc($res)){
   echo "<div class='todos_produtos'>" ; 
   echo "<div class='container'>" ; 
   echo "<div class='carta'>" ; 
   echo "<h5>".$linha["nome"]."</h5>" ; 
   echo "<div class='caixa_img'>" ; 
   echo "<img src='".$linha["img"]."'>" ; 
   echo "</div>" ; 
   echo "<div class='caixa_conteu' >" ; 
   echo "<h2>".$linha["prodt"]."</h2>" ; 
   echo "<div class='escolha'>" ; 
   echo "<h3>".$linha["esq"]."</h3>" ; 
   echo "<div class='esc1'>" ; 
   echo "<span>".$linha["eq1"]."</span>" ; 
   echo "</div>" ; 
   echo "<div class='esc2'>" ; 
   echo "<span>".$linha["eq2"]."</span>" ; 
   echo "</div>" ; 
   echo "</div>" ; 
   echo "<button class='compra'>COMPRAR POR ".$linha["prec"]."R$</button>" ; 
   echo "</div>" ; 
   echo "</div>" ; 
   echo "</div>" ; 
   echo "</div>" ;
} 
?>
</body>
</html>
<span background> </span>
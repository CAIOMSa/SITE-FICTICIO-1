<?php
session_start();
include_once('conf_dbc.php');
if(isset($_POST['confirmar']))
{
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$query = "select email from client where nome = '$usuario' and senha = '$senha'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
} else {
	$_SESSION['nao_autenticado'] = true;
    $login_conf=false;
}
}
if(isset($_POST['logout'])){
session_destroy();
}
?>
<html lang="pt-br">
<html>
<head>
<title>Elektro E-commerce</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style_login.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="style_barra_scroll.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="script_scroll.js"></script>
<div id="progressbar"></div>
</head>
<body>
<div>
<object id="menuprincipal" data="index_menu_neon.php"></object>
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
<h2>Login</h2>
<?php
if(isset($_SESSION['nao_autenticado'])):
?>
<p class="esqueceu">Erro: usuário ou senha inválida</p>
<?php
endif;
unset($_SESSION['nao_autenticado']);
?>
<form action="index_login.php" method="POST">
<div class="caixa_entrada">
<input type="text" name="usuario"placeholder="usuario"required>
</div>
<div class="caixa_entrada">
<input type="password"name="senha" placeholder="senha" required>
</div>
<div class="caixa_entrada">
<input type="submit" name="confirmar"value="login">
<input type="submit" name="logout"value="logout">
</div>
<p class="esqueceu">Esqueceu a senha?<a href="http://#">infelizmente, sim!</a></p>
<p class="esqueceu">Ainda não se cadastrou?<a href="http://localhost/teste_projetoexemplar/projeto_exemplar/index_criar_conta.php">cadastre-se</a></p>
</form>
</div>
</div>
</div>
</section>
</body>
</html>
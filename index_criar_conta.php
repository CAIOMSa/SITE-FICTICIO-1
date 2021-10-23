<?php

    if(isset($_POST['submit']))
    {
        include_once('conf_dbc.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sen_email = $_POST['sen_email'];
        $cep = $_POST['cep'];
        $ender = $_POST['ender'];
        $tel = $_POST['tel'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nas'];

        $result = mysqli_query($conexao, "INSERT INTO client(nome,senha,email,sen_email,cep,ender,tel,nasc) 
        VALUES ('$nome','$senha','$email','$sen_email','$cep','$ender','$tel','$data_nasc')");
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
<h2>CRIAR CONTA</h2>
<form action="index_criar_conta.php" method="POST">
<div class="caixa_entrada">
<input name="nome" type="text"placeholder="NOME DO USUÁRIO" required> 
<input name="email"  type="email"placeholder="EMAIL"required>
<input name="sen_email"  type="password"placeholder="SENHA DO EMAIL"required> 
<input name="cep"  type="text"placeholder="CEP"required> 
<input name="ender"  type="text"placeholder="ENDEREÇO"required> 
<input name="tel"  type="tel" placeholder="+55 (00) 00000-0000"required> 
<input name="data_nas"  type="date"required>
<input name="senha"  type="password" placeholder="SENHA"required>
<input type="password" placeholder="CONFIRMAR SENHA"required>
<input name="submit" type="submit" value="CONFIRMAR">
</div>
</form>
</div>
</div>
</div>
</section>
</body>
</html>
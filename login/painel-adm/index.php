<?php

@session_start();

//verificar se o usurio logado é um administrador 

if(@$_SESSION['nivel_usuario'] != 'administrador'){
    echo "<script language='javascript'>window.location='../index.php'</script>";
}

echo 'Painel Administrativo <p>';
echo 'Nome do Usuario :' . $_SESSION['nome_usuario'] . ' e o 
nível do usuario é ' .  $_SESSION['nivel_usuario'];


?>

<a href="../logout.php" button>Sair</a>


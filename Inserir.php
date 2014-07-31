<?php
include_once 'conexao/conecta.inc';

$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
//echo $email .'    '.$senha;
$sql = "INSERT  INTO usuario (EMAIL_USUARIO,SENHA_USUARIO, NOME_USUARIO, TIPO_USUARIO) VALUES ('$email','$senha','$nome', 'RES')";
$result = mysql_query($sql);
echo 'Usuário adicionado';
echo '<br/> <a href="FrmLogin.php"> <br/>Logar </a>';
<?php
include_once 'conexao/conecta.inc';
include_once 'classes/bcrypt.class';

$email = $_POST["email"];
$senha = $_POST["senha"];
$nome  = $_POST["nome"];
$senha = Bcrypt :: hash($senha);
$sql = "INSERT  INTO usuario (EMAIL_USUARIO,SENHA_USUARIO, NOME_USUARIO, TIPO_USUARIO) VALUES ('$email','$senha','$nome', 'RES')";
$result = mysql_query($sql);
echo 'Usuário adicionado';
echo '<br/> <a href="FrmLogin.php"> <br/>Logar </a>';
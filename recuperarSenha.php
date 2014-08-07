<?php

include 'classes/bcrypt.class';
include 'conexao/conecta.inc';
$email = $_POST['verifica_email'];
$senha2 = geraSenha(6);

$sql = "UPDATE usuario SET SENHA_USUARIO = '$senha2' WHERE EMAIL_USUARIO = '$email'";

//Usuario inserido
if (mysql_query($sql)) {
echo 'Senha trocada com sucesso';
echo 'Sua nova senha é: ' . $senha2 . '';
echo 'Inicio';
} else {
echo mysql_error();
}
echo'';

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {
$lmin = 'abcdefghijklmnopqrstuvwxyz';
$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$num =  '1234567890';
$simb = '!@#$%*-';
$retorno = '';
$caracteres = '';

$caracteres .= $lmin;
if ($maiusculas)
$caracteres .= $lmai;
if ($numeros)
$caracteres .= $num;
if ($simbolos)
$caracteres .= $simb;

$len = strlen($caracteres);
for ($n = 1; $n <= $tamanho; $n++) {
$rand = mt_rand(1, $len);
$retorno .= $caracteres[$rand - 1];
}
return $retorno;
}
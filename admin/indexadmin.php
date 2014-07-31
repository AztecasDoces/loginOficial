<?php
include_once '../includes/funcoesuteis.inc';

validaAutenticacao('../frmLogin.php','ADM');
echo '<h3>Área Administrativa</h3>';
$nomeUsuario = $array['NOME_USUARIO'];
echo '<h3>Bemvindo Sr(a)'.$nomeUsuario.'</h3>';
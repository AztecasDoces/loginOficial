<?php
echo '<meta charset=UTF-8>';
$servidor = 'localhost';
$usuario = 'root';
$password = '12345678';
$database = 'loginOficial';
$connection = mysql_connect($servidor,$usuario,$password);

if($connection === FALSE)
{
    echo 'Não foi possível a conexão com Mysql<br/>';
    echo mysql_error();
}else{
    if(!mysql_select_db($database,$connection))
    {
        echo 'Não foi possivel selecionar o banco de dados '.$database.'<br/>';
        echo mysql_error();
    }
}
if<?php

include_once 'conexao/conecta.inc';
echo '<meta charset="UTF-8">';
session_start();

if(isset($_POST['verifica_email']))
    {
        $email = $_POST['verifica_email'];

        $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
        $result = mysql_query($query); 
        $totalUsuario = mysql_num_rows($result);
        
 if($totalUsuario > 0){     
            $query_Busca =  "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
            $Busca = mysql_query($query_Busca);
            $row_Busca = mysql_fetch_assoc($Busca);
        }else{
            echo 'Desculpe, mas você não é cadastrado.<br/>
                  <a href="frmInserir.php">Cadastre-se agora!</a>';
        }
        
     }
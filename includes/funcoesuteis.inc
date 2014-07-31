<?php

function validaAutenticacao($link,$tipo)
{
    echo '<meta charset=UTF-8>';
    session_start();
    
    if(!isset( $_SESSION['email']) or !isset ($_SESSION['senha']))
        {
            //echo '<a href=frmLogin.php>Você não efetuou Login !</a>';
            echo '<script>
                  alert("Acesso Negado! \n Você não efetuou Login ")
                  </script>';
            echo '<script type="text/javascript">
                    location.href = "'.$link.'"
                  </script>';
        }
        
 else {
        $email          =$_SESSION['email'];
        $senha          =$_SESSION['senha'];
        $tipoUsuario    =$_SESSION['tipoUsuario'];
        if($tipo === 'ADM'){
        include_once '../conexao/conecta.inc';
        }elseif($tipo){
            include_once 'conexao/conecta.inc';
        }
        $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
        $result = mysql_query($query);
        $usuario = mysql_fetch_array($result);
        if($email !== $usuario['EMAIL_USUARIO'])
            {
            session_destroy();
            
            echo '<script>
                  alert("Acesso Negado! \n Usuário não confere ")
                  </script>';
            echo '<script type="text/javascript">
                    location.href = "'.$link.'"
                  </script>';
            }elseif ($senha !== $usuario['SENHA_USUARIO'])
                {
                session_destroy();
                echo '<script>
                  alert("Acesso Negado! \n Senha não confere ")
                  </script>';
            echo '<script type="text/javascript">
                    location.href = "'.$link.'"
                  </script>';
                }
            elseif ($tipoUsuario !== $tipo)
                {
                session_destroy();
                echo '<script>
                  alert("Acesso Negado! \n Acesso negado para seu tipo de Usuário ")
                  </script>';
            echo '<script type="text/javascript">
                    location.href = "'.$link.'"
                  </script>';
                }
        }
}


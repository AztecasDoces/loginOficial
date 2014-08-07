 <?php
include_once 'classes/bcrypt.class';
include_once 'conexao/conecta.inc';
session_start();

if(isset($_POST['email']) and  isset($_POST['senha']))
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $hash = $usuario['SENHA_USUARIO'];
        //echo $email . '    '.$senha;
        $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
        $result = mysql_query($query); 
        $usuario = mysql_fetch_assoc($result);
        $totalUsuario = mysql_num_rows($result);
        
        
       // echo $totalUsuario . '<br/>';
        if($totalUsuario === 0){
            echo 'Usuário não encontrado!';
        }
        elseif(Bcrypt::check($senha, $hash)){
            //Recuperando a senha
            $array = mysql_fetch_array($result);
            $senhaUsuario = $array['SENHA_USUARIO'];
            $tipoUsuario = $array['TIPO_USUARIO'];
            $nomeUsuario = $array['NOME_USUARIO'];
            
            if($senha != $senhaUsuario)
                {
                    echo 'Senha não confere!';
                }
            else 
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    $_SESSION ['nomeUsuario'] = $nomeUsuario;
                    $_SESSION['tipoUsuario']= $tipoUsuario;
                  
                    if($tipoUsuario === 'RES'){ 
                    
                    echo '<script language= "JavaScript">
                            location.href="indexrestrito.php"
                          </script>';
                    }elseif($tipoUsuario === 'ADM'){
                        echo '<script language= "JavaScript">
                            location.href="admin/indexadmin.php"
                          </script>';
                    }else{
                        echo'Tipo de Usuário inválido';
                    }
                }
        }
    }else{
        echo '<script language= "JavaScript">
        location.href="frmLogin.php"
        </script>';

    }



<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <title>Formulário de Login</title>
        <script type="text/javascript">
            function Validacao()
            {
                if(Cadastro.email.value !== Cadastro.confirmaemail.value)
                {
                   return false;
                }
                
            }        alert("Email não confere !");
                    return false;
                }
                if (Cadastro.senha.value !== Cadastro.confirmasenha.value)
                {
                    alert ("Senha não confere !");
                    return false;
                }
                
            }
        </script>
    </head>
    <body>
        <h3> Cadastrar-se </h3>
        <form method="post" name="Cadastro" action="Inserir.php">
            Nome: <br/> <input type="text" name="nome" placeholder="Nome" required="nome"><br/><br/>
            Email:<br/> <input type="email" name="email" placeholder="Email"><br/>
            Confirma Email:<br/> <input type="email" name="confirmaemail" placeholder="confirme seu email"><br/>
            Senha:<br/> <input type="password" name="senha" placeholder="senha" maxlength="26"><br/>
            Confirme a senha:<br/> <input type="password" name="confirmasenha" placeholder="confirme a senha" maxlength="26"><br/>
 
                
            <input onclick="return Validacao()" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
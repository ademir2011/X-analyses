<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    </head>
    <body>
       
        <center>
            <form action="verificaRegistro.php" method="POST">
                <table>
                    
                    <tr>
                        <td>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="nome" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Nome</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="email" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">E-mail</label>
                            </div>
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="login" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Login</label>
                            </div>
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" name="senha" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Senha</label>
                            </div>
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" name="senhaConfirmacao" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Confirme sua senha</label>
                            </div>
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                <a style="text-decoration: none;color: white" href="index.php">Voltar</a>
                            </button>
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                Registrar
                            </button>
                        </td>
                    </tr>

                </table>

            </form>
        </center>
    
        
        
    </body>
</html>

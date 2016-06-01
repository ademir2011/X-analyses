<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    </head>
    <body>
        
    <center>
        
        <br/>
        
        <img src="capa.jpg" style="height: 200px;" />
        
        <form action="verificarLogin.php" method="POST">
            <table>

                <tr>
                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="login" id="sample1">
                            <label class="mdl-textfield__label" for="sample1">Login</label>
                        </div>
                    </td>
                </tr>
                <tr> 
                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" name="senha" id="sample2">
                            <label class="mdl-textfield__label" for="sample2">Senha</label>
                        </div>
                    </td>
                </tr>
                <tr> 
                    <td> 
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                            Logar
                        </button>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                            <a style="text-decoration: none;color: white" href="register.php">Registrar</a>
                        </button>
                    </td>
                </tr>
                
            </table>
             
        </form>
    </center>
    
    </body>
</html>

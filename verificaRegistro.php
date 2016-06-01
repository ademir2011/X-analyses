<?php
        
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //require 'connectDatabase.php';
        sendLog();

    }

    function sendLog(){

        global $conexao;
        
        $link = mysql_connect("localhost", "root", "junior2011")  or die (mysqli_error());
        mysql_select_db("DB_FBI", $link);

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $senhaConfirmacao = $_POST["senhaConfirmacao"];
        
        if ($nome == null || $email == null || $login == null || $senha == null || $senhaConfirmacao == null) {
            echo "algum campo esta vazio tente novamente !";
        } else {
            $query = "INSERT INTO usuario(nome, email, login, senha) VALUES ('$nome','$email', '$login', '$senha');";
            
            mysql_query($query) or die (mysql_error($conexao));
            
            ?>

            <script type="text/javascript">

                alert ("successfully login");
                
            </script> 
            
            <a href="index.php">
                <button>
                    Voltar
                </button>
            </a>
            
            <?php
            

        }
        
        mysqli_close($conexao);
        
    }

?>
<html>
    <head>
        <script type="text/javascript">
            function loginsuccess(){
                setTimeout("window.location='home.php'",3000);  
            }
        </script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        
    </head>
    <body>
        
        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                include 'connectDatabase.php';
                verificarLogin();

            }

            function verificarLogin(){

                global $conexao;

                $login = $_POST["login"];
                $senha = $_POST["senha"];

                if ($login == null || $senha == null) {
                    echo "algum campo esta vazio tente novamente !";
                } else {

                    $link = mysql_connect("localhost", "root", "junior2011")  or die (mysqli_error());
                    mysql_select_db("DB_FBI", $link);

                    $result = mysql_query("SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'");
                    $num_rows = mysql_num_rows($result);

                    if($num_rows > 0) {

                        session_start();
                        $_SESSION['login'] = $_POST['login'];
                        $_SESSION['senha'] = $_POST['senha'];
                        
                        ?>
        
                        <!-- MDL Progress Bar with Indeterminate Progress -->
                        <center>
                            <br/>
                            <br/>
                            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
                        </center>
        
                        <?php
                        echo "<script>loginsuccess()</script>";
                        

                    } else {

                        ?>

                        <script type="text/javascript">

                            alert ("Usuario nao encontrado !!!");

                        </script> 

                        <button> <a href="index.php"> Voltar </a> </button>

                        <?php

                    }

                }

                mysqli_close($conexao);

            }

?>
    </body>
</html>


<br/>
<br/>
<center>
    
    <div style="font-size: 30px">
        PROFILE
    </div>
    <br/>
    <br/>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--0dp">
        
        <?php 
        
            $link = mysql_connect("localhost", "root", "junior2011")  or die (mysqli_error());
            mysql_select_db("DB_FBI", $link);
            
            global $conexao;
            $sql = "SELECT * FROM usuario WHERE login = '".$_SESSION['login']."' ";
            $result = mysql_query($sql);
            
            if (!$result) {
                echo 'Nao foi possível executar a consulta: ' . mysql_error();
                exit;
            }
            
            $num_rows = mysql_fetch_row($result);
        
        ?>
        
        <tr>
            <td>
                Nome:
            </td>
            <td>
                <?php echo $num_rows[1]; ?>
            </td>
        </tr>
        <tr>
            <td>
                Email:
            </td>
            <td>
                <?php echo $num_rows[2]; ?>
            </td>
        </tr>
        <tr>
            <td>
                Login:
            </td>
            <td>
                <?php echo $num_rows[3]; ?>
            </td>
        </tr>
    </table>
    
</center>

<?php 
mysqli_close($conexao);
?>
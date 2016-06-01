<?php 

$link = mysql_connect("localhost", "root", "junior2011")  or die (mysqli_error());
mysql_select_db("DB_FBI", $link);

?>
<?php 

session_start();
if(!isset($_SESSION['login']) || !isset($_SESSION['senha']) ){
    header("Location: index.php");
    exit;
} else {
    ?>
    <?php
}

?> 

<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        
    </head>
    
    <body>
        
        
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
              <!-- Title -->
              <span class="mdl-layout-title">FBI</span>
              <!-- Add spacer, to align navigation to the right -->
              <div class="mdl-layout-spacer"></div>
              <!-- Navigation -->
              <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="?page=home">Home</a>
                <a class="mdl-navigation__link" href="?page=profile">Profile</a>
                <a class="mdl-navigation__link" href="?page=myanalyses">My analyses</a>
                <a class="mdl-navigation__link" href="?page=newanalysis">New analysis</a>
              </nav>
            </div>
        </header>
        
        
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Projeto FBI</span>
            <nav class="mdl-navigation">
                  <a class="mdl-navigation__link" href="?page=home">Home</a>
                  <a class="mdl-navigation__link" href="?page=profile">Profile</a>
                  <a class="mdl-navigation__link" href="?page=myanalyses">My analyses</a>
                  <a class="mdl-navigation__link" href="?page=newanalysis">New analysis</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <?php 

                    $page = $_GET['page'];
                    if ($page == "home") {
                        include './bodyHome.php';
                    } else if($page == "profile"){
                        include './profile.php';
                    } else if ($page == "myanalyses") {
                        include './myanalyses.php';
                    } else if ($page == "newanalysis") {
                        include './newanalysis.php';
                    } else {
                        include './bodyHome.php';
                    }

                ?>
                
            </div>
        </main>
    </div>
    
    
    
    </body>
</html>



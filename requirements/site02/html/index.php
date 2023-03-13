<html>
    <body>
        <h1>TP3 DOCKER SERVEURS WEB LOAD BALANCER</h1>
        <h3>Notre Beau Serveur #2</h3>
        <h4>Jimmy Nadeau et Maxime Mondello</h4>
    </body>
</html>

<?php
    $dbname = 'mariadb';
    $dbuser = 'root';
    $dbpass = 'mypassword';
    $dbhost = 'location';
    
    //* php sert de pont avec la DB mariaDB. À partir de la fonction mysql_connect on peut interfacer et manipuler la DB
    $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
    echo "Connexion a MariaDB Reussi"
?>

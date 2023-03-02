<html>
    <body>
        <h1>TP3 DOCKER SERVEURS WEB LOAD BALANCER</h1>
        <h3>Serveur #1</h3>
        <h4>Jimmy Nadeau et Maxime Mondello</h4>
        <a href='http://www.ketaineries.com/'>The legend: Pierre Arpin</a>
    </body>
</html>

<?php
    $dbname = 'mariadb';
    $dbuser = 'root';
    $dbpass = 'mypassword';
    $dbhost = 'location';
    $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
    echo "Connexion a MariaDB Reussi"
?>

<h1>TP3 DOCKER SERVEURS WEB LOAD BALANCER</h1>
<h3>Notre Beau Serveur #2</h3>
<h4>Kimmy Nadeau et Maxime Mondello</h4>

<?php
    $host = 'mariadb1';
    $root = 'root';
    $pass = 'mypassword';
    $conn = new mysqli($host, $user, $pass);

    if ($conn->connect_error) {
        die("La connexion a mariadb2 échoué: " . $conn->connect_error);
    }

    echo "Connexion a Mariadb2";
?>

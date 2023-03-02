<h1>TP3 DOCKER SERVEURS WEB LOAD BALANCER</h1>
<h3>Serveur #1</h3>
<h4>Kimmy Nadeau et Maxime Mondello</h4>

<a href='http://www.ketaineries.com/'>The legend: Pierre Arpin</a>

<?php
    $host = 'mariadb1';
    $root = 'root';
    $pass = 'mypassword';
    $conn = new mysqli($host, $user, $pass);

    if ($conn->connect_error) {
        die("La connexion a mariadb1 échoué: " . $conn->connect_error);
    }

    echo "Connexion a Mariadb1";
?>

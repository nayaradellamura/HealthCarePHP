<?php

$dsn = "mysql:dbname=banco";

$dbuser = "root";

$dbpass = "";

try {

    $pdo = new PDO ($dsn, $dbuser, $dbpass);

} catch (PDOException $e) {

    echo "Falha ao conectar a base de dados!";

}

?>
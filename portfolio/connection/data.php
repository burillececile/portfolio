<?php

    $user = 'root';
    $password = 'root';
    $db = 'projets';
    $host = 'localhost';
    $port = 3307;

        try {
          $db = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $password);

          $db->setAttribute(PDO::ATTR_ERRMODE,
              PDO::ERRMODE_EXCEPTION);

          echo 'Connexion réussie';

    } catch (PDOException $e) {
          echo "Erreur : " . $e->getMessage();
    }
/*
define('HOST', 'localhost'); // déclaration en local ( à changer apres)
define('DB_NAME', 'burillec');//nom de la bdd
define('USER', 'burillec'); // nom de l'utilisateur (compte)
define('PASS', '123456789'); // mot de passe de l'utilisateur (compte)


try {
    $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME , USER, PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection ok";
} catch(PDOException $e){
    echo $e;
}
*/
//https://webinfo.iutmontp.univ-montp2.fr/~burillec/testbdd/
?>
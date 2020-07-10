<?php
    include "conexion.php";

?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8"/>
    </head>

    <body>

    <?php
        
        -- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 10 juil. 2020 à 13:24
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `base-site-routing`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `login` int(11) NOT NULL,
  `password` text NOT NULL,
  `img-path` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

        
        
        if ($_SESSION = "j") {
            echo "<p> Mauvais couple identifiant / mot de passe.";
            echo "<p> <a href= "connexion.php"> Connexion </a> </p>" ;
         }

        else {
             echo "$_SESSION ["id"] = "include "conexion.php";
             echo "Login : "
          }
        
        
          $pdo = connect_to_database(base-site-routing);

          $query = $pdo->query ("SELECT * FROM utilisateurs"); 
          $user = $query->fetch();
          var_dump($user);
      
          $users = $pdo->query("SELECT * FROM utilisateurs")->fetchAl1();
      
          var_dump($users); 
          foreach ($users as $user) { 
              echo $user['utilisateurs']."<br/>"; 
          }
      
          $spdo { 
              INSERT INTO $id VALUES ("id1");
              INSERT INTO $login VALUES ("admin");
              INSERT INTO $password VALUES (2020);
              INSERT INTO $img_path VALUES ("");
          }
        
        if (SELECT * FROM utilisateurs
        WHERE login = 'admin') { 
            echo "$password = $id";
        }
        else { 
            echo "Mauvais couple identifiant / mot de passe."
        }

        $_SESSION = "login" ;
        $_COOKIES = "img-path" ;
        

        if (SELECT * FROM 'utilisateurs'
        WHERE $login_1 = $login) { 
            CREATE DATABASE "$login, $password, $img_path";  ;
        }
        else { 
            CREATE DATABASE "$password, $img_path"
        }

          
    ?>    
    </body>
</html>
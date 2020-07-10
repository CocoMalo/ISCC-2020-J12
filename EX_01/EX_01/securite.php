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
              INSERT INTO $img-path VALUES ("");
          }
        
        if (SELECT * FROM utilisateurs
        WHERE login = 'admin') { 
            echo "$password = $id";
        }
        else { 
            echo "Mauvais couple identifiant / mot de passe."
        }
        
          
    ?>    
    </body>
</html>
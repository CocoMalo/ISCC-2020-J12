<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <form> <method ="POST" action= "/securite.php">
        
        <input type ="text" name= "login" placeholder= "2020">
        <input type ="text" name= "password" placeholder = "Mot de passe">
        </form>

        <?php 
            $cookie_name = "user";
            $cookie_value = "id";
            setcookie ($cookie_name, $cookie_value) 
        ?>
        <?php
            if ($_SESSION = "id" ){ 
                if (count ($_COOKIE)){ 

                }
                else {
                    
                 }
            }
            else ($_SESSION)

        ?>

    </body>
</html>
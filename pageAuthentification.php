<?php 
    session_start();
    require_once("index.php");

    if(isset($_POST["utilisateur"], $_POST["Motpass"]))
    {
        $nomUsager = loginEncrypte($_POST["utilisateur"], $_POST["Motpass"]);
        if($nomUsager)
        {
            //nous sommes authentifiés
            $_SESSION["usager"] = $nomUsager;
            header("Location:index.php?commande=afficheArticle");
            die();
        }
        else 
        {
            $message = "Nom d'utilisateur ou mot de passe incorrect";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>
<body>
    <form method="POST">
        Nom d'utilsateur : <input type="text" name="utilisateur"/><br>
        Mot de passe : <input type="password" name="Motpass"/><br>
        <input type="submit" name="btnSubmit" value="Login"/>
    </form>
    <a href="index.php?commande=afficheArticle">Afficher la page des articles</a>
    <?php 
    if(isset($message))
        echo "<p>$message</p>";
    ?>
</body>
</html>
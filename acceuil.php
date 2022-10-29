<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'affichage d'articles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Bonjour <?php if(isset($_SESSION["usager"])) echo $_SESSION["usager"] ?>, bienvenue au blog des articles</h1>
    

<nav >
    <a href="index.php?commande=Authentification">login</a>
    <a href="index.php?commande=formulaireCreationArticle">CREER UN ARTICLE</a>
    <a href="index.php?commande=deconnexion">Deconnexion</a>
</nav>
<h1> liste des article</h1>
<a href="index.php?commande=listeAricles">voir les articles</a><br>
<a href="index.php?commande=afficheArticle">rechercher un article</a>
<br>


    
</body>
</html>
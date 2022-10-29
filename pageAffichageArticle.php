


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

<h1> Recherche d'un article</h1>
<form method="GET" action="index.php">
    Saisir une ou des lettres pour rechercher un article :
    <input type="text" name="texteRecherche" /><br>
    <input type="hidden" name="commande" value="RechercheArticle"/>
    <input type="submit" value="Rechercher"/>
</form>


<br>


    
</body>
</html>
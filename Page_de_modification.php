<?php 
 session_start();

 $message = "";

 if(isset($_SESSION["usager"]))
 {
     

 

    $rangeeArticles = mysqli_fetch_assoc($donnees["articles"]);
    if ($rangeeArticles["idAuteur"]==$_SESSION["usager"]) {
        
   
?>
<h1>Formulaire de modification d'un article</h1>
<form method="GET" action="index.php">
    Titre: <input type="text" name="titre" value="<?= $rangeeArticles["titre"] ?>"/><br>
    Texte : <textarea name="texte" id="" cols="30" rows="10"><?= $rangeeArticles["texte"] ?></textarea>  
    <input type="hidden" name="commande" value="ModificationArticle"/>
    <input type="hidden" name="idAuteur" value="<?= $rangeeArticles["idAuteur"] ?>"/>
    
    <input type="submit" value="Modifier"/>
</form>
<?php 
    if(isset($donnees["messageErreur"]))
        echo "<p>" . $donnees["messageErreur"] . "</p>";

}else{
    echo "vous devez vous connecter pour modifier un article";
    header("Location: index.php?commande=Authentification");
    }
}
?>
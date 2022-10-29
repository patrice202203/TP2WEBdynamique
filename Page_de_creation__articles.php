<?php 
    //démarrer une nouvelle session ou récupérer la session existante
    session_start();

    $message = "";

    if(isset($_SESSION["usager"]))
    {
        $message= $_SESSION["usager"];
            
   
?>
 <?php 
        echo "<h2> Bonjour:". $message."</h2><br> ";
    ?> 

<h1>Formulaire de creation d'article</h1>
<form method="get" action="index.php">
    Titre : <input type="text" name="titre" /><br>
     <input type="hidden" name="id" /><br>
    <input type="hidden" name="username" value="<?= $_SESSION["usager"]?>">
    Texte : <textarea name="texte" id="" cols="30" rows="10"></textarea> <br>
    
    <input type="hidden" name="commande" value="Creation-article"/>
    <input type="submit" value="creer"/>
</form>
<?php 
    if(isset($donnees["messageErreur"])){
        echo "<p>" . $donnees["messageErreur"] . "</p>";
    }

    

}

     
?>



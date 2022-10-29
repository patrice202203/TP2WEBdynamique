<?php 
    if(mysqli_num_rows($donnees["articles"]) > 0)
    {
?>
<table>
    <tr><th>NumeroArticle</th><th>Titre</th><th>Auteur</th><th>TEXTE</th> </tr>
    <?php 
    while($rangee = mysqli_fetch_assoc($donnees["articles"]))
    {
        echo "<tr><td>" . $rangee["id"] . "</td><td>" . $rangee["titre"] . "</td><td>" . $rangee["idAuteur"]
         . "</td><td>" . $rangee["texte"]
          . "</td></tr>"
           
           ;
    }
    ?>
</table>
<?php
    } 
    else 
    {
    ?>
    <p>Aucun article</p>
    <?php
    }
?>

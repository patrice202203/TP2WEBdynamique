<?php 
    if(mysqli_num_rows($donnees["articles"]) > 0)
    {
?>
<table>
    <tr><th>NumeroArticle</th><th>Titre</th><th>Auteur</th><th>TEXTE</th> <th>modifier ou supprimer</th></tr>
    <?php 
    while($rangee = mysqli_fetch_assoc($donnees["articles"]))
    {
        echo "<tr><td>" . $rangee["id"] . "</td><td>" . $rangee["titre"] . "</td><td>" . $rangee["idAuteur"]
         . "</td><td>" . $rangee["texte"]
          . "</td><td>"."<a href='index.php?commande=FormulaireModifArticle&id="
           . $rangee["id"] . "'>Modifier cet article</a>" . " " . "<a href='index.php?commande=Formulairesuppresion&id="
           . $rangee["id"] . "'>supprimer cet article</a></td></tr>";
    }
    ?>
</table>
<?php
    } 
    else 
    {
    ?>
    <p>Aucun article ne corespond à ces critères de recherche</p>
    <?php
    }
?>

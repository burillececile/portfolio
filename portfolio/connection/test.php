<!DOCTYPE html>
<html>

<head>
    <title>Randumon</title>
</head>

<body>
<h1>Random créatures</h1>

<?php

    include_once "data.php";
    //global $conn;
    //echo Conf::getLogin();

    global $db; // récupere variable lien
echo "<br>";
//$q = $db->query("SELECT * FROM Projets"); // variable pour enregistrer notre requete

$nb_projets = $db->query("SELECT * FROM Projets");
$pro= $nb_projets->fetchAll();
//var_dump($pro);  //affiche mais pas de maniere jolie
foreach ( $pro as $key => $value){
//while ($pro = $q->fetch()){ // tant qu'on a pas finis d'afficher toute les reponses


    echo "<a href=". $value['lienpage']." >";
        echo'<div class="projet">';
            echo'<div class="header">';
                echo'<div class="titre">';
                    echo '<h1>' . $value['nomProjet'] .'<br> </h1>'; // affiche resultat
                echo '</div>';
                echo'<div class="date">';
                 echo "date : " . $value['dateProjet']."<br>" ;
            echo '</div>';
        echo '</div>';
    
            echo'<div class="info">';
                echo "<img src=". $value['imageProjet'] ." class='image' alt="."texte alternatif"." title="."Titre de l'image/>";
                echo "<p>"."Résume : " . $value['resumeProjet']."<br> </p>" ;
            echo '</div>';

        echo '</div>';
    echo '</a>';
}

?>
</form>

</body>

</html>
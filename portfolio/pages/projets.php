<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portefolio</title>
    <link rel="stylesheet" type="text/css" href="../style/style_projet.css">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <script src="../js/script.js" type="text/javascript"></script>
    <meta charset="utf8">

</head>
<body>

<div class="page">
    <header class="site-header">
        <nav class="movebar">
            <ul>
                <li><a class="texte" href="index.html">Accueil</a></li>
                <li><a class="texte" href="#">Mes projets </a></li>
                <li><a class="texte" href="moi.html">À propos de moi</a></li>
                <li><a class="texte" href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
    
    <?php
echo "hello word". "<br>";

include "../connection/data.php"; // lien de la page de déclaration de la bdd
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

//https://webinfo.iutmontp.univ-montp2.fr/~burillec/testbdd/
?>
    
     </main>

    <footer class="site-footer"><p style="text-align: center;">&copy; By Cécile ;)</footer>
</div>

</body>
</html>

<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if (isset($_POST["submit"])){
    // var_dump($_FILES);
    $repertoire_upload = "c://xampp//htdocs//formulaireUploadFichier//exercice//fichiers//";
    $fichier_upload = $repertoire_upload . basename($_FILES['ma_photo']['name']);
    echo $fichier_upload;
if (move_uploaded_file($_FILES ['ma_photo']['tmp_name'], $fichier_upload)){
    echo "le fichier a bien été uploadé !";
}else{
    echo "erreur...";
}
}

// Insertion des contacts du formulaire à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO inscription(nom, prenom, adresse, photo  ) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_FILES['ma_photo']['name']));


// Redirection du visiteur vers la page du formulaire
// header('Location: liste_client.php'); 
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>liste client</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['nom']) AND $_POST['prenom'] AND $_POST['adresse'] AND $_FILES['ma_photo']['name']) // Si tout les champs sont remplis
    {
    // On affiche les coordonnées du client
    ?>
    <p> <div>
            <img src=" <?php $_FILES ['ma_photo']['tmp_name'] ?>" width="100" height="100" alt="image user">
        <div id="pseudo"></p>
    <p>ton nom est : <?php echo htmlspecialchars($_POST['nom']);?></p>
    <p>ton prénom est : <?php echo htmlspecialchars($_POST['prenom']);?></p>
    <p>tu habite au : <?php echo htmlspecialchars($_POST['adresse']);?> ans </p>

<p> <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        		}
		if(empty($_FILES['ma_photo']['name'])){

            header('Location: formulaire.php');

		}
		if(empty($_POST['nom'])){

            header('Location: formulaire.php');
		}
		if(empty($_POST['adresse'])){

            header('Location: formulaire.php');
	       }
        if(empty($_POST['prenom'])){

            header('Location: formulaire.php');
    }
    ?>
    
        
    </body>
</html>
<?php
require_once('connexionBDD.php');


try {
    if ($_POST) {    
        $stmt = $db->prepare("INSERT INTO liste_clients (nom, prenom, adresse, cp, ville, ma_photo) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($_POST["nom"], $_POST["prenom"], $_POST["adresse"], $_POST["cp"], $_POST["ville"], $_FILES["ma_photo"]["name"]));

    } // fin du if
} catch(PDOException $ex) {
    echo $ex->getMessage(); // debug
} // fin du catch



    if(isset($_POST["valider"])) {
//        var_dump($_POST);
//        var_dump($_FILES); // FILES est la variable super globale à utiliser
        $repertoire_upload = "c://xampp//htdocs//Avatar//uploads//"; // préalablement créer dans windows
        $fichier_upload = $repertoire_upload . basename($_FILES["ma_photo"]["name"]);
//        echo $fichier_upload;
        
            if(move_uploaded_file($_FILES["ma_photo"]["tmp_name"], $fichier_upload)) {
                echo "L'upload est réussi";
            } else {
                echo "ERREUR ...";
        }
    }
?>
<!DOCTYPE html>

<html>

    <head>

        <title>Formulaire d'inscription</title>
        <body>
            <!-- listing des lessages -->
            <form method="POST" enctype="multipart/form-data">

                <p><input type="text" name="nom" id="nom" placeholder="nom"></p>
                <p><input type="text" name="prenom" id="prenom" placeholder="prenom"/></p>
                           
               
               
                <p><input type="date" name="adresse" id="adresse" placeholder="adresse"/></p>
                <p><input type="text" name="cp" id=cp placeholder="cp"/></p>
                <p><input type="text" name="ville" id="ville" placeholder="ville"/></p>
                <br/>
                
                
                
                    <input type="file" id="ma_photo" name="ma_photo">
                
                
                <p><input type="submit" id="valider" name="valider" value="send"></p> <!-- Attention au name -->
                
                
                


            </form>

        </body> 

    </head>    

</html>
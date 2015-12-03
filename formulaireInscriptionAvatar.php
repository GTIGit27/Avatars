<?php

if(isset($_POST["inscription"]) ) {// "inscription" est le name du bouton
    
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $CP = $_POST["CP"];
    $ville = $_POST["ville"];
    $photo = $_POST["photo"];
    
    $message_erreur = "";
    
    
    
    if( empty($_POST["nom"]) ) {
//      echo "le champ nom est obligatoire !!!!<br/>";
        $message_erreur .- "le champ nom est obligatoire !!!!<br/>";
    }

    if( empty($_POST["prenom"]) ) {
//      echo "Le champ prenom est obligatoire !!!!<br/>";
        $message_erreur .- "le champ prenom est obligatoire !!!!<br/>";
    }

    if( empty($_POST["photo"]) ) {
//      echo "Le champ email est obligatoire !!!!<br/>";
        $message_erreur .- "Veulliez envoyer une photo !!!!<br/>";
    }


    if( empty($_POST["adresse"]) ) {
//      echo "Le champ adresse est obligatoire !!!!<br/>";
        $message_erreur .- "le champ adresse est obligatoire !!!!<br/>";
    }

    if( empty($_POST["CP"]) ) {
//      echo "Le champ CP est obligatoire !!!!<br/>";
        $message_erreur .- "le champ CP est obligatoire !!!!<br/>";
    }

    if( empty($_POST["ville"]) ) {
//      echo "Le champ ville est obligatoire !!!!<br/>";
        $message_erreur .- "le champ ville est obligatoire !!!!<br/>";
    }

    if( empty($_POST["pays"]) ) {
//      echo "Le champ pays est obligatoire !!!!<br/>";
        $message_erreur .- "le champ pays est obligatoire !!!!<br/>";
    }
    




?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/formulaire.css">

        <title>Formulaire</title>

        <body>


            <div class="row">
                <div class="col-lg-10 col-md-9">
                    <!--                        <div class="col-lg-1"><img src="img/ajout_contact.png" alt=""></div>-->
                    <h1 class="titre-contact">Formulaire d'inscription</h1>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-12">     
                        <div class="tableaudebord">
                            <div class="contact_container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <h2>Ajouter un contact</h2>
                                        <p>Toutes les zones de saisie doivent être remplies</p>
                                        <div class="nb_com" style="display:none">9</div>
                                    </div>
                                </div> 
                            </div>

                            <div class='container'>
                                <div class='row'>



                                    <form class="form-horizontal" role="form" method="post">
                                        <div class='row'>
                                            <div class="col-lg-12">
                                                <div class="titleprghp">
                                                    <span class="prg">Information contact</span> 
                                                </div>
                                            </div>
                                        </div><br/>
                                        <div class="form-group required"><span class="control-label">Civilité</span>
                                            <br/>
                                            
                                            <div class="col-lg-6">
                                                <!--<form class="form-horizontal" role="form">-->
                                                

                                                <div class="form-group">
                                                    <label for="nom" class="col-sm-2 control-label" value="<?= (isset($nom)) ? $nom : '' ?>">Nom :></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="nom"s>
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <label for="prenom" class="col-sm-2 control-label" value="<?= (isset($prenom)) ? $prenom : '' ?>">Prenom :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="photo" class="col-sm-2 control-label" value="<?= (isset($photo)) ? $photo : '' ?>">Photo :</label>
                                                    <div class="col-sm-8">
                                                        <input type="email" class="form-control" name="photo" id="photo" placeholder="">
                                                    </div>
                                                </div>
                                                
                                                
                                                <!--                                    </form>-->
                                            </div>





                                            <div class="col-lg-6">
                                                <!--<form class="form-horizontal" role="form">-->

                                                <div class="form-group">

                                                    <label for="adresse" class="col-sm-2 control-label" value="<?= (isset($adresse)) ? $adresse : '' ?>">Adr. :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adr.">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cp" class="col-sm-2 control-label" value="<?= (isset($CP)) ? $CP : '' ?>">CP :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="cp" id="cp" placeholder="CP">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ville" class="col-sm-2 control-label" value="<?= (isset($ville)) ? $ville : '' ?>">Ville :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="ville" class="form-control" id="ville" placeholder="Ville">
                                                    </div>
                                                </div>
                                                
                                                    <br/>
                                                    <br/>
                                                    <br/>
                                                    
                                                    <!--</form>-->
                                                </div>
                                        </div>
                                       
                                            <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-12">
                                                <button name="inscription" id="submit" type="submit" value="submit" class="btn btn-default"><span>Enregistrer la fiche contact</span></button>
                                            </div>
                         

                                            </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                      
        </body> 

    </head>    

</html>
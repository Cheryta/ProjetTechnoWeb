<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar  navbar-light bg-primary">
        <div class="container-fluid m-1 d-flex ">
            <div class="text">
                <a href="../index.php">Acceuil</a>
            </div>
            <div class="text">
                <a href="../gestionContrat/contrat.php">Contrat</a>
            </div>
            <div class="text">
                <a href="../gestionAppart/appartement.php">Appartements</a>
            </div>
            <div class="text">
                <a href="../gestionLocataire/locataire.php">Locataires</a>
            </div>
            <div class="text">
                <a href="proprietaire.php">Proprietaires</a>
            </div>
            <div class="text">
                <a href="../gestionTarif/tarif.php">Tarifs</a>
            </div>
            <div class="recherche"> 
                <input id="myInput" onkeyup="myFunction()" type="search"  aria-label="Search"> 
                <button type="submit" bg-primary >Search</button>
            </div>
        </div>
      </nav>
    
        <div class="texte3">
            <h1>Gestion des propriétaires </h1>
            <p>Veuillez remplir le formulaire  ci-dessous pour ajouter un nouveau propriétaire </p>
        </div>
        <div class="acceuil">
            <div class="container1">
                <img src="../pictures/ajout.jpeg" alt="">
                <div class="atext1">
                    <h1>GroupeImmo</h1>
                    <p>Le meilleur des agences immobiliers</p>
                </div>
            </div>
            <div class="container">
                <!-- zone de connexion -->
            
                <form action="locataire.php" method="POST">
                    <div class="texte4">
                        <p>Nouveau propriétaire</p>
                    </div>
                    
                    <label><b>Choisir l'appartement </b></label>
                    <select name="numLocation"  required>
                        <option value="">Appartement</option>
                        <option value="Appartement 1">Appartement 1</option>
                        <option value="Appartement 2">Appartement 2</option>
                        <option value="Appartement 1">Appartement 3</option> 
                    </select>
                    
                    <label><b>Nom </b></label>
                    <input type="text" placeholder="Entrer le nom du propriétaire" name="nom" required>

                    <label><b>Prénoms </b></label>
                    <input type="text" placeholder="Entrer le prénom du propriétaire" name="prenom" required>

                    <label><b>Adresse numéro 1</b></label>
                    <textarea name="adresse1" id="" cols="" rows="2"></textarea>
                    
                    <label><b>Adresse numéro 2</b></label>
                    <textarea name="adresse2" id="" cols="" rows="2"></textarea>

                    <label><b>Code postal</b></label>
                    <input type="text" placeholder="Entrer le code postal du locataire" name="codePostal" required>

                    <label><b>Ville</b></label>
                    <select name="villeLoc"  required>
                        <option value="">Choisir une ville</option>
                        <option value="Burkina">Burkina</option>
                        <option value="Cameroun">Cameroun</option>
                        <option value="Centrafrique">Centrafrique</option>
                        <option value="Congo">Congo</option> 
                        <option value="Djibouti">Djibouti</option>
                        <option value="Rwanda">Rwanda</option>
                    </select>

                    <label><b>Numéro de téléphone 2</b></label>
                    <input type="number" placeholder="Telephone 2" name="numTel2" required>

                    <label><b>Numéro de téléphone 1</b></label>
                    <input type="number" placeholder="Telephone 1" name="numTel1" required>

                    <label><b>Entrer le CAcumulé </b></label>
                    <input type="text" placeholder="CAcumulé" name="cAcumule" required>
                    
                    <label><b>Ajouter un email </b></label>
                    <input type="text" placeholder="Entrer l'email du propriétaire" name="email" required>

                    <div class="bouton">
                        <div class="bouton1" >
                            <input type="submit" name='submit' value='Ajouter' onclick='return confirm("cliquez OK pour confirmer ")' >
                        </div>
                        <div class="bouton2">
                            <input type="reset" name='reset' value='Annuler'>
                        </div>
                    </div>


                </form>
            </div>
        </div>

        <footer>
            <div class="footer bg-primary">
                <p>Copyright@2023 | Designed with by GroupeImmo</p>
            </div>
        </footer>

        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 
    </body>
</html>
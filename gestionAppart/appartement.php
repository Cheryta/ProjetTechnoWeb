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
                <a href="appartement.php">Appartements</a>
            </div>
            <div class="text">
                <a href="../gestionLocataire/locataire.php">Locataires</a>
            </div>
            <div class="text">
                <a href="../gestionProprio/proprietaire.php">Proprietaires</a>
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
            <h1>Gestion des appartements </h1>
            <p>Veuillez remplir le formulaire  ci-dessous pour ajouter un nouvel appartement </p>
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
            
                <form action="appartement.php" method="POST">
                    <div class="texte4">
                        <p>Nouvel appartement</p>
                    </div>
                    
                    <label><b>Choisir le contrat </b></label>
                    <select name="numContrat"  required>
                        <option value="">Categorie</option>
                        <option value="Contrat 1">Contrat 1</option>
                        <option value="Contrat 2">Contrat 2</option>
                        <option value="Contrat 1">Contrat 3</option> 
                    </select>
                    
                    <label><b>Choisir la categorie </b></label>
                    <select name="categorie"  required>
                        <option value="">Categorie</option>
                        <option value="F2">F2</option>
                        <option value="F3">F3</option>
                        <option value="R+">R+</option> 
                    </select>

                    <label><b>Choisir le type</b></label>
                    <select name="typeAppart"  required>
                        <option value="">Type</option>
                        <option value="Type 1">Type 1</option>
                        <option value="Type 2">Type 2</option>
                        <option value="Type 3">Type 3</option> 
                    </select>
                    
                    <label><b>Entrer le nombre des personnes</b></label>
                    <input type="number" placeholder="Entrer le nombre des personnes" name="nbPersonne" required>

                    <label><b>Adresse de location</b></label>
                    <textarea name="adresseLocation" id="" cols="" rows="3"></textarea>

                    <label><b>Ajouter une photo</b></label>
                    <input type="text" placeholder="Choisir une photo" name="photo" required>

                    <label><b>Ajouter des equipements</b></label>
                    <textarea name="equipements" id="" cols="" rows="10"></textarea>

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
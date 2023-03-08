<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar  navbar-light bg-primary">
        <div class="container-fluid m-1 d-flex ">
            <div class="text">
                <a href="./index.php">Acceuil</a>
            </div>
            <div class="text">
                <a href="./gestionContrat/contrat.php">Contrat</a>
            </div>
            <div class="text">
                <a href="./gestionAppart/appartement.php">Appartements</a>
            </div>
            <div class="text">
                <a href="./gestionLocataire/locataire.php">Locataires</a>
            </div>
            <div class="text">
                <a href="./gestionProprio/proprietaire.php">Proprietaires</a>
            </div>
            <div class="text">
                <a href="./gestionTarif/tarif.php">Tarifs</a>
            </div>
            <div class="recherche"> 
                <input id="myInput" onkeyup="myFunction()" type="search"  aria-label="Search"> 
                <button type="submit" bg-primary >Search</button>
            </div>
        </div>
      </nav>
     
      <div class="banner">
            <img src="./pictures/immo4.jpg" alt="" width="1365px" height="450px">
      </div>
    
      <footer>
            <div class="footer bg-primary">
                <p>Copyright@2023 | Designed with by GroupeImmo</p>
            </div>
      </footer>
    
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script> 
</body>
</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://use.typekit.net/rgi5myi.css">

    <title>Document</title>
</head>

<body>

    <!-- header -->
    <header>

        <div class="container col-8 mt-5 borderFormConnexion" style="background-color: white;">
        <div>
                <a href="home.php">
                    <img class="logoOmniasConnexion mt-3" src="../assets/img/OmniasLogo.png" alt="Logo Entreprise Omnias">
                </a>
                <a class="justify-content-end m-2 col-lg-7 btn btn-outline-secondary fs-3" href="">Mes notes de frais</a>
                <a class="justify-content-end m-2 col-lg-2 btn btn-outline-secondary fs-3" href="monCompte.php">Mon compte</a>
            </div>

            <div class="container mt-5">


                <div class="row text-center g-4">
                    <div class="col">
                        <a class="myButton btn btn-outline-secondary fs-3" href="centralisationAnneeNotes.php">Mes notes</a>
                    </div>
                    <div class="col">
                        <a class="myButton btn btn-outline-secondary fs-3" href="nouvelleNoteDeFrais.php">Nouvelle Note</a>
                    </div>
                    <div class="col">
                        <a class="myButton btn btn-outline-danger fs-3" href="RHmenuNotedeFrais.php">menu RH note de frais, pour acceder en vue. ok Alex?</a>
                    </div>
                    
                </div>


                <div class="text-center mt-5 pb-5">
                    <a style="color: black; text-decoration: none;" class="btn btn-outline-danger" href="connection.php">Deconnexion</a>
                </div>
            </div>
        </div>
    </header>
    <!-- footer -->
    <footer class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
        <div class="row">
            <div class="col-auto">
                <a style="color: black; text-decoration: none;" href=""></a>
            </div>
            <div class="col">
                <p></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
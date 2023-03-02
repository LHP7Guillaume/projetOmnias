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

        <form class="container col-8 mt-5 borderFormConnexion" style="background-color: white;">
            <div>
                <img class="logoOmniasConnexion mt-3" src="../assets/img/OmniasLogo.png" alt="Logo Entreprise Omnias">
            </div>
            <div class="container col-6">
                <div class="mb-3 text-center mt-3 pb-3">
                    <label for="exampleInputEmail1" class="form-label pb-3">Adresse Mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-2 text-center">
                    <label for="exampleInputPassword1" class="form-label pb-3">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="text-end mt-5 ">
                    <a type="submit" href="home.php" class="btn btn-outline-secondary">Valider</a>
                </div>
                <div class="text-center mt-5 pb-5">
                    <a style="color: black; text-decoration: none;" href="">Mot de passe oublié</a>
                </div>
            </div>
        </form>
    </header>
    <!-- footer -->
    <footer class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
        <div class="row">
            <div class="col-auto">
                <a style="color: black; text-decoration: none;" href="">Nous contacter</a>
            </div>
            <div class="col">
                <p>Omnias 2023</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
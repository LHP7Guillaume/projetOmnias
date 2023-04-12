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
                <a class="justify-content-end m-2 col-lg-7 btn btn-outline-secondary fs-3" href="">Nouvelle notes de frais</a>
                <a class="justify-content-end m-2 col-lg-2 btn btn-outline-secondary fs-3" href="">Mon compte</a>
            </div>
            <div class="">


                <div class="row text-center g-4">
                    <div>
                        <form class="">
                            <div class="row text-center mt-5">
                                <div class="col">
                                    <input type="text" class="form-control col-6" placeholder="Date de la note de frais" aria-label="Last name" disabled>
                                </div>
                                <div class="col">
                                    <input type="date" class="form-control col-6" placeholder="Prénom" aria-label="Last name">
                                </div>
                            </div>

                            <div class="row text-center mt-5">
                                <div class="col">
                                    <input type="text" class="form-control col-6" placeholder="Nom du Projet" aria-label="Last name" disabled>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control col-6" placeholder="Projet" aria-label="Last name">
                                </div>
                            </div>

                            <div class="row text-center mt-5">
                                <div class="col">
                                    <input type="text" class="form-control col-6" placeholder="Déplacement chez le " aria-label="Last name" disabled>
                                </div>
                                <div class="btn-group col" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check col-3" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-outline-secondary" for="btnradio1">Client</label>

                                    <input type="radio" class="btn-check col-3" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-outline-secondary" for="btnradio2">Client Final</label>
                                </div>


                                <div class="row mt-5">
                                    <div class="col">
                                        <input type="text" class="form-control col-6" placeholder="Nature de la note de frais" aria-label="Last name" disabled>

                                    </div>
                                    <div class="col">
                                        <input class="form-control col-6" list="datalistOptions" id="exampleDataList" placeholder="liste des frais">
                                        <datalist id="datalistOptions">
                                            <option value="Carburant">
                                            <option value="nombre de kilometre">
                                            <option value="peage">
                                            <option value="parking">
                                            <option value="dejeuner">
                                            <option value="petit dejeuner">
                                            <option value="diner">
                                            <option value="logement">

                                                </select>
                                    </div>
                                </div>

                                <div class="col mt-3">
                                    <label for="formFile" class="form-label"></label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>

                                <div class="row mt-5 justify-content-center ">
                                    <button type="submit" class="col-3 btn btn-secondary">Submit</button>
                                </div>
                        </form>
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
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
                <a class="justify-content-end m-2 col-lg-2 btn btn-outline-secondary fs-3" href="">Mon compte</a>
            </div>

            <div class="mt-5">

                <div class="">
                    
                    <ul class="">
                    <H1 class="text-center">MARS 2023</H1>
                        <li class="card w-80">
                            <div class="card-body justify-content-between row">
                                <p class="titleCard btn btn-outline-secondary col">repas</p>
                                <p class="col btn btn-outline-secondary">24/03/2023</p>
                                <p class="truncate col btn btn-outline-secondary">15 euros</p>
                                <p class="truncate col btn btn-outline-secondary">validé</p>
                                <p class="truncate btn btn-outline-secondary col">non modif</p>
                                <a href="plusDinfoDetailNotesDeFrais.php" class="col btn btn-outline-secondary">Plus d'info</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <ul class="">
                        <li class="card w-80">
                            <div class="card-body justify-content-between row">
                                <p class="titleCard btn btn-outline-secondary col">trajets</p>
                                <p class="col btn btn-outline-secondary">28/03/2023</p>
                                <p class="truncate col btn btn-outline-secondary">10 euros</p>
                                <p class="truncate col btn btn-outline-secondary">en traitement</p>
                                <p class="truncate btn btn-outline-secondary col">modifiable</p>
                                <a href="" class="col btn btn-outline-secondary">Plus d'info</a>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="">
                    <ul class="">
                        <li class="card w-80">
                            <div class="card-body justify-content-between row">
                                <p class="titleCard btn btn-outline-secondary col">parking</p>
                                <p class="col btn btn-outline-secondary">27/03/2023</p>
                                <p class="truncate col btn btn-outline-secondary">18 euros</p>
                                <p class="truncate col btn btn-outline-secondary">en traitement</p>
                                <p class="truncate btn btn-outline-secondary col">modifiable</p>
                                <a href="" class="col btn btn-outline-secondary">Plus d'info</a>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="">
                    <ul class="">
                        <li class="card w-80">
                            <div class="card-body justify-content-between row">
                                <p class="titleCard btn btn-outline-secondary col">repas</p>
                                <p class="col btn btn-outline-secondary">29/03/2023</p>
                                <p class="truncate col btn btn-outline-secondary">19 euros</p>
                                <p class="truncate col btn btn-outline-secondary">validé</p>
                                <p class="truncate btn btn-outline-secondary col">non modif</p>
                                <a href="" class="col btn btn-outline-secondary">Plus d'info</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="container ">
                    <div class="row text-center g-4">
                        <div class="row justify-content-center g-0">
                            <article class="card mb-3 mt-5 mywidthCard ps-lg-3 pt-3 pb-3">
                                <div class="row g-0 justify-content-center">
                                    <div class="row justify-content-center">
                                        <h3 class="fs-4 titleCard btn btn-outline-secondary col m-1">nom de la note de frais</h3>
                                        <p class="col btn btn-outline-secondary m-1">date</p>
                                        <p class="truncate mb-3 col btn btn-outline-secondary m-1">montant</p>
                                        <p class="truncate mb-3 col btn btn-outline-secondary m-1">en traitement / validé</p>
                                        <p class="truncate mb-3 btn btn-outline-secondary col m-1">modifiable / non modif</p>
                                        <a href="" class="btn blueButton col btn-outline-secondary m-1">Plus d'info</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>


                    <div class="text-center mt-5 pb-5">
                        <a style="color: black; text-decoration: none;" class="btn btn-outline-danger" href="">Deconnexion</a>
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
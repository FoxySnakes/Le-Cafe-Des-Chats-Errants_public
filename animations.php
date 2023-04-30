<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/icon.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Nos animations</title>
</head>

<body>
    <?php require "./elements/navbar.php" ?>
    <div class="main-container bg-white">


        <div class="bg-white d-flex flex-column align-items-center p-5" id="animations-container">
            <h2 class="text-main text-decoration-underline fw-bold pb-4">Nos animations</h2>
            <div class="d-flex flex-column w-100">
                <div class="d-flex flex-column align-items-center flex-lg-row justify-content-between w-100 rounded-big bg-gray-bold py-3 px-3 px-lg-4 mb-5">
                    <div class="d-flex flex-column flex-lg-row">
                        <p class="f-size-18px fw-medium me-lg-2 me-lg-3 mb-2 mb-lg-auto text-center my-auto">Trier par :</p>
                        <div class="row align-items-center justify-content-center m-0">
                            <input class="d-none" type="radio" name="sortBy" id="sortByName" value="name" checked>
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="sortByName">Nom</label>
                            <input class="d-none" type="radio" name="sortBy" id="sortByPopularity" value="popularity">
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="sortByPopularity">Popularité</label>
                            <input class="d-none" type="radio" name="sortBy" id="sortByDate" value="date">
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="sortByDate">Date</label>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-lg-row mt-4 mt-lg-0">
                        <p class="f-size-18px fw-medium me-lg-2 me-lg-3 mb-2 mb-lg-auto text-center my-auto">Type :</p>
                        <div class="row align-items-center justify-content-center m-0">
                            <input class="d-none" type="radio" name="type" id="typeAll" value="all" checked>
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="typeAll">Tous</label>
                            <input class="d-none" type="radio" name="type" id="typeOccasional" value="occasional">
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="typeOccasional">Occasionnelle</label>
                            <input class="d-none" type="radio" name="type" id="typeRecurring" value="recurring">
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="typeRecurring">Récurente</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column" id="animations-content" style="gap:25px">
                    <!-- Animations display here -->
                </div>
            </div>
            <div>

            </div>
        </div>

    </div>
    <script src="./js/animation.js"></script>
    <script src="./js/animationsRequire.js"></script>
    <?php require "./elements/footer.php" ?>
</body>

</html>
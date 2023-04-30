<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="15"> -->
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/icon.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Notre carte</title>
</head>

<body>
    <?php require "./elements/navbar.php" ?>

    <div class="main-container bg-white">
        <div class="bg-white d-flex flex-column align-items-center p-5" id="menu-container">
            <h2 class="text-main text-decoration-underline fw-bold pb-5">Notre Menu</h2>
            <div class="d-flex flex-column w-100">
                <div class="d-flex flex-column align-items-center flex-md-row justify-content-between w-100 rounded-big bg-gray-bold py-3 px-3 px-md-4 mb-5">
                    <div class="d-flex flex-column flex-md-row">
                        <p class="f-size-18px fw-medium me-md-2 me-md-3 mb-2 mb-md-auto text-center my-auto">Trier par :</p>
                        <div class="row align-items-center justify-content-center m-0">
                            <input class="d-none" type="radio" name="sortBy" id="sortByName" value="name" checked>
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="sortByName">Nom</label>
                            <input class="d-none" type="radio" name="sortBy" id="sortByPopularity" value="popularity">
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="sortByPopularity">Popularité</label>
                            <input class="d-none" type="radio" name="sortBy" id="sortByPrice" value="price">
                            <label class="trans-500 btn-rounded py-1 px-2 m-1" for="sortByPrice">Price</label>
                        </div>
                    </div>
                </div>
                <div class="row" id="products-content">
                    <!-- Products display here -->
                </div>
                <div class="d-flex flex-column align-items-center mt-5">
                    <h3 class="text-main text-decoration-underline fw-bold pb-3">Les promotions actuelles</h3>
                    <div class="bg-main row p-3 justify-content-center rounded-big">
                        <div class="d-flex flex-column col-12 col-md-6 bg-gray-bold p-3 pt-2 mb-3 rounded-big" style="height: 150px;">
                            <p class="text-decoration-underline pb-2 f-size-20px">Lundi 24 avril - Dimanche 7 mai (inclus)</p>
                            <div class="d-flex align-items-center position-relative overflow-hidden rounded-big">
                                <p class="position-absolute text-white f-size-20px fw-medium ms-2" style="z-index: 1;">2 café acheté, 1 café offert</p>
                                <img class="w-100 darker blur" src="./assets/pictures/grain-cafe-resize.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "./elements/footer.php" ?>
    <script src="./js//productsRequire.js"></script>
    <script src="./js/animation.js"></script>
</body>

</html>
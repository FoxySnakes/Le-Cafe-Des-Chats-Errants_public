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
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Le café des chats errants</title>
</head>

<body>
<?php require "./elements/navbar.php" ?>
    <div class="main-container">

        <section class="position-relative d-flex justify-content-center align-items-center overflow-hidden" id="home">
            <img class="border-white" src="./assets/pictures/logo.png" alt="Logo du café">
            <img class="position-absolute darker" src="./assets/pictures/interieur-cafe.jpg" alt="Intérieur du café" width="1800px">
        </section>
        <section class="d-flex flex-column align-items-center py-5 bg-white" id="why-come-to-us">
            <h2 class="text-main text-center">Pourquoi venir chez nous ?</h2>
            <div class="d-flex flex-column align-items-center px-5">
                <div class="d-flex flex-column flex-lg-row align-items-center border-main p-2">
                    <img class="rounded" src="./assets/pictures/chat-regarde-cafe.png" alt="Chat qui regarde un café" width="300px">
                    <div class="d-flex flex-column align-items-center px-4 py-4 py-lg-2">
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <h3 class="text-main fw-semibold">Venez profiter de nos adorables félins</h3>
                            <p>Aimé de tous nos habitués, nos magnifiques petites bêtes poilues sont là pour égayer votre petit moment de détente au sein de notre café. Ces gentils matous sont calins et adorent jouer avec nos clients si ceux-ci le désirent.</p>
                        </div>
                        <a class="bg-main px-3 py-1 btn-rounded mt-3" href="contact.php">Réserver</a>
                    </div>
                </div>
                <div class="d-flex flex-column-reverse flex-lg-row align-items-center border-main p-2">
                    <div class="d-flex flex-column align-items-center px-4 py-4 py-lg-2">
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <h3 class="text-main fw-semibold">Détendez-vous sans bruit grâce à nos espaces isolés</h3>
                            <p>Nous avons renforcé l’isolation de toutes nos pièces à l’étage afin de permettre à nos clients de profiter de leur moment de détente sans être dérangé par les bruits incessants de la ville. </p>
                        </div>
                        <a class="bg-main px-3 py-1 btn-rounded mt-3" href="contact.php">Venez nous voir</a>
                    </div>
                    <img class="rounded" src="./assets/pictures/femme-boit-cafe.png" alt="Femme qui boit un café" width="300px">
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center bg-main py-5" id="animations">
            <h2 class="text-decoration-underline text-white pb-3">Nos animations</h2>
            <div class="d-flex flex-column flex-md-row py-5">
                <?php require './phpRequest/betterAnimationsOnHome.php' ?>
            </div>
            <div class="py-4">
                <a class="bg-white px-3 py-1 btn-rounded text-main fw-semibold d-flex align-items-center" href="animations.php"><span class="icon-news me-2"></span> Voir toutes nos animations</a>
            </div>
        </section>
        <section class="d-flex flex-column bg-white py-4 px-5" id="menu">
            <div class="d-flex flex-column flex-lg-row pt-2 pb-4">
                <div class="flex-fill">
                    <h2 class="text-main text-decoration-underline">On vous a convaincu&nbsp;?</h2>
                    <h2 class="text-main text-decoration-underline">Venez dégustez un bon café avec nous&nbsp;!</h2>
                </div>
                <div class="d-flex align-items-center align fit-content align-self-center mt-4">
                    <a class="bg-main px-3 py-1 btn-rounded fw-semibold d-flex align-items-center" href="menu.php">Voir notre carte <span class="icon-chevron-droit ps-2"></span></a>
                </div>
            </div>
            <div class="d-flex flex-fill py-5">
                <label class="d-flex align-items-center me-2">
                    <span class="icon-chevron-gauche text-main f-size-28px cursor-pointer" onclick="scrollCartTo('left')"></span>
                </label>
                <div class="position-relative d-flex flex-fill align-items-center pb-5" id="cart-item-container">
                    <div class="position-relative d-flex flex-fill align-items-center w-100" id="cart-item-translation">                        
                        <?php require './phpRequest/betterProductsOnHome.php' ?>
                    </div>
                </div>
                <label for="" class="d-flex align-items-center ms-2">
                    <span class="icon-chevron-droit text-main f-size-28px cursor-pointer" onclick="scrollCartTo('right')"></span>
                </label>
            </div>
            <div class="d-flex flex-column flex-md-row align-items-md-center pt-4">
                <p class="text-main">Vous souhaitez venir avec un grand groupe ?</p>
                <a class="bg-main px-3 py-1 btn-rounded fw-semibold ms-md-3 mt-2 mt-md-0 d-flex align-items-center" href="contact.php?reservationType=piece">Réserver une pièce <span class="icon-chevron-droit ps-2"></span></a>
            </div>
        </section>
    </div>
    <?php require "./elements/footer.php" ?>

    <script src="./js/animation.js"></script>
</body>

</html>
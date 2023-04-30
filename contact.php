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
    <title>Contact</title>
</head>

<body>
    <?php require "./elements/navbar.php" ?>

    <div class="main-container bg-white">
        <div class="bg-white d-flex flex-column align-items-center p-5" id="contact-container">
            <h2 class="text-main text-decoration-underline fw-bold pb-5">Nous contacter</h2>
            <div class="d-flex flex-column-reverse flex-md-row w-100">
                <div class="d-flex flex-column justify-content-center align-items-center align-items-md-start">
                    <div class="d-flex flex-column mb-3 align-items-center align-items-md-start">
                        <p class="text-main text-decoration-underline fw-medium f-size-18px mb-2">Adresse</p>
                        <p>27, Rue des Papricas</p>
                        <p>75000 Paris</p>
                        <p>France</p>
                    </div>
                    <div class="d-flex flex-column mb-3 align-items-center align-items-md-start">
                        <p class="text-main text-decoration-underline fw-medium f-size-18px mb-2">Téléphone</p>
                        <p>+33 2 45 81 65 75</p>
                    </div>
                    <div class="d-flex flex-column mb-3 align-items-center align-items-md-start">
                        <p class="text-main text-decoration-underline fw-medium f-size-18px mb-2">Mail</p>
                        <p><a class="text-black" href="mailto:contact-cafedeschatserrants@gmail.com">contact-cafedeschatserrants@gmail.com</a></p>
                    </div>
                    <div class="d-flex flex-column mb-3 align-items-center align-items-md-start">
                        <p class="text-main text-decoration-underline fw-medium f-size-18px mb-2">Horaires</p>
                        <p>Du Lundi au Vendredi :</p>
                        <p class="mb-1">7h-23h</p>
                        <p>Week-end :</p>
                        <p>7h-01h</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-fill px-4 mb-4 mb-lg-0">
                    <form class="row bg-main m-0 rounded-big p-4" method="POST">
                        <div class="row col-12 m-0 p-0">
                            <div class="d-flex flex-column col-12 col-lg-6 mb-3 mb-lg-0">
                                <label for="firstname">Prénom</label>
                                <input type="text" id="firstname" placeholder="Prénom" required>
                            </div>
                            <div class="d-flex flex-column col-12 col-lg-6">
                                <label for="lastname">Nom de famille</label>
                                <input type="text" id="lastname" placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="d-flex flex-column col-12">
                            <label for="mail">E-Mail</label>
                            <input type="mail" id="mail" placeholder="mail@domain.com" required>
                        </div>
                        <div class="d-flex flex-column col-12">
                            <label for="sujet">Sujet</label>
                            <select name="" id="sujet" required>
                                <option value="" selected disabled hidden>Séléctionner une option</option>
                                <option value="Demande de réservation">Demande de réservation</option>
                                <option value="Demande de renseignement">Demande de renseignement</option>
                                <option value="Postuler pour un poste">Postuler pour un poste</option>
                                <option value="Suggestion / Commentaire">Suggestion / Commentaire</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column col-12">
                            <label for="message">Message</label>
                            <textarea id="message" rows="10" placeholder="Ecrivez votre message içi."></textarea>
                            <span class="f-size-12px text-gray-bold mt-1 ms-1">*Vous pouvez modifier le message prédéfinit si il ne convient pas à votre demande</span>
                        </div>
                        <div class="d-flex justify-content-center col-12 mt-2">
                            <button class="bg-white px-4 py-1 btn-rounded text-main fw-semibold" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div>

                </div>
            </div>
        </div>

    </div>
    <?php require "./elements/footer.php" ?>

    <script src="./js/animation.js"></script>
    <script src="./js/contactMail.js"></script>
</body>

</html>
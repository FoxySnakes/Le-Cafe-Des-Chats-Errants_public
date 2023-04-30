var reservationParams = new URLSearchParams(new URL(window.location.href).search);
var animationName = reservationParams.get("name");
var animationDate = reservationParams.get("date");
var animationHour = reservationParams.get("hour");

var messageArea = document.querySelector("#contact-container textarea");
switch (reservationParams.get("reservationType")) {
    case 'piece':
        messageArea.innerHTML = "Bonjour, je souhaiterais réserver une pièce le { Jour / Heure } pour un groupe de { X } personnes.";
        break;
    case 'animation':
        messageArea.innerHTML = `Bonjour, je souhaiterais réserver { X } place(s) pour l'animation "${animationName}" du ${animationDate} à ${animationHour}. `;
        break;
}

var form = document.querySelector("#contact-container form");
form.addEventListener("submit", e => {
    e.preventDefault();
    let name = `${document.getElementById("firstname").value.replace(/^\w/, u => u.toUpperCase())} ${document.getElementById("lastname").value.replace(/^\w/, u => u.toUpperCase())}`;
    let mail = document.getElementById("mail").value;
    let message = document.getElementById("message").value;
    let subject = document.getElementById("sujet").value

    form.reset();

    sendEmail(name, mail, subject, message)
})

function sendEmail(name, mail, subject, message) {
    Email.send({
        SecureToken: "d23aaeb1-f3cb-4834-969a-6d517d30398a",
        To: 'contact.lecafedeschatserrants@gmail.com',
        From: "contact.lecafedeschatserrants@gmail.com",
        Subject: subject,
        Body: `Demandeur : ${name}\n
               Mail : ${mail}\n\n
               Message : ${message}`
    }).then((success) => {
        console.log(success)
        if (success == "OK") {
            document.getElementById('popup').innerHTML += `<div class="notif-success"><p><span class="icon-check me-2"></span>Votre e-mail a bien été envoyé !</p></div>`;
        }
        else {
            document.getElementById('popup').innerHTML += `<div class="notif-error"><p><span class="icon-cancel me-2"></span>Une erreur est apparue</p></div>`;
        }
    }).catch((error) => {
        console.log(error)
    })


}
var filters = document.querySelectorAll("input[name=sortBy] , input[name=type]");
var animationsContents = []
var cacheEndDate = new Date();

fetchAnimations();

filters.forEach((element) => {
    element.addEventListener('change', () => {
        var sortBy = document.querySelector("input[name=sortBy]:checked").id.replace('sortBy', '').toLowerCase();
        var type = document.querySelector("input[name=type]:checked").id.replace('type', '').toLowerCase();
        if(Date.now() > cacheEndDate){
            fetchAnimations();
        }
        displayAnimations(sortBy, type);
    })
})

function fetchAnimations() {
    console.log("start fetch")
    fetch('./phpRequest/animationsFilters.php', {
        method: 'GET',
    }).then(response => response.text())
        .then(data => {
            animations = JSON.parse(data)
            animations.forEach((animation) => {

                var dateStart = new Date(animation.dateStart).toLocaleDateString('fr-Fr', { weekday: 'long', day: 'numeric', month: 'long' }).replace(/^\w/, u => u.toUpperCase())
                var hourStart = new Date(animation.dateStart).toLocaleTimeString('fr-FR', { hour12: false }).slice(0, 5).replace(':', 'h').replace('00', '')
                var hourEnd = new Date(animation.dateEnd).toLocaleTimeString('fr-FR', { hour12: false }).slice(0, 5).replace(':', 'h').replace('00', '')

                var content = `
                <div id="animations-${animation.id}">
                    <input type="checkbox" name="animations-dropdown" id="animations-dropdown-${animation.id}" class="d-none" onchange="dropdown(this)">
                    <div class="animations-dropdown-container">
                        <label class="animations-dropdown-menu cursor-pointer flex-column flex-md-row align-items-center align-items-md-stretch" for="animations-dropdown-${animation.id}">
                            <img class="rounded" src="${animation.pictureUrl}" alt="" loading="lazy">
                            <div class="d-flex flex-column ps-3 my-3 my-md-0">
                                <p class="f-size-18px"><span class="f-size-20px fw-medium">${animation.name}</span><span class="d-none d-md-inline-block">&nbsp;-&nbsp;</span><br class="d-md-none" />${dateStart}</p>
                                <p class="line-3 mt-3 mt-md-1 flex-fill">${animation.description}</p>
                                <div class="d-none d-md-flex justify-content-center cursor-pointer">
                                    <span class="icon-chevron-bas f-size-20px fw-medium trans-1000"></span>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-center my-auto">
                                <p class="d-flex align-items-center text-center h-100 fw-medium">Places restantes</p>
                                <p class="d-flex align-items-center text-center h-100 alert ${(animation.remainingPlaces == 0 ? "alert-danger" : "alert-success")} mb-1">${(animation.remainingPlaces == 0 ? "Complet" : animation.remainingPlaces)}</p>
                            </div>
                            <span class="d-md-none icon-chevron-bas f-size-20px fw-medium trans-1000"></span>
                        </label>
                        <div class="animations-dropdown-content">
                            <div class="d-flex flex-column">
                                <p class="f-size-18px fw-semibold text-decoration-underline mb-1">Description</p>
                                <p class="mb-4">${animation.description}</p>
                                <p class="mb-1"><span class="f-size-18px fw-semibold text-decoration-underline me-3">Nombres de places :</span>${animation.totalPlaces}</p>
                                <p><span class="f-size-18px fw-semibold text-decoration-underline me-3">Date :</span>${dateStart} / ${hourStart} - ${hourEnd}</p>
                            </div>
                            <a class="bg-main px-4 py-1 btn-rounded fw-medium mb-2 mt-3 mt-md-2 align-self-center" href="contact.php?reservationType=animation&name=${animation.name}&date=${dateStart}&hour=${hourStart}">Réserver</a>
                        </div>
                    </div>
                </div>`;

                animationsContents.push({ Content: content, ContainerId: `animations-${animation.id}`, Name: animation.name, Popularity: animation.popularity, Date: animation.dateStart, Recurrence: animation.recurrence })
            });
            displayAnimations('name', 'all');
        }).catch(error => {
            console.error(error)
        });
    cacheEndDate = new Date(new Date(Date.now()).setMinutes(new Date(Date.now()).getMinutes() + 10))
}

function displayAnimations(sortBy, type) {
    var animationsContentsDisplay = [];

    switch (sortBy) {
        case 'name':
            animationsContentsDisplay = [...animationsContents].sort((function (a, b) {
                return a.Name.localeCompare(b.Name);
            }))
            break;
        case 'popularity':
            animationsContentsDisplay = [...animationsContents].sort((function (a, b) {
                if (a.Popularity > b.Popularity) { return 1; } else { return -1; }
            }))
            break;
        case 'date':
            animationsContentsDisplay = [...animationsContents].sort((function (a, b) {
                if (a.Date > b.Date) { return 1; } else { return -1; }
            }))
            break;
        default:
            throw new Error('"An error has been occured during process"')
    }
    if (type != 'all') {
        animationsContentsDisplay = animationsContentsDisplay.filter(animation => animation.Recurrence === type);
    }

    var globalContent = "";
    animationsContentsDisplay.forEach(animation => {
        globalContent += animation.Content;
    })

    document.getElementById("animations-content").innerHTML = globalContent;
}

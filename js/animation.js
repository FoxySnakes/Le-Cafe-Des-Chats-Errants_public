//#region NavBar
var inputMenu = document.getElementById("navbar");
var opacitingDiv = document.getElementById("opaciting")

inputMenu.addEventListener('change', () => {
    if (inputMenu.checked) {
        opacitingDiv.style.display = "block"
        setTimeout(() => opacitingDiv.style.opacity = 0.7, 1)
    }
    else {
        setTimeout(() => opacitingDiv.style.display = "none", 500)
        opacitingDiv.style.opacity = 0;
    }
})
opacitingDiv.addEventListener('click', () => {
    if (opacitingDiv.style.display != "none") {
        setTimeout(() => opacitingDiv.style.display = "none", 500)
        opacitingDiv.style.opacity = 0;
        inputMenu.checked = false
    }
})
//#endregion

//#region Cart-container
function scrollCartTo(direction) {
    var cartItemContainer = document.getElementById("cart-item-container");
    switch (direction) {
        case 'left':
            cartItemContainer.scrollLeft = cartItemContainer.scrollLeft - cartItemContainer.clientWidth
            break;
        case 'right':
            cartItemContainer.scrollLeft = cartItemContainer.scrollLeft + cartItemContainer.clientWidth;
            break;
        default:
            throw new Error(`direction is invalid : ${direction}`)
    }
}
//#endregion


//#region Animations-container

function dropdown(input) {
    var container = document.querySelector(`#${input.id} + .animations-dropdown-container`);
    var menu = container.firstElementChild;
    if (input.checked) {
        container.style.height = `${container.scrollHeight}px`;
        setTimeout(() => { if (input.checked) { container.style.height = "auto" } }, 1000)
        document.querySelectorAll('.animations-container input[type=checkbox]').forEach((element) => {
            if (element.id != input.id) {
                element.checked = false;
                elementContainer = document.querySelector(`#${element.id} + .animations-dropdown-container`);
                elementContainer.style.height = `${elementContainer.firstElementChild.offsetHeight}px`;
            }
        })
    }
    else {
        container.style.height = `${container.scrollHeight}px`;
        container.style.height = `${menu.offsetHeight}px`;
    }
}
//#endregion


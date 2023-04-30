var filters = document.querySelectorAll("input[name=sortBy]");
var productsContents = []
var cacheEndDate = new Date();

fetchProducts();

filters.forEach((element) => {
    element.addEventListener('change', () => {
        var sortBy = document.querySelector("input[name=sortBy]:checked").id.replace('sortBy', '').toLowerCase();
        if(Date.now() > cacheEndDate){
            fetchProducts();
        }
        console.log(sortBy)
        displayProducts(sortBy);
    })
})

function fetchProducts() {
    console.log("start fetch")
    fetch('./phpRequest/productsRequire.php', {
        method: 'GET',
    }).then(response => response.text())
        .then(data => {
            products = JSON.parse(data)
            products.forEach((product) => {
                var price = `${product.price.split('.')[0]}<sup>,${product.price.split('.')[1]}</sup>`;
                var content = `<div class="cart-item d-flex flex-column align-items-center col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="d-flex align-items-center justify-content-center cart-item-img bg-main">
                        <img src="${product.pictureUrl}" alt="">
                    </div>
                    <div class="d-flex flex-column align-items-end text-main fw-medium px-2 w-100">
                        <p class="w-100 text-center fw-semibold py-2">${product.name}</p>
                        <p class="border-main p-1 rounded">${price}</p>
                    </div>
                </div>
            </div>`;
                productsContents.push({ Content: content, ContainerId: `Products-${product.id}`, Name: product.name, Popularity: product.popularity, Price: product.price })
            });
            displayProducts('name');
        }).catch(error => {
            console.error(error)
        });
    cacheEndDate = new Date(new Date(Date.now()).setMinutes(new Date(Date.now()).getMinutes() + 10))
}

function displayProducts(sortBy) {
    var productsContentsDisplay = [];

    switch (sortBy) {
        case 'name':
            productsContentsDisplay = [...productsContents].sort((function (a, b) {
                return a.Name.localeCompare(b.Name);
            }))
            break;
        case 'popularity':
            productsContentsDisplay = [...productsContents].sort((function (a, b) {
                if (a.Popularity > b.Popularity) { return 1; } else { return -1; }
            }))
            break;
        case 'price':
            productsContentsDisplay = [...productsContents].sort((function (a, b) {
                if (a.Price > b.Price) { return 1; } else { return -1; }
            }))
            break;
        default:
            throw new Error('"An error has been occured during process"')
    }

    var globalContent = "";
    productsContentsDisplay.forEach(product => {
        globalContent += product.Content;
    })

    document.getElementById("products-content").innerHTML = globalContent;
}

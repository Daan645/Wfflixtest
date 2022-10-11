if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready(){

    bg = document.getElementsByClassName("bg");
    product = document.getElementsByClassName("product-link");

    document.querySelectorAll(".product-link").forEach(item => {
        item.addEventListener("click", event => {
            id = item.getAttribute("data-productid");

            productFull = document.getElementById( id );
            bg[0].style.display = "block";

            productFull.style.top = "50%";
        });
    });
    var removeItemButtons = document.getElementsByClassName('close-icon')
    for (var i = 0; i < removeItemButtons.length; i++) {
        var button = removeItemButtons[i]
        button.addEventListener('click', removePage)
    }
    document.addEventListener('keydown', function(event){
        if(event.key === "Escape"){
            removePage();
        }
    });
}

function removePage(event){
    bg[0].style.display = "none";
    document.querySelectorAll(".full-product").forEach(productFull => {
        productFull.style.top = "-50%";
    });
}

function increaseCount(a, b) {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    input.value = value;
}

function decreaseCount(a, b) {
    var input = b.nextElementSibling;
    var value = parseInt(input.value, 10);
    if (value > 1) {
        value = isNaN(value) ? 0 : value;
        value--;
        input.value = value;
    }
}
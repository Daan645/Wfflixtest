

var addToCartButtons =  document.getElementsByClassName('card-btn')
for (var i = 0; i < addToCartButtons.length; i++) {
    var button = addToCartButtons[i]
    button.addEventListener('click', addToCartClicked)
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement
    var title = shopItem.getElementsByClassName('product-name')[0].innerText
    var itemPrice = shopItem.getElementsByClassName('product-price')[0].innerText
    var imageSrc = shopItem.getElementById('image-source').src
    console.log(imageSrc)
}
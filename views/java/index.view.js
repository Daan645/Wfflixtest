
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', readyIndex)
} else {
    readyIndex()
}
function readyIndex() {
    var addToCartButtons = document.getElementsByClassName('card-btn')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('product-price')[0]
    console.log(shopItem)
}
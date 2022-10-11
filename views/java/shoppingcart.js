// If-statement to check if the page is loaded, if loaded then run ready function.
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

// Function that runs necessary commands
function ready() {
    // Function that reloads shopping cart, so it displays correct information
    updateCartTotal()
    var removeItemButtons = document.getElementsByClassName('btn-delete') //variable stores elements of btn-delete div
    for (var i = 0; i < removeItemButtons.length; i++) {    // for-loop that checks for amount of delete buttons in shopping cart
        var button = removeItemButtons[i]                   // Variable stores amount found in for-loop
        button.addEventListener('click', removeCartItem)      // Adding event when delete button is clicked and directs to necessary function
    }
    var quantityInputs = document.getElementsByClassName('item-quantity') //
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
}

// Function that removes cart item when delete button pressed
function removeCartItem(event) {
    var buttonClicked = event.target // Adding target to section when delete button pressed
    buttonClicked.parentElement.parentElement.parentElement.parentElement.remove()  // Selecting right section to delete with parentElement
    updateCartTotal() // Initiate function to reload page to display right information
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

// Function to calculate cart total price
function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]  // Variable stores elements of div: cart-items
    var cartRows = cartItemContainer.getElementsByClassName('cart-row') // Variable stores elements of div: cart-row
    var b = 0   // Prop variable
    var c = 0   // Prop variable
    var x = 0
    var subtotal = 0
    var total = 0
    var btwtotal = 0
    for (var i = 0; i < cartRows.length; i++) {  // For-loop counts the amount of product by calculating the rows in shopping cart
        var cartRow = cartRows[i]  // Stores the for loop element in variable cartRow
        var priceElement = cartRow.getElementsByClassName('item-price')[0]  // Stores elements of div: item-price in variable priceElement
        var quantityElement = cartRow.getElementsByClassName('item-quantity')[0] // Stores the elements of div: item-quantity in quantityElement
        var price = parseFloat(priceElement.innerText.replace('€', '')) // Takes the text out of priceElement and removes the € sign.
        var quantity = quantityElement.value //Stores value of quantity box in variable quantity
        x = price * quantity
        subtotal = subtotal + (price * quantity)    // Calculating subtotal
        b = subtotal * 0.19 // Calculating tax
        c = subtotal * 1.19 // Calculating totalprice
    }
    subtotal = subtotal.toFixed(2)  // Limits value to 2 decimals
    btwtotal =  b.toFixed(2)    // Limits value to 2 decimals
    total = c.toFixed(2)    // Limits value to 2 decimals
    itemsubtotal = x.toFixed(2)
    
    document.getElementsByClassName('item-price')[0].innerText = '€' + itemsubtotal  // Updates value to div
    document.getElementsByClassName('cart-sub-total-price')[0].innerText = '€' + subtotal  // Updates value to div
    document.getElementsByClassName('cart-btw-total')[0].innerText = '€' + btwtotal // Updates value to div
    document.getElementsByClassName('cart-total-price')[0].innerText = '€' + total // Updates value to div
}


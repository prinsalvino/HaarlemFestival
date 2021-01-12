// Quantity spin buttons
function increase_by_one(field, field2,minusBtnID,plusBtnID, stock) {
    nr = parseInt(document.getElementById(field).value);
    if(nr < stock){
        document.getElementById(field).value = nr + 1;
        document.getElementById(field2).value = document.getElementById(field).value;

        // Update looks of plus button
        if((nr + 1) >= stock){
            const btn = document.getElementById(plusBtnID);
            btn.disabled = true;
            btn.classList.add("DQtyBtnDisabled");
        }

        //check if textfield value is greater than 1
        const btn = document.getElementById(minusBtnID);
        btn.disabled = false;
        btn.classList.remove("DQtyBtnDisabled");
    }
}

function decrease_by_one(field, field2, minusBtnID, plusBtnID) {
    nr = parseInt(document.getElementById(field).value);
    if (nr > 1) {
        document.getElementById(field).value = nr - 1;
        document.getElementById(field2).value = document.getElementById(field).value;
        if((nr - 1) <= 1){
            const btn = document.getElementById(minusBtnID);
            btn.disabled = true;
            btn.classList.add("DQtyBtnDisabled");
        }
        const btn = document.getElementById(plusBtnID);
        btn.disabled = false;
        btn.classList.remove("DQtyBtnDisabled");
    }
}

function textFieldAddToCart(field, field2,formID){
    txtQty = parseInt(document.getElementById(field).value);

    document.getElementById(field).value = txtQty;
    document.getElementById(field2).value = document.getElementById(field).value;

    addToCartID.getElementById(formID).submit();
}

function displayAlert() {
    alert("Ticket added to cart");
}

function displayDeleteAlert() {
    alert("Order deleted from shopping cart");
}

// function displayAlert(artist_name) {
//     alert("Ticket for " + artist_name + " added to cart");
// }

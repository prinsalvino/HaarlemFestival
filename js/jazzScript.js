// Quantity spin buttons
function increase_by_one(field, field2) {
    nr = parseInt(document.getElementById(field).value);
    document.getElementById(field).value = nr + 1;
    document.getElementById(field2).value = document.getElementById(field).value;
}

function decrease_by_one(field, field2) {
    nr = parseInt(document.getElementById(field).value);
    if (nr > 0) {
        if ((nr - 1) > 0) {
            document.getElementById(field).value = nr - 1;
            document.getElementById(field2).value = document.getElementById(field).value;
        }
    }
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

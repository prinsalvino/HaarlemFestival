// Quantity spin buttons
function increase_by_one(field) {
    nr = parseInt(document.getElementById(field).value);
    document.getElementById(field).value = nr + 1;
    document.getElementById("qty1send").value = document.getElementById(field).value;
}

function decrease_by_one(field) {
    nr = parseInt(document.getElementById(field).value);
    if (nr > 0) {
        if ((nr - 1) > 0) {
            document.getElementById(field).value = nr - 1;
            document.getElementById("qty1send").value = document.getElementById(field).value;
        }
    }
}

function getInputValue(input_ID) {
    var inputValue = document.getElementById(input_ID).value;
    // return inputValue;
    document.write(inputValue);
}


function getInputValue2(input_ID, post_input_ID) {
    var inputValue = document.getElementById(input_ID).value;
    var qtySend = document.getElementById(post_input_ID);
    qtySend.setAttribute('value', inputValue);

    // return inputValue;
}
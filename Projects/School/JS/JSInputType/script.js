function checkText(element) {
    if (element.value == "") {
        element.style.backgroundColor = "#ff00008c";
    } else {
        element.style.backgroundColor = "#00f90094";
    }
}

function checkForm(element) {
    let inputs = element.querySelectorAll("input[data-required]");
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == "") {
            inputs[index].style.backgroundColor = "#ff00008c";
        }
    }
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == "") {
            document.getElementById("errormsg").innerHTML = "Bepaalde velden zijn nog niet ingevuld."
            return false;
        }
    }
}
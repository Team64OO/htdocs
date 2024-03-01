function checkText(element) {
    if (element.value == "") {
        element.style.borderBottom = "5px ridge red"
    } else {
        element.style.borderBottom = "5px ridge lime";
    }
}

function checkForm(element) {
    let inputs = element.querySelectorAll("input[data-required]");
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == "") {
            inputs[index].style.borderBottom = "5px ridge red";
        }
    }
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == "") {
            document.getElementById("outputmsg").innerHTML = "Please fill in the highlighted fields."
            return false;
        }
    }
    return true;
}
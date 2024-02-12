function edit() {
    document.getElementById("edit").style.top = "0";
}

function checkForm(element) {
    let inputs = element.querySelectorAll("input[data-required]");
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == "" || (inputs[3].value > 2025 || inputs[3].value < 1939) || (inputs[1].value.length > 50 || inputs[1].value.length < 3)) {
            document.getElementById("errormsg").innerHTML = "Bepaalde velden zijn niet correct ingevuld."
            if (inputs[1].value.length > 50) {
                document.getElementById("errormsg").innerHTML = "Je naam is te lang voor het systeem. Jij valt nu buiten de maatschappij."
                document.getElementById("errormsg").style.width = "730px"
            }
            document.getElementById("errormsg").style.color = "red"
            document.getElementById("errormsg").style.border = "1px solid red"
            return false;
        }
    }
}
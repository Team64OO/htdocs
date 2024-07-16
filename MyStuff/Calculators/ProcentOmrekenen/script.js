function getSymbol(symbol) {
    document.getElementById("basic-addon2").innerHTML = symbol;
}

const loadingButtonLoader = `<button class="btn btn-secondary" type="button" id="loadingButton" disabled><span class="spinner-border spinner-border-sm" aria-hidden="true"></span><span role="status">Loading...</span></button>`;
const buttonLoader = `<button type="button" class="btn btn-secondary" onclick="replacer()" id="button">Calculate</button>`;
const collapseShown = `<div class="collapse.show" id="collapseShown"><div class="card card-body">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</div></div>`
const collapseHidden = `<div class="collapse" id="collapseHidden"><div class="card card-body">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</div></div>`;

function replacer() {
    buttonElem = document.getElementById("button");
    loadButtonElem = document.getElementById("loadingButton");
    if (buttonElem) {
        buttonElem.outerHTML = loadingButtonLoader;
        setTimeout(replacer, 500);
        calculate();
    } else loadButtonElem.outerHTML = buttonLoader;
}

function calculate() {
    let operator = document.getElementById("basic-addon2").innerHTML;
    if (operator == "%") {
        output = "1 op " + Math.round((100 / document.getElementById("input").value) * 100) / 100;
        document.getElementById("output").innerHTML = output;
    } else if (operator == "‰") {
        output = "1 op " + Math.round((1000 / document.getElementById("input").value) * 100) / 100;
        document.getElementById("output").innerHTML = output;
    } else if (operator == "ppm") {
        output = "1 op " + Math.round((1000000 / document.getElementById("input").value) * 100) / 100;
        document.getElementById("output").innerHTML = output;
    } else if (operator == "ppb") {
        output = "1 op " + Math.round((1000000000 / document.getElementById("input").value) * 100) / 100;
        document.getElementById("output").innerHTML = output;
    }
}

function clearInput(elem) {
    elem.value = "";
}
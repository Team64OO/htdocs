// url van API, in dit geval van 750 belgische biertjes
// wil je een ander API gebruiken?
//  - verander de url
//  - pas in regels 72 en 73 de namen  van de object-keys aan
var url  = "https://15euros.nl/api/bier_basic.php";

// 3)  AJAX call met jQuery bibliotheek, heeft include van jQuery bibliotheek nodig
//     alleen via jQuery doen als je verder ook jQuery in je site gebruikt, anders overkill => te grote lib voor alleen AJAX-request
function fLaadBier_jQuery() {
    $.getJSON(url, function(json){
        console.log("Bier, geladen met AJAX via jQuery ", json);
        fJson2Html(json, "jQuery AJAX request"); // geef JSON en title door aan function
    });
}

// Na het ophalen van de JSON uit de API, wordt steeds onderstaande function aangeroepen
// die de JSON naar HTML vertaald en in "out_data" zet
function fJson2Html(json, title) {
    document.getElementById("out_title").innerHTML = title;

    var table = "<table>";
    table += "<tr>";
        table += "<th>";
            table += "nr";
        table += "</th>";
        table += "<th>";
            table += "naam";
        table += "</th>";
        table += "<th>";
            table += "brouwer";
        table += "</th>";
    table += "</tr>";
    for(var i=0; i<json.length; i++) {
        table += "<tr>";
            table += "<td>" + (i+1) + "</td>";              // zet een volgorde nummer voor in de rij
            table += "<td>" + json[i].naam + "</td>";       // haal van de array nr i van de json, de object key "naam" op
            table += "<td>" + json[i].brouwer + "</td>";    // haal van de array nr i van de json, de object key "brouwer" op
        table += "</tr>";
    }
    table += "</table>";

    document.getElementById("out_title").innerHTML = title; // vul de title die meegegeven is aan de functie in "out_title" in
    document.getElementById("out_data" ).innerHTML = table; // vul "out_data" met de uit de json opgebouwe table
}

function fClear() {
    document.getElementById("out_title").innerHTML = ""; // wis inhoud
    document.getElementById("out_data" ).innerHTML = ""; // wis inhoud
}
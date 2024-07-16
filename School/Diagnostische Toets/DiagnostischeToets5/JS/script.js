function fLoadBeers_fetch() {
    let url = "https://std.stegion.nl/api_bier/api.php?action=getBeersBrouwers";
    document.getElementById("divA").style.height = "400px";
    fetch(url)
        .then(data => {
            return data.json();
        })
        .then(beers => {
            fJson2Beers(beers);
        });
}

function fJson2Beers(beers) {

    let table = "<table>";
    table += "<tr>";
    table += "<th>naam</th>";
    table += "<th>gisting</th>";
    table += "<th>brouwer</th>";
    table += "<th>percentage</th>";
    table += "</tr>";

    for (let i = 0; i < beers.data.length; i++) {
        table += "<tr>"
        table += "<td>" + beers.data[i].naam + "</td>";
        table += "<td>" + beers.data[i].gisting + "</td>";
        table += "<td>" + beers.data[i].brouwer.naam + "</td>";
        table += "<td>" + Math.round(beers.data[i].perc * 10000) / 100 + "%" + "</td>";
        table += "</tr>"
    }
    table += "</table>";
    document.getElementById("divA").style.display = "block";
    document.getElementById("out_data").innerHTML = table;
}

function fClear() {
    document.getElementById("divA").style.display = "none";
    document.getElementById("out_data").innerHTML = "";
}
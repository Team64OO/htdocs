function fDayOfTheWeek(date) {
    switch (date.getDay()) {
        case 1:
            return "Maandag";
            break;
        case 2:
            return "Dinsdag";
            break;
        case 3:
            return "Woensdag";
            break;
        case 4:
            return "Donderdag";
            break;
        case 5:
            return "Vrijdag";
            break;
        case 6:
            return "Zaterdag";
            break;
        case 0:
            return "Zondag";
            break;
    }
}

function fMonthOfTheYear(date) {
    switch (date.getMonth()) {
        case 0:
            return "Januari";
            break;
        case 1:
            return "Februari";
            break;
        case 2:
            return "Maart";
            break;
        case 3:
            return "April";
            break;
        case 4:
            return "Mei";
            break;
        case 5:
            return "Juni";
            break;
        case 6:
            return "Juli";
            break;
        case 7:
            return "Augustus";
            break;
        case 8:
            return "September";
            break;
        case 9:
            return "Oktober";
            break;
        case 10:
            return "November";
            break;
        case 11:
            return "December";
            break;
    }
}

function fLoadWeatherForecast_fetch() {
    let url = "https://api.openweathermap.org/data/2.5/forecast?q=Zwolle,nl&appid=bc10ef8f10e93713772f855509c34515";
    document.getElementById("divA").style.height = "400px";
    fetch(url)
        .then(data => {
            return data.json();
        })
        .then(json => {
            fJson2Html(json, "forecast");
        });
}

function fLoadCurrentWeather_fetch() {
    let url = "https://api.openweathermap.org/data/2.5/weather?q=Zwolle,nl&appid=bc10ef8f10e93713772f855509c34515";
    document.getElementById("divA").style.height = "95px";
    fetch(url)
        .then(data => {
            return data.json();
        })
        .then(json => {
            fJson2Html(json, "current");
        });
}

function fJson2Html(json, usage) {

    let table = "<table>";
        table += "<tr>";
            table += "<th>Plaats: </th>";
            table += "<th>Datum-Tijd: </th>";
            table += "<th>Tijd: </th>";
            table += "<th>Temperatuur: </th>";
            table += "<th>Vochtigheid: </th>";
            table += "<th>Druk: </th>"
            table += "<th colspan = '2'>Bewolking: </th>"
            table += "<th>Wind: </th>"
        table += "</tr>";
        if (usage == "forecast") {
            for (var i = 0; i < json.list.length; i++) {
                date = new Date(json.list[i].dt * 1000);
                table += "<tr>"
                    table += "<td>" + json.city.name + ", " + json.city.country + "</td>";
                    table += "<td>" + fDayOfTheWeek(date) + " " + date.getDate() + " " + fMonthOfTheYear(date) + " " + date.getFullYear() + "</td>";
                    table += "<td>" + date.getHours() + ":" + date.getMinutes() + "0</td>";
                    table += "<td>" + (Math.round((json.list[i].main.temp - 273.15) * 100) / 100) + "°C </td>";
                    table += "<td>" + json.list[i].main.humidity + "% </td>";
                    table += "<td>" + json.list[i].main.pressure + " hPa </td>";
                    table += "<td>" + json.list[i].weather[0].description + "</td>";
                    table += "<td>" + "<img src='https://openweathermap.org/img/wn/" + json.list[i].weather[0].icon + "@2x.png'" + "</td>";
                    table += "<td>" + (Math.round(json.list[i].wind.speed * 3.6 * 100) / 100) + " km/h </td>";
                table += "</tr>"
            }
        } else if (usage == "current") {
            date = new Date(json.dt * 1000);
            table += "<tr>"
                table += "<td>" + json.name + ", " + json.sys.country + "</td>";
                table += "<td>" + fDayOfTheWeek(date) + " " + date.getDate() + " " + fMonthOfTheYear(date) + " " + date.getFullYear() + "</td>";
                table += "<td>" + date.getHours() + ":" + date.getMinutes() + "</td>";
                table += "<td>" + (Math.round((json.main.temp - 273.15) * 100) / 100) + "°C </td>";
                table += "<td>" + json.main.humidity + "% </td>";
                table += "<td>" + json.main.pressure + " hPa </td>";
                table += "<td>" + json.weather[0].description + "</td>";
                table += "<td>" + "<img src='https://openweathermap.org/img/wn/" + json.weather[0].icon + "@2x.png'" + "</td>";
                table += "<td>" + (Math.round(json.wind.speed * 3.6 * 100) / 100) + " km/h </td>";
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
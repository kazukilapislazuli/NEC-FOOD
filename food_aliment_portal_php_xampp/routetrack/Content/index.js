window.onresize = resize;

var map = null;
var bingMapsKey = "AnKP54kL5I9wjxbiar6cwqP3s8iCU80SHlQxT-ltNZ7hHpGBIfHiQR-aJgU7iS0i" ;
var bmKey = bingMapsKey;
var mapHeight = 0;

function GetMap() {
    map = new Microsoft.Maps.Map('#divMap', {
        credentials: bmKey,
        center: new Microsoft.Maps.Location(12.9716, 77.5946),
        showDashboard: true,
        zoom: 12
    });

    resize();
}

function getAjax(url, success) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url + '&key=' + bingMapsKey, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState > 3 && xhr.status == 200) success(xhr.responseText);
    };
    xhr.send();
    return xhr;
}

function GetRoutes() {
    //Car
    getAjax('https://dev.virtualearth.net/REST/v1/Routes/Driving?routeAttributes=routePath&waypoint.0=' + document.getElementById('txtStart').value + '&waypoint.1=' + document.getElementById('txtEnd').value, function (data) {
        displayRoute(JSON.parse(data), 'red', false);
    });

    //Truck
    var url = 'https://dev.virtualearth.net/REST/v1/Routes/Truck?routeAttributes=routePath&waypoint.0=' + document.getElementById('txtStart').value + '&waypoint.1=' + document.getElementById('txtEnd').value;
    if (document.getElementById('txtHeight').value.length > 0) {
        url += '&vehicleHeight=' + document.getElementById('txtHeight').value;
    }
    if (document.getElementById('txtLength').value.length > 0) {
        url += '&vehicleLength=' + document.getElementById('txtLength').value;
    }
    if (document.getElementById('txtGradient').value.length > 0) {
        url += '&vehicleMaxGradient=' + document.getElementById('txtGradient').value;
    }
    if (document.getElementById('txtHazard').value.length > 0) {
        url += '&vehicleHazardousMaterials=' + document.getElementById('txtHazard').value;
    }

    getAjax(url, function (data) {
        displayRoute(JSON.parse(data), 'green', true);
    });

    //Pins
    var startArray = document.getElementById('txtStart').value.split(',');
    map.entities.push(new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(parseFloat(startArray[0]), parseFloat(startArray[1])), {color:'green', text:'S'}));

    var endArray = document.getElementById('txtEnd').value.split(',');
    map.entities.push(new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(parseFloat(endArray[0]), parseFloat(endArray[1])), { color: 'red', text: 'E' }));
}

function displayRoute(response, color, setView) {
    var locations = [];
    var route = response.resourceSets[0].resources[0].routePath.line.coordinates;

    for (i = 0; i < route.length; i++) {
        locations.push(new Microsoft.Maps.Location(route[i][0], route[i][1]));
    }

    var polyline = new Microsoft.Maps.Polyline(locations, { strokeColor: color, strokeThickness: 3 });
    map.entities.push(polyline);

    if(setView){
        map.setView({ bounds: Microsoft.Maps.LocationRect.fromLocations(locations) });
    }
}

function LoadScenario1() {
    document.getElementById("txtStart").value = "12.9716,77.5946";
    document.getElementById("txtEnd").value = "13.0827,80.2707";
    document.getElementById("txtHeight").value = "5";
    document.getElementById("txtLength").value = "";
    document.getElementById("txtGradient").value = "";
    document.getElementById("txtHazard").value = "";
    document.getElementById("lnkBing").setAttribute("href", "https://binged.it/2oT6d4V");

    alert("Scenario 1 Loaded");
}

function LoadScenario2() {
    document.getElementById("txtStart").value = "12.9716,77.5946";
    document.getElementById("txtEnd").value = "22.5726,88.3639";
    document.getElementById("txtHeight").value = "";
    document.getElementById("txtLength").value = "18";
    document.getElementById("txtGradient").value = "";
    document.getElementById("txtHazard").value = "";
    document.getElementById("lnkBing").setAttribute("href", "https://binged.it/2pA10gi");


    alert("Scenario 2 Loaded");
}

function LoadScenario3() {
    document.getElementById("txtStart").value = "19.0760,72.8777";
     document.getElementById("txtEnd").value = "22.5726,88.3639";
    document.getElementById("txtHeight").value = "";
    document.getElementById("txtLength").value = "";
    document.getElementById("txtGradient").value = "10";
    document.getElementById("txtHazard").value = "";
    document.getElementById("lnkBing").setAttribute("href", "https://binged.it/2pA8obx");

    //alert("Scenario 3 Loaded");
}

function LoadScenario4() {
    document.getElementById("txtStart").value = "28.6139,77.2090";
    document.getElementById("txtEnd").value = "9.9312,76.2673";
    document.getElementById("txtHeight").value = "";
    document.getElementById("txtLength").value = "";
    document.getElementById("txtGradient").value = "";
    document.getElementById("txtHazard").value = "F";
    document.getElementById("lnkBing").setAttribute("href", "https://binged.it/2hd6P3s");

    //alert("Scenario 4 Loaded");
}

function ClearMap() {
    map.entities.clear();
}

//Resize the map
function resize() {
    var mapDiv = document.getElementById("divMap");
    var panelDiv = document.getElementById("divPanel");
    var windowHeight = $(window).height();
    mapHeight = windowHeight - 50;
    panelHeight = windowHeight - 90;
    mapDiv.style.height = mapHeight + "px";
    panelDiv.style.height = panelHeight + "px";
}
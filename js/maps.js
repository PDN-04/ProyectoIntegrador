/** Autor: Juan José Rubio**/
/** API Google Maps https://developers.google.com/maps/documentation/javascript/ **/
/** Limites de la API https://developers.google.com/maps/documentation/javascript/usage **/
/** Free until exceeding 25,000 map loads per 24 hours**/

/** Para crear rutas usaremos Directions **/
/** https://developers.google.com/maps/documentation/javascript/directions **/
function initMap() {
    // Mostramos el mapa
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 6,
        /** Aqui centraremos donde nos de la gana, por ejemplo en el punto intermedio de la ruta **/
        center: { lat: 42.00, lng: -5.67 }

    });
    directionsDisplay.setMap(map);

    // calculamos la ruta y la dibujamos
    calculateAndDisplayRoute(directionsService, directionsDisplay);
}



function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    var waypts = [];

    /** Aqui irian todos los waypoints ***/
    /** Los stepover sirven para mostrar los "globitos" de los waypoints en el mapa **/
    waypts.push({
        location: { lat: 42.0016873, lng: -5.6802475 },
        stopover: false
    });
    waypts.push({
        location: { lat: 41.9976764, lng: -5.6783772 },
        stopover: false
    });

    waypts.push({
        location: { lat: 41.9958127, lng: -5.6785077 },
        stopover: false
    });

    directionsService.route({
        /** Primer waypoint **/
        origin: { lat: 42.0000346, lng: -5.6784434 },

        /** Ultimo waypoint **/
        destination: { lat: 41.9959943, lng: -5.6789704 },

        /** Array con todos los waypoints **/
        waypoints: waypts,

        optimizeWaypoints: true,
        /** Esto es para calcular la ruta pero como tenemos muchos puntos da igual que calcule andando o en avion **/
        /** https://developers.google.com/maps/documentation/javascript/directions?hl=es#TravelModes **/
        travelMode: google.maps.TravelMode.WALKING
    }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
}

function initMap() {
    var mapDiv = document.getElementById('map_google');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: 50.6904931, lng: 21.7420909},
        zoom: 9
    });
    // stworzenie markera
    var punkt  = new google.maps.LatLng(50.6969616,21.719638);
    var opcjeMarkera =
    {
        position: punkt,
        map: map,
        title: "Tu się znajdujemy"
    }
    var marker = new google.maps.Marker(opcjeMarkera);
}
var map;
var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(-19.257753, 146.823688),
        zoom: 2,
        mapTypeId: 'terrain'
    })
}

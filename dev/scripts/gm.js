var map;

function initialize() {
    var mapOptions = {
        scrollwheel: false,
        zoom: 12,
        center: new google.maps.LatLng(48.06, 12.22),
        styles: [{
            "featureType": "landscape.natural",
            "stylers": [{
                "visibility": "on"
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "on"
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": " #173d42"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [{
                "saturation": -48
            }]
        }, {
            "featureType": "administrative.country",
            "elementType": "geometry.stroke",
            "stylers": [{
                "visibility": "on"
            }, {
                "weight": 1
            }, {
                "color": " #173d42"
            }]
        }, {
            "featureType": "poi",
            "stylers": [{
                "visibility": "on"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#035436"
            }, {
                "weight": 1
            }]
        }, {
            "featureType": "road.highway.controlled_access",
            "elementType": "labels.icon",
            "stylers": [{
                "weight": 0.9
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "road.highway.controlled_access",
            "stylers": [{
                "weight": 0.8
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry.stroke",
            "stylers": [{
                "visibility": "on"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry.fill",
            "stylers": [{
                "visibility": "on"
            }, {
                "weight": 0.9
            }]
        }, {
            "featureType": "transit",
            "stylers": [{
                "visibility": "on"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#4e91a0"
            }]
        }]
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var myLatlng = new google.maps.LatLng(48.0622, 12.2272);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Hello World!'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

google.maps.visualRefresh = true;
